<section>
    <div class="inner-wrap">
        <div class="container">
            <div class="row clearfix">
                <div class="col-sm-8 col-md-8">
                    <h2 id="business-heading">Super Admin Login</h2>                  
                    <?php if (isset($message)) { ?> 
                        <label><?php echo $message; ?></label>
                    <?php } ?>                  
                    <div class="business-left">
                        <form action="" method='post'>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Username:</label>      
                                <input type="text" name="spadmin_name" class="form-control" placeholder="Enter username" required/>
                                <label for="exampleInputPassword1">Password :</label>
                                <input type="password" name="spadmin_pass"  class="form-control" placeholder="Enter password" required/>
                                <div id="add-bussiness">
                                    <button type="submit" class="btn btn-add"><a id="add-business" >Login now</a></button>
                                </div>   
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 