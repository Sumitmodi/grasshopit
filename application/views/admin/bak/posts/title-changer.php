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
    <h3 class="alert">
        The old title of &ldquo;<strong><?php echo $post; ?></strong>&rdquo; is &raquo;<strong><?php echo $old_title; ?></strong>&laquo;
    </h3>
    <h3 class="alert">
        The Following titles are available:-
        <select onchange='location = this.options[this.selectedIndex].value;'>
            <option>Select a Title</option>
            <?php
            if (isset($post_titles))
                if (is_array($post_titles)) {
                    $old_title = str_replace(' ','-',$old_title);
                    foreach ($post_titles as $post_title) {
                        $post = str_replace(' ', '-', $post);
                        $live_title = ucwords($post_title['post_title']);
                        $post_title = str_replace(' ', '-', $post_title);
                        echo "<option value='{$base}change/title/{$post}/{$post_title['post_title']}/{$old_title}'>{$live_title}</option>";
                    }
                }
            ?>
        </select>
    </h3>
</div>    