<section>
    <div class="inner-wrap">
        <div class="container">
            <div class="row clearfix">
                <div class="col-sm-8 col-md-8">
                    <h2 id="business-heading">Business Login</h2>
                    <?php
                    $flash = $this->session->flashdata('pkg_changed');
                    $flash = $flash == false ? $this->session->flashdata('message') : $flash;
                    if ($flash)
                    {
                        $message = $flash;
                    }
                    ?>
                    <?php if (isset($message))
                    { ?> 
                        <label><?php echo $message; ?></label>
<?php } ?>                  
                    <div class="business-left">
                        <form action="" method='post'>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Username:</label>
                                <input class="form-control" type="text"  name="username" placeholder="Enter username" required/>
                                <label for="exampleInputPassword1">Password :</label>
                                <input class="form-control" type="password" name="password" placeholder="Enter password" required/>                                
                                <label>Trouble logging in? </label>
                                <a style="color: #005702" href="/<?php echo DOMAIN ?>/forgot-password?type=business">Forgot Password</a>
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