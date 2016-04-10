<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/17 4:14:20 PM
 * File     :   list.php 
 * Project  :   grasshopit
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */
?>
<script type="text/javascript">
        $(document).ready(function(){
        var shown = false;
        $('a.options').click(function(e){
            e.preventDefault();
            var ul = $(this).next('ul.menu');
            if(shown){
                $(ul).css('display','none');
                shown = false;
                return false;
            }
            $(ul).css('display','block');
            $(ul).css('left',parseInt($(this).offset().left));
            $(ul).css('top',parseInt($(this).offset().bottom)+5);
            shown = true;
            return false;
        });
        $(document).mouseup(function(e){
            e.preventDefault();
            if($('ul.menu').is(':visible'))
                if(!$('ul.menu').is(e.target) && $('ul.menu').has(e.target).length === 0){
                    $('ul.menu').css('display','none');
                }
            return false;
        });
        $('a.ask').click(function(e){
            e.preventDefault();
            var classes = $(this).attr('class').split(' ');
            if(typeof classes[2] != 'undefined')
                if($('span.ask').hasClass(classes[2]))
                    var ans = confirm($('span.'+classes[2]).html());
            if(typeof classes[2] == 'undefined')
                var ans = confirm($('span.'+classes[1]).html());
            if(ans == true){
                window.location.assign($(this).attr('href'));
                return true;
            }
            return false;
        })
    });    
</script>  
<div class="right-content">
    <?php if(isset($error)){ ?> 
    <p class="error"><?php echo $error;?></p>
    <?php } ?>
    
    <?php if(isset($success)){ ?> 
    <p class="success"><?php echo $success;?></p>
    <?php } ?>
    
    <?php if(isset($lists)) { $i = 0; ?> 
    <p class="content">Total Reviews display under 3 rating added : <span class="highlight"><?php echo count($lists);?></span></p>
    <table class="table table-striped" style="width:700px; margin-left:50px; margin-top:25px;">
        <tr>
            <th>Sno</th>
            <th>User Name</th>
             <th>Business Name</th>
            <th>Comments</th>
            <th>Rating</th>
            <th>Images</th>
            <th>Publish/Unpublish</th>
            <th>Options</th>
        </tr>
    <?php foreach($lists as $list){ 
        
        $link_formatted = strtolower(str_replace(" ", "-", str_replace(".", "", $list['comment'])));
                        
                        $link_formatted = str_replace('&','',html_entity_decode($link_formatted));   
                        
                        $link_formatted = str_replace('amp;','',html_entity_decode($link_formatted));         
                                                
                        $link = "/" . DOMAIN . "/profile/" . $list['sno'] . '/' . preg_replace("/&#?[a-z0-9]+;/i", "", $link_formatted);

                
        ?> 
        <tr>
            <td><?php echo ++$i;?></td>
             <td><?php echo ucwords($list['username']);?></td>
              <td><?php echo $list['name'];?></td>
            <td><?php echo ucwords($list['comment']);?></td>
            <td><?php echo ucwords($list['rating']);?></td>
            <td><img src="/<?php echo DOMAIN;?>/assets/uploads/a_<?php echo $list['business_id']; ?>/reviews/<?php echo $list['images'];?>" height="100px"></td>
            <td><?php echo $list['is_published'] == 1 ? 'Published' : 'Unpublished';?></td>
            <td>
               <a href="javascript:void(0)" class="options" title="More Options">More Options</a>               
               <ul class="menu">
                  
                   <li>
                       <?php if($list['is_published'] == 0) { ?>
                       <a href="/<?php echo DOMAIN; ?>/superadmin/?tab=reviews&target=published&source=options&review=<?php echo md5($list['sno']); ?>&alpha=<?php if(isset($_GET['alpha'])){echo $_GET['alpha'];} ?>"  title="Publish Company">Publish</a>
                       <?php } else { ?> 
                       <a href="/<?php echo DOMAIN; ?>/superadmin/?tab=reviews&target=unpublished&source=options&review=<?php echo md5($list['sno']); ?>&alpha=<?php if(isset($_GET['alpha'])){echo $_GET['alpha'];} ?>" class="ask unpublish" title="Unpublish Company">Unpublish</a>
                       <span class="unpublish question hide">Are you sure you want to Unpublish this company?</span>
                       <?php } ?>
                   </li>
                   
                   <li>
                       <a href="/<?php echo DOMAIN; ?>/superadmin/?tab=reviews&target=removed&source=options&review=<?php echo md5($list['sno']); ?>&alpha=<?php if(isset($_GET['alpha'])){echo $_GET['alpha'];} ?>" class="ask remove" title="Remove Company">Remove</a>
                       <span class="remove question hide">Are you sure you want to remove this company?</span>
                   </li>
               </ul>
            </td>
        </tr>
    <?php } ?>
    </table>
    <?php } ?>
</div>