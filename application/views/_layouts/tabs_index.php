<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/17/14
 * Time: 6:04 PM
 */
//echo'<pre>'; print_r($category_info);
?>
<div class="categories clearfix">
  
    <div class="custom-container">
    
        <div class="categories-title">
      
            <h2>Categories</h2>
    
        </div>
    
        <div class="row">
            <?php 
           // echo '<pre>';
           // print_r($category_info);
            ?>
        
            <?php foreach($category_info as $cat_info){
            
                if(isset($cat_info->image) ){
                    
                $cat_img = '/'.DOMAIN."/assets/uploads/admin/category/images/".$cat_info->image;
                
                }
                
                else {
                
                    $cat_img = '/'.DOMAIN.'/assets/public/img/block/restaurant-img.png' ;//NULL;
                }
                
                if(isset($cat_info->logo) && file_exists(DOMAIN."/assets/uploads/categories/".$cat_info->logo)){
            
                $cat_logo = '/'.DOMAIN."/assets/uploads/admin/category/logo/".$cat_info->logo;
                
                }
                
                else {
                
                    $cat_logo = '/'.DOMAIN.'/assets/public/img/rest.png' ;//NULL;
                }
                
               // $link_formatted = strtolower(str_replace(" ","-",str_replace(".","",$cat_info->name)));

                //$link = "/".DOMAIN."/profile/".$cat_info->sno.'/'.preg_replace("/&#?[a-z0-9]+;/i","",$link_formatted);
                
                $link_formatted = urlencode($cat_info->name);
                
                $link = base_url().'search?query='.urlencode(preg_replace("/&#?[a-z0-9]+;/i","",$link_formatted));
                
                    ?>
             
            <div class="col-md-3 col-sm-4 col-xs-6">
        
            <div class="category-box">

                <div class="category-icon"> <i class="<?php if($cat_info->icon_class!='') echo $cat_info->icon_class; ?>">
                        
                    <?php if($cat_info->icon_class == '') { ?><img src="<?php echo $cat_logo?>"> <?php  } ?></i>
                </div>
                
                <div class="category-images">
                
                    <a href="<?php echo $link ?>"><img src="<?php echo $cat_img?>" alt=""/></a>
                    
                </div>
                
                <div class="categories-title">
                
                    <h2><a href="<?php echo $link ?>"><?php echo $cat_info->name?></a></h2>
                    
                </div>
                
            </div>
            
        </div>
        
                <?php } ?>
                
    </div>

  </div>
  
</div>

<!--Counter End-->

