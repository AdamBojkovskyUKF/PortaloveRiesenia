<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];
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
    <!-- contact start -->
    <div class="container" style="margin-top: -100px">
      <div class="row">
            <div class="col-md-12 col-sm-12">
              <?php
              if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] === false) {
                ?>
                <form role="form" action="login.php" method="post">
                  <input type="hidden" name="submit" value="login.php">
                  <div class="templatemo_contacttitle">Vaše údaje:</div>
                  <div class="templatemo_form" style="margin-bottom: 55px">
                    <input name="username" type="text" class="form-control" placeholder="Meno" maxlength="40">
                  </div>
                  <div class="templatemo_form">
                    <input name="password" type="password" class="form-control" placeholder="Heslo" maxlength="40">
                  </div>
                  <div class="templatemo_form"><input class="btn btn-primary" style="background-color: DimGrey;color:Gold;" type="submit" value="Prihlásenie"></div>
              </form>
                <?php
                } else {
                  $menuItems = $db->getMenu();
                ?>
                <form role="form" action="create_menu.php" method="post">
                  <input type="hidden" name="submit" value="create_menu.php">
                  <div class="templatemo_form">
                    <input name="name" type="text" class="form-control" placeholder="Názov zájazdu" maxlength="100">
                  </div>
                  <div class="templatemo_form">
                    <input name="icon" type="text" class="form-control" placeholder="Názov obrázku v images/gallery" maxlength="100">
                  </div>
                  <div class="templatemo_form">
                    <input name="description" type="text" class="form-control" placeholder="Popis zájazdu" maxlength="10000">
                  </div>
                  <div class="templatemo_form"><input class="btn btn-primary" style="background-color: DimGrey;color:Gold;" type="submit" value="Vytvoriť novú ponuku zájazdu"></div>
                </form>
                <div class="templatemo_contacttitle"> </div>
                <div class="templatemo_contacttitle"> </div>
                <div class="templatemo_contacttitle"> </div>
                <div class="templatemo_contacttitle">Možnosti v hlavnom menu:</div>
                <?php
                  foreach ($menuItems as $menuItem) {
                ?>
                <form role="form" action="update_menu.php" method="post">
                  <input type="hidden" name="submit" value="update_menu.php">
                  <div class="templatemo_form">
                    <input name="id" type="text" class="form-control" value="<?php echo $menuItem['id']; ?>" readonly style="background-color:rgb(52, 53, 54);">
                  </div>
                  <div class="templatemo_form">
                    <input name="name" type="text" class="form-control" value="<?php echo $menuItem['name']; ?>" maxlength="100">
                  </div>
                  <div class="templatemo_form">
                    <input name="icon" type="text" class="form-control" value="<?php echo $menuItem['icon']; ?>" maxlength="100">
                  </div>
                  <div class="templatemo_form">
                    <input name="description" type="text" class="form-control" value="<?php echo $menuItem['description']; ?>" maxlength="10000">
                  </div>
                  <div class="templatemo_form">
                    <input name="created_at" type="text" class="form-control" value="<?php echo $menuItem['created_at']; ?>" readonly style="background-color:rgb(52, 53, 54);">
                  </div>
                  <div class="templatemo_form">
                    <input name="updated_at" type="text" class="form-control" value="<?php echo $menuItem['updated_at']; ?>" readonly style="background-color:rgb(52, 53, 54);">
                  </div>
                  <div class="templatemo_form"><input class="btn btn-primary" style="background-color: DimGrey;color:Gold;" type="submit" value="Upraviť"></div>
                </form>
                <form role="form" action="delete_menu.php" method="post">
                  <input type="hidden" name="submit" value="delete_menu.php">
                  <div class="templatemo_form">
                    <input name="id" type="hidden" class="form-control" value="<?php echo $menuItem['id']; ?>">
                  </div>
                  <div class="templatemo_form"><input class="btn btn-primary" style="background-color: DimGrey;color:Gold;" type="submit" value="Zmazať"></div>
                </form>
                <?php
                  }
                }
                ?>
                <div class="templatemo_contacttitle"> </div>
                <div class="templatemo_contacttitle"> </div>
                <div class="templatemo_contacttitle"> </div>
                <div class="templatemo_contacttitle">Doručené žiadosti or rezerváciu:</div>
                <?php
                  $emails = $db->getEmails();
                  foreach ($emails as $email) {
                ?>
                <form role="form" action="delete_email.php" method="post">
                  <input type="hidden" name="submit" value="delete_email.php">
                  <div class="templatemo_form">
                    <input name="id" type="text" class="form-control" value="<?php echo $email['id']; ?>" readonly style="background-color:rgb(52, 53, 54);">
                  </div>
                  <div class="templatemo_form">
                    <input name="name" type="text" class="form-control" value="<?php echo $email['name']; ?>" readonly style="background-color:rgb(52, 53, 54);">
                  </div>
                  <div class="templatemo_form">
                    <input name="email" type="text" class="form-control" value="<?php echo $email['email']; ?>" readonly style="background-color:rgb(52, 53, 54);">
                  </div>
                  <div class="templatemo_form">
                    <input name="offer" type="text" class="form-control" value="<?php echo $email['offer']; ?>" readonly style="background-color:rgb(52, 53, 54);">
                  </div>
                  <div class="templatemo_form">
                    <input name="start" type="text" class="form-control" value="<?php echo $email['start']; ?>" readonly style="background-color:rgb(52, 53, 54);">
                  </div>
                  <div class="templatemo_form">
                    <input name="end" type="text" class="form-control" value="<?php echo $email['end']; ?>" readonly style="background-color:rgb(52, 53, 54);">
                  </div>
                  <div class="templatemo_form">
                    <input name="created_at" type="text" class="form-control" value="<?php echo $email['created_at']; ?>" readonly style="background-color:rgb(52, 53, 54);">
                  </div>
                  <div class="templatemo_form">
                    <input name="updated_at" type="text" class="form-control" value="<?php echo $email['updated_at']; ?>" readonly style="background-color:rgb(52, 53, 54);">
                  </div>
                  <div class="templatemo_form"><input class="btn btn-primary" style="background-color: DimGrey;color:Gold;" type="submit" value="Zmazať"></div>
                </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    </div>
    <!-- contact end -->















    <!-- footer start -->
    <div class="templatemo_footer" style="margin-top: 200px">
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
