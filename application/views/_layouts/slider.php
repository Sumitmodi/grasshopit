<?php
/**
 * Created by PhpStorm.
 * User: Arjun Paudel
 * Date: 8/17/14
 * Time: 5:57 PM
 */
?>
<section>
    <div class="container-fluid clearfix">
        <div class="row">
            <div class="slider">
                <div class="banner">
                    <div class="head-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="logo">
                                        <h1> <a href="#"><img src="<?php
                                                echo $logo?$logo:"assets/public/img/logo1.png"
                                              ?>" alt="logo"/></a> </h1>
                                    </div>
                                    <!--logo-->
                                </div>
                                <div class="col-md-6 col-sm-8 col-xs-8">
                                    <div class="row">
                                        <div class="search-wrap" data-animate-to="fadeInRight">
                                            <form action="/<?php echo DOMAIN?>/search">
                                            <ul>
                                                <li>
                                                    <input class="form-control" type="text" name="query" placeholder="Enter search text"/>
                                                    <!--<select id="dropdown-1" name="query" class="demo-default" placeholder="Browse Categories" >
                                                        <option value="">Browse Categories</option>
                                                        <option value="Restaurant">Restaurant</option>
                                                        <option value="Nightlife">Nightlife</option>
                                                        <option value="Shopping">Shopping</option>
                                                        <option value="Health">Health</option>
                                                        <option value="Automotive">Automotive</option>
                                                        <option value="Beauty">Beauty</option>
                                                        <option value="Home service">Home service</option>
                                                    </select>-->
                                                </li>
                                                <li>
                                                    <input class="form-control" type="text" name="location" placeholder="Enter location"/>
                                                    <!--<select id="dropdown-2" name="location" class="demo-default" placeholder="Browse Locations">
                                                        <option value="">Browse Locations</option>
                                                        <option value="kathmandu">Kathmandu,Nepal</option>
                                                        <option value="pokhara">Pokhara,Nepal</option>
                                                        <option value="california">California,USA</option>
                                                        <option value="Kansas">Kansas,USA</option>
                                                        <option value="Manchester united">Manchester united,UK</option>
                                                        <option value="Berlin">Berlin,Germany</option>
                                                        <option value="sydney">Sydney,australia</option>
                                                        <option value="madrid">madrid,spain</option>
                                                        <option value="paris">paris,france</option>
                                                    </select>-->
                                                </li>
                                                <li>
                                                    <input type="submit" value="Search"/>
                                            </ul>
                                            </form>
                                            <div class="adv-search"> <a class="pull-right" href="#">Advanced Search</a> </div>
                                        </div>
                                    </div>

                                    <!--search wrap-->
                                </div>
                                <!--col-md-8-->
                            </div>
                            <!--row-->
                        </div>
                        <!--container-->
                    </div>
                    <!--head wrap-->
                </div>
            </div>
        </div>
    </div>
</section>
<!----slider section---->
