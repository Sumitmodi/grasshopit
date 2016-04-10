<section>
    <div class="inner-wrap">
        <div class="container">
            <div class="row clearfix">
                <div class="col-sm-8 col-md-8">
                    <h2 id="business-heading">Grasshopit New User Registration</h2>                  
                    <?php if (isset($message)) { ?> 
                        <label><?php echo $message; ?></label>
                    <?php } ?>                  
                    <div class="business-left">

                        <form class="contactform" action="?type=user" method="post">

                            <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Your full name" required/>
                            </div>
                            <div class="form-group">
                            <label>Your Email Address</label>
                            <input type="text" name="email" class="form-control" placeholder="Your email address" required/>
                            </div>
                            <div class="form-group">
                            <label>Choose a username</label>
                            <input type="text" name="username" class="form-control" placeholder="Login username" required/>
                            </div>
                            <div class="form-group">
                            <label>Choose a password</label>
                            <input type="password" name="pass_1" class="form-control" placeholder="Login Password" required/>
                            </div>
                            <div class="form-group">
                            <label>Re-enter the password</label>
                            <input type="password" name="pass_2" class="form-control" placeholder="Password Again" required/>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Register now" class="btn btn-add"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
