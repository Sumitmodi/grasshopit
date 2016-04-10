  <div class="right-section">
    <div class="right-top"></div>
    <div class="control-user">
    	<div class="table-responsive">
            <p style="padding: 20px"><?php if(isset($success)) echo $success; if(isset($error)) echo $error;?></p>
            
            <?php $s = $this->input->get('page') == false ? 1 : ($this->input->get('page') -1 )*20 +1;
            $e = $this->input->get('page') == false ? 20 : ($this->input->get('page'))*20;
            echo '<p class="content">Showing '.$s.'  - ' . $e . ' of ' . $total . ' categories.</p>';
?>
            <ul class="line">
                <?php 
                for($j = 1; $j<= $pages; $j++){
                ?>
                <li>
                    <a href="?tab=category&page=<?php echo $j;?>" class="simulator"><?php echo $j;?></a>
                </li>
                <?php
                }
                ?>
            </ul>

            
            <?php 
            //echo count($result);
            if(isset($result)){
                $i = 1;
                ?>
            <table class="table table-striped" style="width:900px;">
            	<thead>
                    <tr>
                        <th>S. No.</th>
                	<th>Name</th>
                        <th>Added Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
		<?php foreach($result as $data){
            ?> 
                <tbody>
                    <tr>
                        <td><?php echo $i; ?></td>
                   	<td><?php echo $data['name'];?></td> 
                        <td><?php echo $data['date_added'];?></td> 
                  	<td>
                            <a class="btn btn-xs btn-success" href="/<?php echo DOMAIN;?>/superadmin/?tab=post&target=modify&source=options&company=<?php echo md5($data['sno'])?>">Edit</a>
                        </td>
                        <td>
                            <a href="/<?php echo DOMAIN;?>/superadmin/?tab=post&target=delete&source=options&company=<?php echo md5($data['sno'])?>" class="btn btn-xs btn-danger">Delete</a></td> 
                    </tr>
                    
                </tbody>
                <?php  $i = $i+1; } ?>
            </table>
        </div>
    </div>
        <div class="pagination-outer">
            <ul class="pagination">
              <li><a href="#">&laquo;</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
       <?php }
        else {
        ?>
        <div class="col-lg-9 col-md-9">
            <p>There are no any post. </p>
        </div>    
        <?php } ?>
    
  </div>
</section>