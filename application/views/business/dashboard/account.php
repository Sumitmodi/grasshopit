<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/13/14
 * Time: 5:08 PM
 */ 

function packageInString($int){
    switch((int)$int){
        case 1:
            return 'Founder';
        case 2:
            return 'Adopter';
        case 3:
            return 'Ambassador';
        return 'Not a valid package selected.';
    }
}

?>
<div class="contents">
    <?php if(!isset($accounts)) { ?>     
    <p class="content">You account info could not be obtained.</p>
    <?php } else { 
        $account = $accounts[0];
    ?> 
    <table class="preview">
        <tr>
            <th class="content">
                Current Username :: 
            </th>
            <td>
                <span class="red"><?php echo $account['username'];?></span>
            </td>
            <td>
                <a href="/<?php echo DOMAIN;?>/dashboard/?tab=username" class="simulator" title="Change your current username">
                    Change
                </a>
            </td>
        </tr>
        <tr>
            <th class="content">
                Current Email :: 
            </th>
            <td>
                <span class="red"><?php echo $account['email'];?></span>
            </td>
            <td>
                <a href="/<?php echo DOMAIN;?>/dashboard/?tab=email" class="simulator" title="Change your current email">
                    Change
                </a>
            </td>
            <td>
                <span class="hint">This email has been registered as your primary email.</span>
            </td>
        </tr>
        <tr>
            <th class="content">
                Current Package :: 
            </th>
            <td>
                <span class="red"><?php echo packageInString($account['package']);?></span>
            </td>
            <td>
                <a href="/<?php echo DOMAIN;?>/dashboard/?tab=package" class="simulator" title="Upgrade your package">
                    Change
                </a>
            </td>
        </tr>
    </table>
    <?php } ?>
</div>