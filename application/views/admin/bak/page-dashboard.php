<?php
/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/07/11 3:23:43 PM
 * File     :   page-dashboard.php 
 * Project  :   ktm197
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

include_once dirname(dirname(__FILE__)) . DS . 'includes' . DS . 'functions.php';
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
    <div class="message">
        <?php if (isset($response)) { ?>
            <p class="success"><?php echo $response; ?></p>
        <?php } ?>
        <?php if (isset($message)) { ?>
            <p class="success"><?php echo $message; ?></p>
        <?php } ?>
    </div>
    <div class="posts">
        <?php
        if (isset($lists)) {
            //paginateInSession($lists);
            echo '<p class="content">Showing 1 - ' . count($lists) . ' of ' . count($lists) . ' registered companies.</p>';
            echo '<p class="content"><u>Remember:</u> Companies displayed here are those who have registered on our site online.</p>';
            echo '<table>';
            echo '<tr>
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>Package</th>
                            <th>Added on</th>
                            <th>Status</th>
                            <th>More Actions</th>
                        </tr><tbody>';
            $i = 0;
            foreach ($lists as $list) {
                ?>
                <tr>
                    <td><?php echo++$i; ?></td>
                    <td><span title="<?php echo $list['name']; ?>" class="name"><?php echo $list['name']; ?></span></td>
                    <td><?php echo $list['package'] == 1 ? 'Founder' : $list['package'] == 2 ? 'Adopter' : $list['package'] == 3 ? 'Ambassador' : 'not-selected'; ?></td>
                    <td><?php echo formatTime($list['date_added']); ?></td>
                    <td><?php echo (int) $list['validated'] == 1 ? 'Verified' : 'Waiting Verifcation'; ?></td>
                    <td>
                        <a href="javascript:void(0)" class="options" title="More Options">More Options</a>
                        <ul class="menu">
                            <li><a href="/<?php echo DOMAIN; ?>/superadmin/?tab=company&target=view&company=<?php echo md5($list['sno']); ?>" class="drop" title="View Company">View</a></li>
                            <li><a href="/<?php echo DOMAIN; ?>/superadmin/?tab=company&target=modify&company=<?php echo md5($list['sno']); ?>" class="drop" title="Open Data Manager">Data Manager</a></li>
                            <li>
                                <a href="/<?php echo DOMAIN; ?>/superadmin/?tab=company&target=suspend&company=<?php echo md5($list['sno']); ?>" class="ask suspend" title="Suspend Company">Suspend</a>
                                <span class="suspend question hide">Are you sure you want to suspend this company?</span>
                            </li>
                            <li>
                                <a href="/<?php echo DOMAIN; ?>/superadmin/?tab=company&target=remove&company=<?php echo md5($list['sno']); ?>" class="ask remove" title="Remove Company">Remove</a>
                                <span class="remove question hide">Are you sure you want to remove this company?</span>
                            </li>
                        </ul>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
            </table>
        <?php } else { ?>
            <p class="error">OOPS !! It seems companies have not been registered on our site. Is everything
            alright?</p>
        <?php } ?>
    </div>
</div>