<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Recipd Book</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/animate/animate.css" />
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <header id="home" class="navbar-fixed-top">
            <div class="header_top_menu clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-3 col-sm-12 text-right">

                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="head_top_social text-right">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                                <a href=""><i class="fa fa-youtube"></i></a>
                              </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- End navbar-collapse-->

            <div class="main_menu_bg">
                <div class="container">
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand our_logo" href="#"></a>
                                </div>

                                <?php
                                session_start();
                                echo "Hi ".$_SESSION["login_user"];
                                if(!empty($_SESSION["login_user"])){

echo "
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>

                                    <ul class='nav navbar-nav navbar-right'>
                                        <li><a href='index.html'>Home</a></li>
                                        <li><a href='adminhome.php'>Menu</a></li>
                                        <li><a href='logout.php'>Logout</a></li>

                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>
        </header> <!-- End Header Section -->";

echo "
                        <div class='single_pakeg_two text-left wow rotateInDownLeft'>
                            <div class='col-md-6 col-sm-8'>
                                <div class='single_pakeg_text'>
                                    <div class='pakeg_title'>
                                        <h4>Add your recipe</h4>
                                        <form method='POST' action='radd1.php'enctype='multipart/form-data'>
                                          <div class='form-group'>
                                            <input type='text' name='txt' placeholder='Dish name' required=''><br><br>
                                           Enter recipe:
                                            <input type='textarea' name='txt1' placeholder='Recipe' required=''><br><br>
                                            Enter link:
                                             <input type='text' name='txt2' placeholder='Youtube link' required=''><br><br>
                                            <br><br>
                                             Select Image:<input type='file' name='image' id='image' ><br><br>
                                          </div>
                                           <br><br>
                                           <input type='Submit' class='btn btn-primary'>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>";
echo"
		<div class='scrollup'>
			<a href='#><i class='fa fa-chevron-up'></i></a>
		</div>


        <script src='assets/js/vendor/jquery-1.11.2.min.js'></script>
        <script src='assets/js/vendor/bootstrap.min.js'></script>

        <script src='assets/js/jquery-easing/jquery.easing.1.3.js'></script>
        <script src='assets/js/wow/wow.min.js'></script>
        <script src='assets/js/plugins.js'></script>
        <script src='assets/js/main.js'></script>
    </body>
</html>";
}
?>
