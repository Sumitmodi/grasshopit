  <div class="right-section">
    <div class="right-top"></div>
    <div class="right-header dashboard" style="margin-top:25px;">
      <h2><i class="fa fa-folder-open" style="margin-left:40px;">User List</i></h2>
      <div class="down-arrow"></div>
    </div>
    <p style="padding: 20px"><?php echo isset($response['message']) ? $response['message'] : NULL;?></p>
    <section class="place-ads">
        
        <form class="form-horizontal" action="#" method="post" name="post_form" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-lg-3 col-md-3 col-sm-3 control-label"> Post Title<span></span> </label>
                <div class="col-lg-9 col-md-9 col-sm-9 col-sm-9">
                    <input type="text" class="form-control" value="<?php if(isset($result))echo $result[0]['title']; ?>" name="title">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 col-md-3 col-sm-3 control-label">Post Name <span>*</span> </label>
                <div class="col-lg-9 col-md-9 col-sm-9 col-sm-9">
                    <input type="text" class="form-control" value="<?php if(isset($result))echo $result[0]['name']; ?>" name="name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 col-md-3 col-sm-3 control-label"> Content<span>*</span> </label>
                <div class="col-lg-9 col-md-9 col-sm-9 col-sm-9">
                    <br/>
                    <textarea  class="ckeditor" name="content" cols="101" rows="10"><?php if(isset($result))echo $result[0]['content']; ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 col-md-3 col-sm-3 control-label"> Post Image <span>*</span> </label>
                <div class="col-lg-9 col-md-9 col-sm-9 col-sm-9">
                    <br/>
                    <?php if(isset($result)){?><img height="100px" src="<?php echo base_url().'assets/uploads/admin/post/'.$result[0]['image'] ?>">
                   
                        <?php //if(isset($result))echo $result[0]['image']; 
                        }?>
                    <br/>
                    <input type="file" class="form-control" name="post_image" >
                </div>
            </div>
            <div class="form-group">
          <div class="col-lg-offset-3 col-md-offset-3 col-lg-9 col-md-9 col-sm-9">
              <br/>
            <input type="submit" value="Submit">
          </div>
        </div>
        </form>
    </section>
</div>
    
</section>
