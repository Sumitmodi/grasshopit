<?php
/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   {date}
 * File     :   index.php
 * Copyright Nurakan Technologies Pvt. Ltd.
 */
?>
<div class="right-content">
<div class="welcome">
    <a href="javascript:history.go(-1);" class="btn">Back</a>
    <a href="/ktm197/superadmin/posts" class="btn">Post Dashboard</a>
    <?php if (isset($is_trashed_content)): ?>
        <h2 class="alert">The Following posts have been trashed.</h2>
    <?php elseif (isset($post_title)): ?>
        <h2 class="alert">The Following posts have been titled under <strong><span class="highlight"><?php echo $post_title; ?><span></strong></h2>
    <?php else: ?>
        <h2 class="alert">Welcome <?php echo $current_user; ?> to your <strong><span class="highlight">Posts Dashboard</span></strong>.</h2>
    <?php
    endif;
    if (isset($all_titles)):
        ?>
        <h2 class="alert">The following titles are available. Select any</h2>
        <select onchange ="location = this.options[this.selectedIndex].value;">
            <option>All titles</option>
            <?php
            foreach ($all_titles as $title) {
                $tit = str_replace(' ','-',$title['post_title']);
                echo "<option value='/ktm197/superadmin/posts?action=view&target={$tit}'>".ucwords($title['post_title'])."</option>";
            }
            ?>
        </select>
    <?php endif; ?>
</div>
<div class="message">
    <?php
    if (isset($post_register_status))
        if ($post_register_status)
            echo '<p class="success">Your Post was Successfully created.</h3>';
        else
            echo '<p class="error">There was error creating the post.</h3>';
    if (isset($post_remove))
        if ((bool) $post_remove)
            echo '<p class="success">The post was successfully removed.</h3>';
        else
            echo '<p class="error">There was error removing the post.</h3>';
    if (isset($post_trash))
        if ((bool) $post_trash)
            echo '<p class="success">The post was successfully trashed.</h3>';
        else
            echo '<p class="error">There was error moving the post to trash.</h3>';
    if (isset($post_publish))
        if ((bool) $post_publish)
            echo '<p class="success">The post was successfully published.</h3>';
        else
            echo '<p class="error">There was error publishing the post.</h3>';
    if (isset($post_unpublish))
        if ((bool) $post_unpublish)
            echo '<p class="success">The post was successfully unpublished.</h3>';
        else
            echo '<p class="error">There was error unpublishing the post.</h3>';
    if (isset($post_change_title))
        if ((bool) $post_change_title)
            echo '<p class="success">The title of the post was successfully changed.</h3>';
        else
            echo '<p class="error">There was error changing the title of the post.</h3>';
    if(isset($post_restore))
        if((bool)$post_restore)
            echo '<p class="success">The post was successfully restored.</h3>';
        else
            echo '<p class="error">There was error restoring the post.</h3>';
    ?>
