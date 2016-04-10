<?php
/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/08/17 6:30:04 PM
 * File     :   trash.php 
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
    <?php if (isset($error)) { ?> 
        <p class="error"><?php echo $error; ?></p>
    <?php } ?>

    <?php if (isset($success)) { ?> 
        <p class="success"><?php echo $success; ?></p>
    <?php } ?>

    <?php if (isset($lists)) {
        $i = 0; ?> 
        <p class="content">Total Companies Suspended : <span class="highlight"><?php echo $lists?count($lists):0; ?></span></p>
    <table>
        <tr>
            <th>Sno</th>
            <th>Name</th>
            <th>Options</th>
        </tr>
    <?php if($lists!=false and count($lists)>0) foreach($lists as $list){ ?>
        <tr>
            <td><?php echo ++$i;?></td>
            <td><?php echo ucwords($list['name']);?></td>
            <td>
                <a href="javascript:void(0)" class="options" title="More Options">More Options</a>               
               <ul class="menu">
                   <li>
                       <a href="/<?php echo DOMAIN; ?>/superadmin/?tab=company&target=unsuspend&source=options&company=<?php echo md5($list['sno']); ?>&alpha=<?php echo $list['name'][0];?>"  title="Unsuspend Company" class="ask unsuspend">Unsuspend</a>
                       <span class="unsuspend question hide">Are you sure you want to unsuspend this company?</span>
                   </li>
                   <li>
                       <a href="/<?php echo DOMAIN; ?>/superadmin/?tab=company&target=remove&source=options&company=<?php echo md5($list['sno']); ?>&alpha=<?php echo $list['name'][0];?>"  title="Remove Company forever" class="ask remove">Remove</a>
                       <span class="remove question hide">Are you sure you want to remove this company?</span>
                   </li>
            </td>
        </tr>
    <?php } ?>
    </table>
    <?php } ?>