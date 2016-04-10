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
    <p class="content">Total Companies added : <span class="highlight"><?php echo count($lists);?></span></p>
    <table class="table table-striped" style="width:950px;">
        <tr>
            <th>Sno</th>
            <th>Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Status</th>
            <th>Added by</th>
            <th>Options</th>
        </tr>
    <?php foreach($lists as $list){ 
        
        $link_formatted = strtolower(str_replace(" ", "-", str_replace(".", "", $list['name'])));
                        
                        $link_formatted = str_replace('&','',html_entity_decode($link_formatted));   
                        
                        $link_formatted = str_replace('amp;','',html_entity_decode($link_formatted));         
                                                
                        $link = "/" . DOMAIN . "/profile/" . $list['sno'] . '/' . preg_replace("/&#?[a-z0-9]+;/i", "", $link_formatted);

                
        ?> 
        <tr>
            <td><?php echo ++$i;?></td>
            <td><?php echo ucwords($list['name']);?></td>
            <td><?php echo ucwords($list['state']);?></td>
            <td><?php echo $list['city'];?></td>
            <td><?php echo $list['is_published'] == 1 ? 'Published' : 'Unpublished';?></td>
            <td><?php echo $list['admin_added'] == 0 ? 'User' : 'Admin';?></td>
            <td>
               <a href="javascript:void(0)" class="options" title="More Options">More Options</a>               
               <ul class="menu">
                   <li>
                       <a href="<?php echo $link;?>" target="_blank"  title="View Company">View</a>
                   </li>
                   <li>
                       <a href="/<?php echo DOMAIN; ?>/superadmin/?tab=company&target=modify&source=options&company=<?php echo md5($list['sno']); ?>&alpha=<?php echo $list['name'][0];?>"  title="Modify Company">Modify</a>
                   </li>
                   <li>
                       <a href="/<?php echo DOMAIN; ?>/superadmin/?tab=company&target=package&source=options&company=<?php echo md5($list['sno']); ?>&alpha=<?php echo $list['name'][0];?>"  title="Upgrade/Downgrade Company">Upgrade/Downgrade</a>
                   </li>
                   <li>
                       <?php if($list['is_published'] == 0) { ?>
                       <a href="/<?php echo DOMAIN; ?>/superadmin/?tab=company&target=publish&source=options&company=<?php echo md5($list['sno']); ?>&alpha=<?php echo $list['name'][0];?>"  title="Publish Company">Publish</a>
                       <?php } else { ?> 
                       <a href="/<?php echo DOMAIN; ?>/superadmin/?tab=company&target=unpublish&source=options&company=<?php echo md5($list['sno']); ?>&alpha=<?php echo $list['name'][0];?>" class="ask unpublish" title="Unpublish Company">Unpublish</a>
                       <span class="unpublish question hide">Are you sure you want to Unpublish this company?</span>
                       <?php } ?>
                   </li>
                   <li>
                       <a href="/<?php echo DOMAIN; ?>/superadmin/?tab=company&target=suspend&source=options&company=<?php echo md5($list['sno']); ?>&alpha=<?php echo $list['name'][0];?>" class="ask suspend" title="Suspend Company">Suspend</a>
                       <span class="suspend question hide">Are you sure you want to suspend this company?</span>
                   </li>
                   <li>
                       <a href="/<?php echo DOMAIN; ?>/superadmin/?tab=company&target=remove&source=options&company=<?php echo md5($list['sno']); ?>&alpha=<?php echo $list['name'][0];?>" class="ask remove" title="Remove Company">Remove</a>
                       <span class="remove question hide">Are you sure you want to remove this company?</span>
                   </li>
               </ul>
            </td>
        </tr>
    <?php } ?>
    </table>
    <?php } ?>
</div>