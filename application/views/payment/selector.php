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
<style>
    img{
        width:100%;
        height:100%;
        overflow:hidden;
    }
</style>
<br/><br/>
<section class=" clearfix">
    <div class="inner-wrap  clearfix">
        <div class="container clearfix"> 
            <div class="row">
                <h1>Select your preferred payment method</h1>
                <div class="col-xs-12 col-sm-4 col-md-4 left_side pull-left clickable" id='paypal' style="margin:20px;border:4px solid #e0e0e0;">
                    <div class="heading">
                        <img src='/<?php echo DOMAIN; ?>/assets/images/paypal.jpg' style="height:200px;"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 center_side pull-left clickable" id='bluepay' style="margin:20px;border:4px solid #e0e0e0;">
                    <div class="heading">
                        <img src='<?php echo base_url(); ?>assets/images/bluepay.png' style="height:200px;"/>
                    </div>
                </div>
            </div>
            <h1 class='msg'></h1>
            <form action='?type=business' method='get'>     
                <input type='hidden' name='type' value='business'/>
                <input type='hidden' name='step' value='3'>           
                <p class='method'></p>
                <p>Currently selected package : <b><?php echo $this->session->userdata('package');;?></b></p>
                <button class="btn btn-conneected" type="submit">Proceed to next step</button>
            </form>
        </div>
    </div>
</section>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type='text/javascript'>
    $(document).ready(function () {
        $('div.clickable').click(function () {
            $(this).css('border', '4px solid #f17c0e');
            if ($(this).attr('id').toLowerCase() == 'paypal') {
                $('div#bluepay').css('border', '4px solid #e0e0e0');
            } else {
                $('div#paypal').css('border', '4px solid #e0e0e0');
            }
            $('p.method').html('<input type="hidden" name="method" value="'+$(this).attr('id')+'">');
        });
        $('form').submit(function(){
           if($('p.method').html() == '') {
               $('h1.msg').html('Please select a payment method.');
               return false;
           }
        });
    });
</script>
