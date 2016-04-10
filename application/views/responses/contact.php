<?php
/*
 * Project : <Grasshopit>
 * 
 * Author : <Sandeep Giri>
 * 
 * Contact : <ioesandeep@gmail.com>
 */

/*
 *   <Grasshopit>
 *   Copyright (C) <2014>  <Sandeep Giri>

 *   This program is free software: you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation, either version 3 of the License, or
 *   (at your option) any later version.

 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.

 *   You should have received a copy of the GNU General Public License
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.

 *   This program comes with ABSOLUTELY NO WARRANTY.
 *   This is free software, and you are welcome to redistribute it.
 *   However do not expect any help or support from the author.
 */
?>
<?php require_once dirname(dirname(__FILE__)).DS.'navbar.php';?>
<div class="categories clearfix">
    <div class="custom-container">
        <div class="col-sm-5 col-md-5">
            <h2 id="business-heading">Contact Grasshopit</h2>            
            <?php if (isset($message))
            { ?> 
                <label><?php echo $message; ?></label>
<?php } ?>   
            <label>If you missed to ask/say something. Please feel free to send again.</label>
            <div class="business-left">
                <form action="<?php echo BASE; ?>contact" method='post'>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Your Name:</label>
                        <input class="form-control" name='name' type="text" placeholder="Your Name" required="required"></div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Your Email:</label>
                        <input class="form-control" name='email' type="text" placeholder="Your Email" required="required"> </div>
                    <div class="form-group">
                        <p><label for="exampleInputPassword1">Your Message</label></p>
                        <textarea name="message" placeholder="Write your query here" style="width: 100%">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <div id="add-bussiness">
                            <button type="submit" class="btn btn-add"><a id="add-business" >Send Email</a></button>
                        </div>    
                    </div>
            </div>
        </div>
    </div>
</div>