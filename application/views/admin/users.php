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
//echo '<pre>';print_r($lists);
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
    
    <?php 
    
    if (isset($error)) { ?>

        <p class="success"><?php echo $error; ?></p>
        
            <?php } ?>
        
                <?php if (isset($message)) { ?>
            
        <p class="success"><?php echo $message; ?></p>
        
            <?php } ?>
    
    </div>
    
    <div class="posts">
    
    <?php

    if (isset($lists)) {
    
        //paginateInSession($lists);
        
        $s = $this->input->get('page') == false ? 1 : ($this->input->get('page') -1 )*20 +1;
        
        $e = $this->input->get('page') == false ? 20 : ($this->input->get('page'))*20;
        
        if($total < 20) $e = $total;
        echo '<p class="content">Showing '.$s.'  - ' . $e . ' of ' . $total . ' Users.</p>';
?>
        
        <ul class="line">
        
        <?php 

        for($i = 1; $i<= $pages; $i++){
        
            ?>
            
            <li>
            
                <a href="?tab=users&page=<?php echo $i;?>" class="simulator"><?php echo $i;?></a>
                
            </li>
            
    <?php

    }
    
    ?>
    
        </ul>

        <?php

        echo '<table>';
        
        echo '<tr>
        
        <th>S.No.</th>

        <th>Name</th>

        <th>Username</th>

        <th>Email</th>

        <th>Status</th>

        <th>Joined Date</th>
       
        <th>Actions</th>

        </tr><tbody>';

        $i = 0;
        
            foreach ($lists as $list) { 
        
            ?>
            
        <tr>
        
            <td><?php echo++$i; ?></td>

            <td><span title="<?php echo $list['name']; ?>" ><?php echo $list['name']; ?></span></td>
            
            <td>
            
                <span title="<?php echo $list['username']; ?>" ><?php echo $list['username']; ?></span>
                
            </td>
            
            <td>
            
                <span title="<?php echo $list['email']; ?>" ><?php echo $list['email']; ?></span>
                
            </td>
            
            <td>
            
                <span title="" >
                    
                    <?php if($list['status']== 'A') echo "Active";
                        
                        elseif ($list['status'] == 'W') echo "Inactive";
                        
                        else echo "Blocked";
                    
                    ?>
                    </span>
                
            </td>
            
             <td>
            
                <span><?php echo $list['date_added']; ?></span>
                
            </td>
            
             <td>
                        <a href="javascript:void(0)" class="options" title="More Options">More Options</a>
                        
                        <ul class="menu">
                            
                            <?php if($userType == 'regular') $uType = 'Rusers'; else $uType = 'Busers'; ?>
                            
                            <?php if($target != 'active') {?>
                            
                                <li><a href="/<?php echo DOMAIN;?>/superadmin/?tab=users&action=activate<?php echo $uType ?>&company=<?php echo md5($list['sno']); ?>" >Activate</a></li>
                            
                                <?php  } ?>
                            <li>
                                
                                <?php if($target != 'suspended') {?>
                                
                                <a href="/<?php echo DOMAIN; ?>/superadmin/?tab=users&action=suspend<?php echo $uType ?>&company=<?php echo md5($list['sno']); ?>" class="ask suspend" title="Suspend Company">Suspend</a>
                        
                                <span class="suspend question hide">Are you sure you want to suspend this company?</span>
                                
                                <?php  } ?>
                                
                            </li>
                            
                            <li>
                            
                                <?php if($target != 'inactive') {?>
                                
                                <a href="/<?php echo DOMAIN; ?>/superadmin/?tab=users&action=inactivate<?php echo $uType ?>&company=<?php echo md5($list['sno']); ?>" class="ask remove" title="Remove Company">Inactivate</a>
                                
                                <span class="remove question hide">Are you sure you want to remove this company?</span>
                            
                                <?php } ?>
                                
                            </li>
                        
                        </ul>
                    
             </td>
            
        </tr>
        
    <?php }
    
        ?>

    </tbody>
    
    </table>
    
    <ul class="line">
    
            <?php 

            for($i = 1; $i<= $pages; $i++){
            
                ?>
                
        <li>
        
            <a href="?tab=category&page=<?php echo $i;?>" class="simulator"><?php echo $i;?></a>

        </li>
        
        <?php

        }
        
        ?>
        
    </ul>

        <?php } else { ?>

    <p class="error">OOPS !! It seems there are no any users!</p>

        <?php } ?>

    </div>

</div>