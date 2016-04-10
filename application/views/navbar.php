<?php
/*
 * Author : Sandeep Giri <ioesandeep@gmail.com>
 * 
 * Project : grasshopit
 * 
 * File : navbar.php
 * 
 * Created : Nov 8, 2014 9:58:17 PM
 */

/*
 *   <Saffersmall :: Online Ads and Marketing Directory.>
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
 *   This is free software, and you are welcome to redistribute it only if you 
 *   get permissions from the author or the distrubutor of this code.
 * 
 *   However do not expect any help or support from the author.
 */
?>
<div id="navbar">
    <div class="custom-container">
        <nav role="navigation" class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a href="#" class="navbar-brand">Menu </a> </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/grass/home"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="<?php echo base_url();?>about"><i class="fa fa-users"></i>About Us</a></li>
                        <li><a href="<?php echo base_url();?>register?type=business"><i class="fa fa-plus-square"></i> Add Business</a></li>
                        <li><a href="<?php echo base_url();?>contact"><i class="fa fa-phone"></i>Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
</div>