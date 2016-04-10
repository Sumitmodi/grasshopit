<div class="categories clearfix">
    <div class="custom-container">
        <div class="col-sm-5 col-md-5">
            <h2 id="business-heading">Grasshopit User Login</h2>                  
            <?php if (isset($message))
            { ?> 
                <label><?php echo $message; ?></label>
<?php } ?>                  
            <div class="business-left">

                <form action="" method='post'>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Username:</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter Username" required/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password" required/>
                    </div>
                    <div id="add-bussiness">
                        <button type="submit" class="btn btn-add"><a id="add-business" >Login now</a></button>
                    </div>  
                    <p>
                        Trouble logging in? <a style="color: #005702" href="/<?php echo DOMAIN ?>/forgot-password?type=user">Forgot Password</a> 
                    </p>
            </div>
        </div>
    </div>
</div> 