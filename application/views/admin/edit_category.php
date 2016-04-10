  <div class="right-section">
    <div class="right-top"></div>
    <div class="right-header dashboard">
        <h2 style="margin-left:313px; margin-top:25px;">Edit Category <?php echo $results->name;?></h2>
      <div class="down-arrow"></div>
    </div>
    <p style="padding: 20px"><?php echo isset($response['message']) ? $response['message'] : NULL;?></p>
    <section class="place-ads">
        
        <form class="" action="" method="post" name="edit_cat" enctype="multipart/form-data">
            <div class="">
                <label class="" > Category Name<span>*</span> </label>
                <div class="">
                    <input type="text" class="" value="<?php if(isset($results))echo $results->name; ?>" required="" name="name">
                </div>
            </div>
            <div class="images">
            <div class="image">
                <label class="">Image<span></span> </label>
                <div class="">
                    <br/>
                    <?php if(isset($results)){
                        
                         ?>
                    <p><img src="/<?php echo DOMAIN;?>/assets/uploads/admin/category/images/<?php echo $results->image;?>" height="200px"></p>
                    <?php  } ?>
                    
                    <input type="file" class="" value="" name="image">
                                        
                </div>
            </div>
            <div class="icon">
                <label class=""> Icon<span></span> </label><br>
                <div class="">
                    <br/>
                    <?php if(isset($results)){
                        
                        ?>
                    <img src="/<?php echo DOMAIN;?>/assets/uploads/admin/category/logo/<?php echo $results->logo;?>" height="200px">
                    <?php  } ?>
                    
                    <input type="file"class="" name="logo">
                    
                </div>
            </div>
            </div>
            <div class="">
                <label class="" > Icon Class<span></span> </label>
                <div class="">
                    <input type="text" class="" value="<?php if(isset($results))echo $results->icon_class; ?>" name="class">
                </div>
            </div>
            
            
            <div class="">
          <div class="">
            <input type="submit" value="Update">
          </div>
        </div>
        </form>
    </section>
</div>
    
</section>

