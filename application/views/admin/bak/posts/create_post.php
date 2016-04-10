<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   {date}
 * File     :   index.php
 * Copyright Nurakan Technologies Pvt. Ltd.
 */
?>
<?php
global $config;
if(isset($action)){
    if($action == 'modify'){
        $file = $config['uploads'].$config['sep'].'gallery'.$config['sep'].date('Y/m/d',strtotime($post['post_created']));
        $file = $file.$config['sep'].$post['post_image'];
        $image = $file;
        $method = '/ktm197/superadmin/post?action=modify&name='.str_replace(' ','-',$post['post_name']).'&title=' . str_replace(' ', '-', $post['post_title']);
    }
} else{
    $method = '/ktm197/superadmin/post?action=create';
}
?>
<script src="<?php echo $plugin_dir;?>/ckeditor/ckeditor.js" type="text/javascript"></script>
<div class="right-content">
    
  <h1 class="alert"><?php isset($action)?'Modify post '.$post['post_name']:'Create a Post';?></h1>
    <p> <a href="javascript:history.go(-1);" class="btn">Back</a></p>
    
    <form action="<?php echo $method;?>" method="post" enctype="multipart/form-data" id="create-post">
        <p>
            <input type="text" name="post_title" 
    <?php 
    if(!isset($action)){
    echo isset($post_title)?"value = '{$post_title}' readonly":'placeholder="Enter post title" required="required"';
    } else {
        echo "value='{$post['post_title']}' required='required'";
    }
    ?>/>
        </p>
        <p>
            <input type="text" name="post_name" <?php echo isset($action)?"value='{$post['post_name']}'":'placeholder="Enter post name"';?> required="required"/>
        </p>
        <p>
            <textarea name="post_content" class="ckeditor" style="resize:none;" cols="50" rows="30">     
            <?php echo isset($action)?$post['post_content']:NULL;?>          
            </textarea>
        </p>
        <p>
            <?php
            if(isset($action)){
                $dir = date('Y/m/d',strtotime($post['post_created']));
                echo 'Current image is:';
                echo "<img src='{$image}' style='float:left;width:200px;'/>";
            }
            ?>
            <input type="file" name="post_image" />
            <span>The image is optional.</span>
        </p>
        <p>
            <input type="submit" value="<?php echo isset($action)?'Update Post':'Create Post';?>" class="btn_login"/>
        </p>
    </form>
</div>