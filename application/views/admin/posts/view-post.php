<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/02/15
 * File     :   view-post.php
 * Copyright Nurakan Technologies Pvt. Ltd.
 */
?>
<div class="right-content">
    <h1 class="alert">View Post &ldquo;<span class="highlight"><?php echo $post['post_name'];?></span>&rdquo;</h1>
    <a href="javascript:history.go(-1);" class="btn">Back</a>
    <a href="/ktm197/superadmin/posts" class="btn">Post Dashboard</a>
<div class="message">
    
</div>
<div class="post-wrapper">
    <p>
        <a class="btn" href="<?php echo '/ktm197/superadmin/post?action=modify&name=' . str_replace(' ', '-', $post['post_name']).'&title=' . str_replace(' ', '-', $post['post_title']); ?>">Modify</a>
        <a class="btn" href="<?php echo '/ktm197/superadmin/post?action=trash&name=' . str_replace(' ', '-', $post['post_name']).'&title=' . str_replace(' ', '-', $post['post_title']); ?>">Trash</a>
        <a class="btn" href="<?php echo '/ktm197/superadmin/post?action=remove&name=' . str_replace(' ', '-', $post['post_name']).'&title=' . str_replace(' ', '-', $post['post_title']); ?>">Remove</a>
        <a class="btn" href="<?php echo '/ktm197/superadmin/post?action=change&name=' . str_replace(' ', '-', $post['post_name']).'&title=' . str_replace(' ', '-', $post['post_title']); ?>">Change Title</a>
        <?php if((bool)$post['is_published']): ?>               
        <a class="btn" href="<?php echo '/ktm197/superadmin/post?action=unpublish&name=' . str_replace(' ', '-', $post['post_name']).'&title=' . str_replace(' ', '-', $post['post_title']); ?>">Unpublish</a>
        <?php else: ?>
         <a class="btn" href="<?php echo '/ktm197/superadmin/post?action=publish&name=' . str_replace(' ', '-', $post['post_name']).'&title=' . str_replace(' ', '-', $post['post_title']); ?>">Publish</a>
         <?php endif; ?>
    </p>
    <p>
        <strong>The post is titled under:</strong> &nbsp;&nbsp;
        <a href="/ktm197/superadmin/post?action=view&target=<?php echo $post['post_title'];?>"><span class="highlight"><?php echo $post['post_title'];?></span></a>
    </p>
    <p>
        <strong>Post Name:</strong>&nbsp;&nbsp;<?php echo $post['post_name'];?>
    </p>
    <p>
        <strong>Post Content:</strong>&nbsp;&nbsp;<?php echo $post['post_content'];?>
    </p>
    <p>
        <strong>Post Image:</strong>
    </p>
        <img src="<?php echo $image;?>" width="350"/>    
    <p>
        <strong>This post is</strong> <span class="highlight"><?php echo (bool)$post['is_published']?'Published':'Unpublished';?></span>.
    </p>
    <p>
        <a href="/ktm197/superadmin/post?action=create&title=<?php echo str_replace(' ', '-', $post['post_title']); ?>" class="btn">
            Create a Post</a> under <span class="highlight"><?php echo $post['post_title']; ?></span>
    </p> 
    <p>or,</p>
    <p>
        <a href="/ktm197/superadmin/post?action=create&title=<?php echo str_replace(' ', '-', $post['post_name']); ?>" class="btn">
            Create a Post</a> under <span class="highlight"><?php echo $post['post_name']; ?></span>        
    </p>
    <p>or,</p>
    <p>
        <a href="/ktm197/superadmin/post?action=create" class="btn">Create a  Post</a> under new title
    </p>
</div>
  <div class="clear"></div>
</div>
  <div class="clear"></div>
  </body>
  </html>