<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/13/14
 * Time: 5:08 PM
 */ 
?>

    <div class="page-content">  
        
    <?php if(!isset($package)){
        $package = NULL?>
    <p class="content">You have not selected any package.</p>
    <?php } else { ?> 
    <p class="content">You current package :: <span  class="red"><?php echo $package;?></span></p>
        <?php } ?>
    <?php if(!$package){ ?>
        <h4>Subscribe to a package today that fits your business.</h4>
    <?php } else { ?>
        <h4>Upgrade your package today to get more and more from us.</h4>
    <?php } ?>
    <div class="linear">
    	<div class="row">
        <?php if(!$package){ ?>
        	<div class="col-lg-4">
            	<div class="linear-list">
                	<h2>Founder</h2>
                <a href="#">Read More</a>
				<form id="fou" method="get" action="register?type=business">
					<input type="hidden" value="business" name="type">
					<input type="hidden" value="2" name="step">
					<input type="hidden" value="adopter" name="package">
					<button hidden="hidden" class="btn btn-conneected btn-success" type="submit">Get Connected Today</button>
				</form>
                </div>
            </div>
        <?php } if(!$package or strtolower($package)=='founder') { ?>
			<div class="col-lg-4">
            	<div class="linear-list">
                	<h2>Adopter</h2>
                <a href="#">Read More</a>
				<!--<p><a class="adp" href="#"><?php echo ($package)?"Upgrade":"Join Today"?></a></p>-->
                <form id="adp" method="get" action="register?type=business">
					<input type="hidden" value="business" name="type">
					<input type="hidden" value="2" name="step">
					<input type="hidden" value="adopter" name="package">
					<button hidden="hidden" class="btn btn-conneected btn-success" type="submit">Get Connected Today</button>
				</form>
                </div>
            </div>
        <?php } if(!$package or strtolower($package)=='founder' or strtolower($package)=='adopter') { ?>
			<div class="col-lg-4">
            	<div class="linear-list">
                	<h2>Ambassador</h2>
                <a href="#">Read More</a>
            <!--<p><a class="amb" onclick="formSubmit('amb')" href="#"><?php echo ($package)?"Upgrade":"Join Today"?></a></p>-->
                <form  method="get" action="register?type=business">
					<input type="hidden" value="business" name="type">
					<input type="hidden" value="2" name="step">
					<input type="hidden" value="ambassador" name="package">
					<button id="amb" class="btn btn-conneected btn-success" type="submit">Get Connected Today</button>
				</form>
                </div>
            </div>
		<?php } ?>
        </div>
    </div>
    </div>
