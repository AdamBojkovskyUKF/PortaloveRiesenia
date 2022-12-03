<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];
if($_POST['submit']==="email.php") {
} else {
    header("Location: index.php");
}
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
          <div class="col-md-4 col-sm-12">
              <div class="templatemo_contactmap">
          <div id="templatemo_map"></div>
                <img src="<?php echo $_POST['icon']; ?>" alt="Obrázok zájazdu">
                </div>
                </div>
            <div class="col-md-3 col-sm-12 leftalign">
              <div class="templatemo_contacttitle"></div>
                <div class="clear"></div>
                <p><?php echo $_POST['description']; ?></p>
                <p>Na rezervovanie tohto zájazdu nám prosím napíšte vaše údaje a my vás následne budeme informovať cez email.</p>
                <div class="templatemo_address">
                  <ul>
                  <li class="left fa fa-map-marker"></li>
                    <li class="right">Cestovná Kancelária Polygon<br>Tr. A. Hlinku 1, 949 01 Nitra</li>
                    <li class="clear"></li>
                    <li class="left fa fa-phone"></li>
                    <li class="right">010-020-0770</li>
                    <li class="clear"></li>
                    <li class="left fa fa-envelope"></li>
                    <li class="right">info@Polygon.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
              <form role="form" action="create_email.php" method="post">
                <input type="hidden" name="submit" value="create_email.php">
                <div class="templatemo_contacttitle"><?php echo $_POST['name']; ?></div>
                <div class="templatemo_form">
                  <input name="name" type="text" class="form-control" placeholder="Meno a Priezvisko" maxlength="100">
                </div>
                <div class="templatemo_form" style="margin-bottom: 100px">
                  <input name="email" type="text" class="form-control" placeholder="Email" maxlength="100">
                </div>
                <div class="templatemo_form">
                  <input name="offer" type="hidden" class="form-control" value="<?php echo $_POST['id']; ?>">
                </div>
                <div class="templatemo_contacttitle">Odkedy:</div>
                <div class="templatemo_form" style="margin-bottom: 55px">
                  <input name="start" type="date" class="form-control" placeholder="Odkedy" maxlength="100">
                </div>
                <div class="templatemo_contacttitle">Dokedy:</div>
                <div class="templatemo_form">
                  <input name="end" type="date" class="form-control" placeholder="Dokedy" maxlength="100">
                </div>
                <div class="templatemo_form"><input class="btn btn-primary" style="background-color: DimGrey;color:Gold;" type="submit" value="Rezervovať"></div>
            </form>
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
