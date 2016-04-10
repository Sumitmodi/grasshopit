<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/13/14
 * Time: 5:08 PM
 */
?>
<?php if(empty($finance)){
    echo 'You have not made any type of payments till date.';
    return;
}?>
<div class="table-responsive">
    <p>Your payment summary.</p>
    <table class="table">
        <tr>
            <td><b>SNO.</b></td>
            <td><b>Method</b></td>
            <td><b>Amount</b></td>
            <td><b>Payment Date</b></td>
        </tr>
        <?php
        if (!empty($finance))
        {
            foreach ($finance as $k => $f)
            {
                $f = (object) $f;
                ?>
                <tr>
                    <td><?php echo $k + 1; ?></td>
                    <td><?php echo $f->payment_method; ?></td>
                    <td><?php echo $f->received_amount; ?></td>
                    <td><?php echo ($f->pay_time); ?></td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
</div>