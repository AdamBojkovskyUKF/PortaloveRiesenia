<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

$menuItems = $db->getMenu();
?>

<!DOCTYPE html>
  <head>
    <title>Polygon CSS Website Template</title>
    <meta name="keywords" content="" />
	<meta name="description" content="" />
    <!--
    Polygon Template
    https://templatemo.com/tm-400-polygon
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link href="css/templatemo_style.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>

    <script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery.lightbox.js"></script>
	<script src="js/templatemo_custom.js"></script>

  </head>
  <body>
  	<div class="site-header">
		<div class="main-navigation">
			<div class="container">
				<div class="row templatemo_gallerygap">
          <div class="col-md-3 col-sm-12">
            <a href="#"><img src="images/templatemo_logo.jpg" alt="Polygon HTML5 Template"></a>
          </div>
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.main-navigation -->

	</div> <!-- /.site-header -->
    <div id="menu-container">
    <!-- gallery start -->
    <div class="content homepage">
    <div class="container" style="margin-top: -140px">
	  <div class="row templatemorow">
    <?php
    $count = 3;
    $line = 1;
    foreach ($menuItems as $menuItem) {
    ++$count;
    if($count==9){
      $offset=" hex-offset";
      $count=0;
    } else {
      $offset="";
    }

    ?>
    <div class="hex col-sm-6<?php echo $offset; ?> templatemo-hex-top1">
    	<div>
        <div class="hexagon hexagon2 gallery-item">
          <div class="hexagon-in1">
            <div class="hexagon-in2" style="background-image: url(images/gallery/<?php echo $menuItem['icon']; ?>);">
             	<div class="overlay">
                <br><br><br><br><br><br>
                <form action="email.php" method="post">
                  <input type="hidden" name="submit" value="email.php">
                  <input type="hidden" name="id" value="<?php echo $menuItem['id']; ?>">
                  <input type="hidden" name="name" value="<?php echo $menuItem['name']; ?>">
                  <input type="hidden" name="icon" value="images/gallery/<?php echo $menuItem['icon']; ?>">
                  <input type="hidden" name="description" value="<?php echo $menuItem['description']; ?>">
                  <input class="btn btn-primary" style="margin-left: 55px;background-color: DimGrey;color:Gold;" type="submit" value="Rezervova??">
                </form>
					    </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    }
    ?>
    <!-- gallery end -->





















    <!-- team start -->
    <div class="content team" id="menu-2">
     <div class="templatemo_ourteam">
     		<div class="container templatemo_hexteam">
            	<div class="row">
                	<div class="col-md-3 col-sm-4">
                        	 <div class="hexagon hexagonteam gallery-item">
                               <div class="hexagon-in1">
                                <div class="hexagon-in2" style="background-image: url(images/team/1.jpg);">
                                <div class="overlay templatemo_overlay1">
                                	<a href="#fb">
                                   	 <div class="smallhexagon">
                                  	 	 <span class="fa fa-facebook"></span>
                                 	  </div>
                                    </a>

                                    <a href="#tw">
                                     <div class="smallhexagon">
                                       <span class="fa fa-twitter"></span>
                                    </div>
                                    </a>

                                    <a href="#ln">
                                     <div class="smallhexagon">
                                       <span class="fa fa-linkedin"></span>
                                    </div>
                                    </a>

                                    <a href="#rs">
                                     <div class="smallhexagon">
                                       <span class="fa fa-rss"></span>
                                    </div>
                                    </a>
                                </div>
                                <div class="clear"></div>
                               	<div class="overlay templatemo_overlaytxt">Phasellus interdum</div>
                                </div>
                            </div>
                          </div>
  			       </div>
                    <div class="col-md-3 col-sm-8 templatemo_servicetxt" >
                    	<h2>Free Template</h2>
                        <p>Polygon is free HTML5 template by <span class="blue">template</span><span class="green">mo</span> that can be used for any purpose. You can remove any credit link. Please tell your friends about our website. Credit goes to <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for images used in this template. Feel free to visit <a href="https://fb.com/templatemo" target="_parent">templatemo page</a> on Facebook.</p>
                    </div>
                    <div class="templatemo_servicecol2">
                    <div class="col-md-3 col-sm-4">
                        	 <div class="hexagon hexagonteam gallery-item">
                               <div class="hexagon-in1">
                                <div class="hexagon-in2" style="background-image: url(images/team/2.jpg);">
                                <div class="overlay templatemo_overlay1">
                                	<a href="#fb">
                                   	 <div class="smallhexagon">
                                  	 	 <span class="fa fa-facebook"></span>
                                 	  </div>
                                    </a>
                                    <a href="#tw">
                                     <div class="smallhexagon">
                                       <span class="fa fa-twitter"></span>
                                    </div>
                                    </a>
                                    <a href="#ln">
                                     <div class="smallhexagon">
                                       <span class="fa fa-linkedin"></span>
                                    </div>
                                    </a>
                                    <a href="#rs">
                                     <div class="smallhexagon">
                                       <span class="fa fa-rss"></span>
                                    </div>
                                    </a>
                                </div>

                                <div class="clear"></div>
                               	<div class="overlay templatemo_overlaytxt">Cras interdum accumsan diam</div>
                                </div>
                            </div>
                          </div>
  			       </div>
                    <div class="col-md-3 col-sm-8 templatemo_servicetxt">
                    	<h2>Responsive Design</h2>
                        <p>Please take a look at <a rel="nofollow" href="https://www.toocss.com">Too CSS</a> to see the collection of free website templates for you. This is free CSS website template fully compatible with tablets and mobile phones. Mauris eget neque at sapien faucibus egestas vel vitae mi. Maecenas commodo augue risus, sed placerat neque feugiat vel.</p>
                    </div>
                    </div>
               </div>
            </div>
            <div class="clear"></div>
            <div class="container templatemo_hexteam s_top">
            	<div class="row">
                	<div class="col-md-3 col-sm-4">
                        	 <div class="hexagon hexagonteam gallery-item">
                               <div class="hexagon-in1">
                                <div class="hexagon-in2" style="background-image: url(images/team/3.jpg);">
                                <div class="overlay templatemo_overlay1">
                                	<a href="#fb">
                                   	 <div class="smallhexagon">
                                  	 	 <span class="fa fa-facebook"></span>
                                 	  </div>
                                    </a>
                                    <a href="#tw">
                                     <div class="smallhexagon">
                                       <span class="fa fa-twitter"></span>
                                    </div>
                                    </a>
                                    <a href="#ln">
                                     <div class="smallhexagon">
                                       <span class="fa fa-linkedin"></span>
                                    </div>
                                    </a>
                                    <a href="#rs">
                                     <div class="smallhexagon">
                                       <span class="fa fa-rss"></span>
                                    </div>
                                    </a>
                                </div>

                                <div class="clear"></div>
                               	<div class="overlay templatemo_overlaytxt">Morbi pulvinar</div>
                                </div>
                            </div>
                          </div>
  			       </div>
                    <div class="col-md-3 col-sm-8 templatemo_servicetxt" >
                    	<h2>Mobile Ready</h2>
                        <p>Sed laoreet, enim quis euismod egestas, risus tortor tincidunt lacus, in iaculis mauris lectus at augue. Donec luctus nibh nec ullamcorper feugiat. Phasellus felis urna, lobortis vitae lacus sit amet, tristique consectetur nibh.</p>
                    </div>
                    <div class="templatemo_servicecol2">
                    <div class="col-md-3 col-sm-4">
                        	 <div class="hexagon hexagonteam gallery-item">
                               <div class="hexagon-in1">
                                <div class="hexagon-in2" style="background-image: url(images/team/4.jpg);">
                                <div class="overlay templatemo_overlay1">
                                	<a href="#fb">
                                   	 <div class="smallhexagon">
                                  	 	 <span class="fa fa-facebook"></span>
                                 	  </div>
                                    </a>
                                    <a href="#tw">
                                     <div class="smallhexagon">
                                       <span class="fa fa-twitter"></span>
                                    </div>
                                    </a>
                                    <a href="#ln">
                                     <div class="smallhexagon">
                                       <span class="fa fa-linkedin"></span>
                                    </div>
                                    </a>
                                    <a href="#rs">
                                     <div class="smallhexagon">
                                       <span class="fa fa-rss"></span>
                                    </div>
                                    </a>
                                </div>

                                <div class="clear"></div>
                               	<div class="overlay templatemo_overlaytxt">Sed nonummy</div>
                                </div>
                            </div>
                          </div>
  			       </div>
                    <div class="col-md-3 col-sm-8 templatemo_servicetxt">
                    	<h2>HTML5 CSS3</h2>
                        <p>Phasellus sodales magna orci, id scelerisque lectus faucibus a. Vivamus varius tincidunt sem. Etiam ultricies orci sit amet sem egestas varius vitae at lacus. Nunc blandit elit in mauris semper, id iaculis felis condimentum.</p>
                    </div>
                    </div>
               </div>
            </div>

     </div>
     </div>
    <!--team end-->
    <div class="clear"></div>
    <!-- service start -->
    <div class="content services" id="menu-3">
    <div class="container">
    	<div class="row templatemo_servicerow">
        	<div class="templatemo_hexservices col-sm-6">
            	<div class="blok text-center">
                  <div class="hexagon-a">
                     <a class="hlinktop" href="#">
                     	 <div class="hexa-a">
                         	<div class="hcontainer-a">
                          <div class="vertical-align-a">
                            <span class="texts-a"><i class="fa fa-bell"></i></span>
                          </div>
                        </div>
                         </div>
                     </a>
                  </div>
                     <div class="hexagonservices">
                     	<a class="hlinkbott" href="#">
                        <div class="hexa">
                      	  <div class="hcontainer">
                          <div class="vertical-align">
                          <span class="texts"></span>
                          </div>
                        </div>
                      </div>
                        </a>
                     </div>
                     </div>
                     <div class="templatemo_servicetext">
                    <h3>Etiam vulputate</h3>
                    <p>Vestibulum diam lorem, aliquet et sagittis ac, facilisis nec massa. Suspendisse sagittis leo diam, sed dapibus eros vehicula eu. Aenean nulla magna, gravida at dui in, fringilla vestibulum massa.</p>
                    </div>
              </div>
              <div class="templatemo_hexservices col-sm-6">
            	<div class="blok text-center">
                  <div class="hexagon-a">
                     <a class="hlinktop" href="#">
                     	 <div class="hexa-a">
                         	<div class="hcontainer-a">
                          <div class="vertical-align-a">
                            <span class="texts-a"><i class="fa fa-briefcase"></i></span>
                          </div>
                        </div>
                         </div>
                     </a>
                  </div>
                     <div class="hexagonservices">
                     	<a class="hlinkbott" href="#">
                        <div class="hexa">
                      	  <div class="hcontainer">
                          <div class="vertical-align">
                          <span class="texts"></span>
                          </div>
                        </div>
                      </div>
                        </a>
                     </div>
                     </div>
                     <div class="templatemo_servicetext">
                    <h3>Aliquam faucibus</h3>
                    <p>Vivamus a purus vel ante fermentum bibendum. Sed laoreet, enim quis euismod egestas, risus tortor tincidunt lacus, in iaculis mauris lectus at augue. Donec luctus nibh nec ullamcorper feugiat.</p>
                    </div>
              </div>
              <div class="templatemo_hexservices col-sm-6">
            	<div class="blok text-center">
                  <div class="hexagon-a">
                     <a class="hlinktop" href="#">
                     	 <div class="hexa-a">
                         	<div class="hcontainer-a">
                          <div class="vertical-align-a">
                            <span class="texts-a"><i class="fa fa-mobile"></i></span>
                          </div>
                        </div>
                         </div>
                     </a>
                  </div>
                     <div class="hexagonservices">
                     	<a class="hlinkbott" href="#">
                        <div class="hexa">
                      	  <div class="hcontainer">
                          <div class="vertical-align">
                          <span class="texts"></span>
                          </div>
                        </div>
                      </div>
                        </a>
                     </div>
                     </div>
                     <div class="templatemo_servicetext">
                    <h3>Donec sagittis</h3>
                    <p>Phasellus sodales magna orci, id scelerisque lectus faucibus a. Vivamus varius tincidunt sem. Etiam ultricies orci sit amet sem egestas varius vitae at lacus. Nunc blandit elit in mauris semper, id iaculis felis condimentum.</p>
                    </div>
              </div>
              <div class="templatemo_hexservices col-sm-6">
            	<div class="blok text-center">
                  <div class="hexagon-a">
                     <a class="hlinktop" href="#">
                     	 <div class="hexa-a">
                         	<div class="hcontainer-a">
                          <div class="vertical-align-a">
                            <span class="texts-a"><i class="fa fa-trophy"></i></span>
                          </div>
                        </div>
                         </div>
                     </a>
                  </div>
                     <div class="hexagonservices">
                     	<a class="hlinkbott" href="#">
                        <div class="hexa">
                      	  <div class="hcontainer">
                          <div class="vertical-align">
                          <span class="texts"></span>
                          </div>
                        </div>
                      </div>
                        </a>
                     </div>
                     </div>
                     <div class="templatemo_servicetext">
                    <h3>Integer tempus</h3>
                    <p>Maecenas porttitor erat et enim dapibus, sit amet accumsan velit tincidunt. Etiam sapien urna, suscipit ut purus ac, convallis pulvinar tellus. In eu neque purus. Donec cursus dictum pulvinar.</p>
                    </div>
              </div>
              <div class="templatemo_hexservices col-sm-6">
            	<div class="blok text-center">
                  <div class="hexagon-a">
                     <a class="hlinktop" href="#">
                     	 <div class="hexa-a">
                         	<div class="hcontainer-a">
                          <div class="vertical-align-a">
                            <span class="texts-a"><i class="fa fa-thumb-tack"></i></span>
                          </div>
                        </div>
                         </div>
                     </a>
                  </div>
                     <div class="hexagonservices">
                     	<a class="hlinkbott" href="#">
                        <div class="hexa">
                      	  <div class="hcontainer">
                          <div class="vertical-align">
                          <span class="texts"></span>
                          </div>
                        </div>
                      </div>
                        </a>
                     </div>
                     </div>
                     <div class="templatemo_servicetext">
                    <h3>Aliquam pellentesque</h3>
                    <p>Nam auctor elementum dolor. Donec euismod, justo sed convallis blandit, ipsum erat mattis lectus, vel pharetra neque enim tristique risus. Ut consequat nisi vel justo. Curabitur in orci vel enim congue cursus.</p>
                    </div>
              </div>

        </div>
    </div>
    </div>
    <!-- service end -->





















    <!-- contact start -->
    <div class="content contact" id="menu-5">
    <div class="container">
     	<div class="row">
        	<div class="col-md-4 col-sm-12">
            	<div class="templatemo_contactmap">
    			<div id="templatemo_map"></div>
                <img src="images/templatemo_contactiframe.png" alt="contact map">
                </div>
                </div>
            <div class="col-md-3 col-sm-12 leftalign">
            	<div class="templatemo_contacttitle">Contact Information</div>
                <div class="clear"></div>
                <p>Integer eu neque sed mi fringilla pellentesque a eget leo. Duis ornare diam lorem, sit amet tempor mauris fringilla in. Etiam semper tempus augue, at vehicula metus. Nam vestibulum tortor nec congue ornare.</p>
                <div class="templatemo_address">
                	<ul>
                	<li class="left fa fa-map-marker"></li>
                    <li class="right">Nulla ut tellus, sit amet urna, <br>scelerisque pretium 10960</li>
                    <li class="clear"></li>
                    <li class="left fa fa-phone"></li>
                    <li class="right">010-020-0770</li>
                    <li class="clear"></li>
                    <li class="left fa fa-envelope"></li>
                    <li class="right">info@company.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
            	<form role="form">
              	<div class="templatemo_form">
                	<input name="fullname" type="text" class="form-control" id="fullname" placeholder="Your Name" maxlength="40">
              	</div>
              	<div class="templatemo_form">
                	<input name="email" type="text" class="form-control" id="email" placeholder="Your Email" maxlength="40">
              	</div>
               	<div class="templatemo_form">
                	<input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" maxlength="40">
              	</div>
              	<div class="templatemo_form">
	            	<textarea name="message" rows="10" class="form-control" id="message" placeholder="Message"></textarea>
              	</div>
              	<div class="templatemo_form"><button type="button" class="btn btn-primary">Send Message</button></div>
            </form>
            </div>
        </div>

    </div>
    </div>
    </div>
    <!-- contact end -->















	<!-- footer start -->
    <div class="templatemo_footer" style="margin-top: 400px">
    	<div class="container">
    	<div class="row">
        	<div class="col-md-9 col-sm-12">
            	<span>Copyright &copy; 2022 Polygon | Design: TemplateMo</span>
            </div>
            <div class="col-md-3 col-sm-12 templatemo_rfooter">
            	  <a href="#">
                 	<div class="hex_footer">
					<span class="fa fa-facebook"></span>
					</div>
                  </a>
                  <a href="#">
                    <div class="hex_footer">
					 <span class="fa fa-twitter"></span>
					</div>
                    </a>
                  <a href="#">
                 	<div class="hex_footer">
					 <span class="fa fa-linkedin"></span>
					</div>
                 </a>
                <a href="#">
                	<div class="hex_footer">
					 <span class="fa fa-rss"></span>
					</div>
                </a>
            </div>
        </div>
        </div>
    </div>
    <!-- footer end -->
	<!-- templatemo 400 polygon -->
  </body>
</html>
