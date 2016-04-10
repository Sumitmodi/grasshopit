<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/13/14
 * Time: 5:08 PM
 */
//print_r($activities);
?>
<style>
    .actinguser{
        color: #0000FF;
    }
    .actingvalue{
        color: #007500;
    }
    .actingparam{
        color: #009900;
    }
    .datetime{
        color: #E68F8F;
    }
</style>
<ul class="nav">
<?php
if(!isset($activities)){
    $activities = array();
}
if(!empty($activities)){
    foreach($activities as $activity){ ?>
        <li>
            <?php echo $activity['activity'] ?> on <span class="datetime"><?php echo $activity['date_created'] ?></span>
        </li>
    <?php
    }
} else {
?>
    <li>Activity log for this business is empty.</li>
<?php
} ?>
</ul>

