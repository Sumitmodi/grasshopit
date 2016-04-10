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
            $s = $this->input->get('page') == false ? 1 : ($this->input->get('page') -1 )*20 +1;
            $e = $this->input->get('page') == false ? 20 : ($this->input->get('page'))*20;
            echo '<p class="content">Showing '.$s.'  - ' . $e . ' of ' . $total . ' categories.</p>';
?>
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
        <?php
            echo '<table class="table table-striped" style="width:700px;">';
            echo '<tr>
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Icon</th>
                            <th>Class</th>
                            <th>Edit</th>
                            
                        </tr><tbody>';
            $i = 0;
            foreach ($lists as $list) { 
                ?>
                <tr>
                    <td><?php echo++$i; ?></td>
                    <td><span title="<?php echo $list['name']; ?>" ><?php echo $list['name']; ?></span></td>
                    <td>
                        <img src="/<?php echo DOMAIN;?>/assets/uploads/admin/category/images/<?php echo $list['image'];?>" height="100px" >
                    </td>
                    <td>
                        <img src="/<?php echo DOMAIN;?>/assets/uploads/admin/category/logo/<?php echo $list['logo'];?>" height="100px">
                    </td>
                    <td><?php echo $list['icon_class'] ?></td>
                    <td><a href="/<?php echo DOMAIN;?>/superadmin/?tab=category&target=edit&id=<?php echo $list['sno']?>" >Edit</a></td>
                </tr>
            <?php } ?>
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
            <p class="error">OOPS !! It seems Categories have not been registered on our site. Is everything
            alright?</p>
        <?php } ?>
    </div>
</div>