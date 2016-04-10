  
<div class="right-section">
    <div class="right-top"></div>
    <div class="right-header dashboard">
        <h2 style="margin-left:313px; margin-top:25px;">Edit Company <?php echo $results->name;?> </h2>
      <div class="down-arrow"></div>
    </div>
    <p style="padding: 20px"><?php echo isset($response['message']) ? $response['message'] : NULL;?></p>
    <section class="place-ads">
        
        <form class="" action="#" method="post" name="edit_cat" enctype="multipart/form-data">
            <div class="">
                <label class="" > Company Name<span>*</span> </label>
                <div class="">
                    <input type="text" class="" value="<?php if(isset($results))echo $results->name; ?>" required="" name="name">
                </div>
            </div>
            
            <div class="">
                <label class="" > Country<span></span> </label>
                <div class="">
                    <input type="text" class="" value="<?php if(isset($results))echo $results->country; ?>" name="country">
                </div>
            </div>
            
            <div class="">
                <label class="" > State<span></span> </label>
                <div class="">
                    <input type="text" class="" value="<?php if(isset($results))echo $results->state; ?>" name="state">
                </div>
            </div>
            
            <div class="">
                <label class="" > City<span></span> </label>
                <div class="">
                    <input type="text" class="" value="<?php if(isset($results))echo $results->city; ?>" name="city">
                </div>
            </div>
            
            <div class="">
                <label class="" > Mobile<span></span> </label>
                <div class="">
                    <input type="text" class="" value="<?php if(isset($results))echo $results->mobile; ?>"  name="mobile">
                </div>
            </div>
            
            <div class="">
                <label class="" > Telephone<span>*</span> </label>
                <div class="">
                    <input type="text" class="" value="<?php if(isset($results))echo $results->telephone; ?>" name="telephone">
                </div>
            </div>
            
            <div class="">
                <label class="" > Fax<span></span> </label>
                <div class="">
                    <input type="text" class="" value="<?php if(isset($results))echo $results->fax; ?>" name="fax">
                </div>
            </div>
            
            <div class="">
                <label class="" > Postal<span></span> </label>
                <div class="">
                    <input type="text" class="" value="<?php if(isset($results))echo $results->postal; ?>" name="postal">
                </div>
            </div>
            
            <div class="">
                <label class="" > Email<span></span> </label>
                <div class="">
                    <input type="text" class="" value="<?php if(isset($results))echo $results->email; ?>" name="email">
                </div>
            </div>
            
            
            
            <div class="">
                <label class="" > Address <span></span> </label>
                <div class="">
                    <input type="text" class="" value="<?php if(isset($results))echo $results->address; ?>" name="address">
                </div>
            </div>
            
            <div class="">
                <label class="" > Price Range <span></span> </label>
                <div class="">
                    <input type="text" class="" value="<?php if(isset($results))echo $results->price_range; ?>" name="price_range">
                </div>
            </div>
            
            <div class="">
                <label class="" > Website<span></span> </label>
                <div class="">
                    <input type="text" class="" value="<?php if(isset($results))echo $results->website; ?>" name="website">
                </div>
            </div>
            <div class="">
                <label class="" > About<span></span> </label>
                <div class="">
                    <br/>
                    <textarea class="ckeditor" name="about" cols="102"><?php if(isset($results))echo $results->about; ?></textarea>
                </div>
            </div><br/>
            <div class="">
                <label class=""> Icon<span>*</span> </label>
                <div class="">
                    <br/>
                    <?php if(isset($results)){
                        
                        ?>
                    <img src="/<?php echo DOMAIN;?>/assets/uploads/<?php echo $alpha.'_'.$results->sno;?>/logo/<?php echo $results->logo;?>" height="200px">
                    <?php  } ?>
                    
                    <br><input type="file"class="" name="logo" required="">
                    
                </div>
            </div>
            
            <br/>
            <div class="">
          <div class="">
            <input type="submit" value="Update">
          </div>
        </div>
        </form>
    </section>
</div>
    


