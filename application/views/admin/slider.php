  <div class="right-section">
    <div class="right-top"></div>
    <div class="control-user">
    	<div class="table-responsive">
            <p style="padding: 20px"><?php if(isset($success)) echo $success; if(isset($error)) echo $error;?></p>
            <?php 
            //echo count($result);
            if(isset($result)){
                $i = 1;
                ?>
            <table class="table table-striped">
            	<thead>
                    <tr>
                        <th>S. No.</th>
                	<th>Images</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Added Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
		<?php foreach($result as $data){
                    
                    $image = explode(',', $data->image);
                    
            ?> 
                <tbody>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td>
                            <?php for($j=0;$j<count($image);$j++){ ?>
                            <p><img src="/<?php echo DOMAIN;?>/assets/uploads/slider/<?php echo $image[$j]?>" height="70px"> </p> 
                            <?php } ?>
                        </td>
                   	<td><?php echo $data->title;?></td>
                        <td><?php echo $data->description;?></td>
                        <td><?php if($data->published == 1) echo 'Active'; else echo 'Inactive';?></td>
                        <td><?php echo $data->date_created;?></td> 
                  	<td>
                            <a href="/<?php echo DOMAIN;?>/superadmin?tab=slider&target=delete&slider=<?php echo md5($data->sno)?>">Delete</a>
                        </td> 
                    </tr>
                    
                </tbody>
                <?php  $i = $i+1; } ?>
            </table>
        </div>
    </div>
        
       <?php }
        else {
        ?>
        <div class="col-lg-9 col-md-9">
            <p>There are no any slider. </p>
        </div>    
        <?php } ?>
    
  </div>
</section>