</div>
<div class="posts">
    <p>
        <?php
        if (isset($user_posts)):
            if ($user_posts == false)
                echo '<h2 class="alert">Oops! It seems you have not created any posts. <a href="/ktm197/superadmin/post?action=create"><span class="highlight">Create a Post</span></a></h2>';
            else {
                echo '<table><tbody>';
                echo '<tr>
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>Admin</th>
                            <th>Created</th>
                            <th>Status</th>
                            <th>More Actions</th>
                        </tr>';
                $i = 1;
                foreach ($user_posts as $post):
                    if ((bool) $post['is_trashed'] == 0):
                        ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td>
                            <?php
                            echo $post['post_name'];
                            if (!isset($show_title)):
                                ?>
                                (<a href="/ktm197/superadmin/posts?action=view&target=<?php echo str_replace(' ','-',$post['post_title']); ?>"><span class="highlight"><?php echo $post['post_title']; ?></span></a>)
                            <?php endif; ?>
                        </td>
                        <td><?php echo $post['post_creator']; ?></td>
                        <td><?php echo date('Y/m/d', strtotime($post['post_created'])); ?></td>
                        <td><?php echo (bool) $post['is_published'] != false ? 'published' : 'unpublished'; ?></td>
                        <td>
                            <select onchange='location = this.options[this.selectedIndex].value;'>
                                <option>More Actions</option>
                                <option value="/ktm197/superadmin/post?action=view&name=<?php echo str_replace(' ', '-', $post['post_name']).'&title=' . str_replace(' ', '-', $post['post_title']); ?>">View</option>
                                <?php if ((bool) $post['is_published'] == false): ?>
                                    <option value="/ktm197/superadmin/post?action=publish&name=<?php echo str_replace(' ', '-', $post['post_name']).'&title=' . str_replace(' ', '-', $post['post_title']); ?>">Publish</option>
                                <?php else: ?>
                                    <option value="/ktm197/superadmin/post?action=unpublish&name=<?php echo str_replace(' ', '-', $post['post_name']).'&title=' . str_replace(' ', '-', $post['post_title']); ?>">Unpublish</option>
                                <?php endif; ?>
                                <option value="/ktm197/superadmin/post?action=modify&name=<?php echo str_replace(' ', '-', $post['post_name']).'&title=' . str_replace(' ', '-', $post['post_title']); ?>">Modify</option>                            
                                <option value="/ktm197/superadmin/post?action=trash&name=<?php echo str_replace(' ', '-', $post['post_name']).'&title=' . str_replace(' ', '-', $post['post_title']); ?>">Trash</option>
                                <option value="/ktm197/superadmin/post?action=remove&name=<?php echo str_replace(' ', '-', $post['post_name']).'&title=' . str_replace(' ', '-', $post['post_title']); ?>">Remove</option>
                                <option value="/ktm197/superadmin/post?action=change&name=<?php echo str_replace(' ', '-', $post['post_name']).'&title=' . str_replace(' ', '-', $post['post_title']); ?>">Change Title</option>
                            </select>                        
                        </td>
                    </tr>
                    <?php
                    $i++;
                endif;
            endforeach;
            echo '</table>';
        }
        if (isset($post_title)):
            ?>
            <p><a href="/ktm197/superadmin/post?action=create&target=<?php echo str_replace(' ', '-', $post_title); ?>" class="btn">Create a Post</a> under <span class="highlight"><?php echo $post_title; ?></span></p> or,        
            <p><a href="/ktm197/superadmin/post?action=create" class="btn">Create a  Post</a> under new title</p>
        <?php else: ?>
            <p><a href="/ktm197/superadmin/post?action=create" class="btn">Create a Post</a></p>
        <?php
        endif;
    elseif (isset($trashed_posts)):
        if ((bool)$trashed_posts == false)
            echo '<p>Congratualtions your trash is empty.</p>';
        else {
            $i = 1;
            echo '<table>';
            echo '<tr>
            <th>S.No.</th>
            <th>Name(title)</th>
            <th>Admin</th>
            <th>More Actions</th>
            </tr>';
            foreach ($trashed_posts as $trash):
                echo '<tr>';
                ?>
                <td><?php echo $i;?></td>
                <td><?php echo $trash['post_name'];?>(<a href="<?php echo $base; ?>post/title/<?php echo $trash['post_title']; ?>"><?php echo $trash['post_title']; ?></a>)</td>
                <td><?php echo $trash['post_creator'];?></td>
                <td>
                    <select onchange="location=this.options[this.selectedIndex].value;">
                        <option>Action</option>
                        <option value="/ktm197/superadmin/post?action=restore&name=<?php echo str_replace(' ', '-', $trash['post_name']).'&title=' . str_replace(' ', '-', $trash['post_title']); ?>">Restore</option>
                        <option value="/ktm197/superadmin/post?action=remove&name=<?php echo str_replace(' ', '-', $trash['post_name']).'&title=' . str_replace(' ', '-', $trash['post_title']); ?>">Remove</option>
                    </select>
                </td>
                <?php
                echo '</tr>';
                $i++;
            endforeach;
            echo '</tbody></table>';
        }
    else:
        ?>
        <h2 class="alert">Oops! It seems you have not created any posts. 
            <a href="/ktm197/superadmin/post?action=create">Create a Post</a>
        </h2>
    <?php
    endif;
    ?>
</p>
</div>
    
</div>