<section>
    <div class="inner-wrap">
        <div class="container">
            <div class="row clearfix">
                <div class="col-sm-8 col-md-8">
                    <h2 id="business-heading">Business Registration</h2>                  
                        <?php if(isset($message)) { ?> 
                        <label><?php echo $message;?></label>
                        <?php } ?>                  
                    <div class="business-left">
                        <form action="<?php echo BASE;?>register/?type=business&step=1" method='post'>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Business Name :</label>
                                <input class="form-control" name='name' type="text" placeholder="Your Business Name" required="required">
                                <label for="exampleInputPassword1">Business Email :</label>
                                <input class="form-control" name='email' type="text" placeholder="Your Business Email" required="required">
                                <label for="exampleInputPassword1">Category :</label>
                                <input class="form-control" name='category' type="text" placeholder="One Business Category eg. Shopping, Clothing, Food etc.">
                                <label for="exampleInputPassword1">Address :</label>
                                <input class="form-control" name='address' type="text" placeholder="Your Business Address" required="required">
                                <label for="exampleInputPassword1">Phone number :</label>
                                <input class="form-control" name='phone' type="text" placeholder="Your Business Phone" required="required">
                                <label for="exampleInputPassword1">Login Username :</label>
                                <input class="form-control" name='username' type="text" placeholder="Choose a login username" required="required">
                                <label for="exampleInputPassword1">Login Password :</label>
                                <input class="form-control" name='pass_1' type="password" placeholder="Your Login Password" required="required">
                                <label for="exampleInputPassword1">Password again :</label>
                                <input class="form-control" name='pass_2' type="password" placeholder="Password Again" required="required">
                                <!--
                                <label for="exampleInputPassword1">Package Selected : <?php echo $package; ?></label>
                                <label>
                                    <a href="/<?php echo DOMAIN ?>/register/?type=business">Change</a>
                                </label>  
                                -->
                                <div id="add-bussiness">
                                    <button type="submit" class="btn btn-add"><a id="add-business" >Add Your Business</a></button>
                                </div>             
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 