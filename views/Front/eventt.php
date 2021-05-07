<?php include "../../controller/ajouterevent.php";

$eventC = new eventC();
$listeevent = $eventC->afficherevent();

?>
<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="assets/img/ico/apple-touch-icon-57x57.png">

    <title>Makelti</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/plugins.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/pe-icons.css" rel="stylesheet">

</head>
<body id="page-top" class="regular-navigation      pace-done" style=""><div class="parallax-mirror" style="z-index: -100; position: fixed; overflow: hidden; transform: translate3d(0px, 0px, 0px); visibility: hidden; top: 3386.4px; left: 0px; height: 1638px; width: 886px;"><img class="parallax-slider" src="assets/img/bg/bg1.jpg" style="transform: translate3d(0px, 0px, 0px); position: absolute; top: -677.28px; left: -652px; height: 1461px; width: 2191px;"></div><div class="parallax-mirror" style="z-index: -100; position: fixed; overflow: hidden; transform: translate3d(0px, 0px, 0px); visibility: hidden; top: 2730.8px; left: 0px; height: 655px; width: 886px;"><img class="parallax-slider" src="assets/img/bg/bg10.jpg" style="transform: translate3d(0px, 0px, 0px); position: absolute; top: -546.16px; left: -62px; height: 674px; width: 1011px;"></div><div class="parallax-mirror" style="z-index: -100; position: fixed; overflow: hidden; transform: translate3d(0px, 0px, 0px); visibility: hidden; top: 1804.2px; left: 0px; height: 927px; width: 886px;"><img class="parallax-slider" src="assets/img/bg/bg4.jpg" style="transform: translate3d(0px, 0px, 0px); position: absolute; top: -360.84px; left: -226px; height: 892px; width: 1338px;"></div><div class="parallax-mirror" style="z-index: -100; position: fixed; overflow: hidden; transform: translate3d(0px, 0px, 0px); visibility: visible; top: -975px; left: 0px; height: 1069px; width: 886px;"><img class="parallax-slider" src="assets/img/bg/bg4.jpg" style="transform: translate3d(0px, 0px, 0px); position: absolute; top: 195px; left: -311px; height: 1006px; width: 1509px;"></div><div class="parallax-mirror" style="z-index: -100; position: fixed; overflow: hidden; transform: translate3d(0px, 0px, 0px); visibility: hidden; top: 6274.4px; left: 0px; height: 1638px; width: 886px;"><img class="parallax-slider" src="assets/img/bg/bg1.jpg" style="transform: translate3d(0px, 0px, 0px); position: absolute; top: -1254.88px; left: -652px; height: 1461px; width: 2191px;"></div><div class="parallax-mirror" style="z-index: -100; position: fixed; overflow: hidden; transform: translate3d(0px, 0px, 0px); visibility: hidden; top: 5618.8px; left: 0px; height: 655px; width: 886px;"><img class="parallax-slider" src="assets/img/bg/bg10.jpg" style="transform: translate3d(0px, 0px, 0px); position: absolute; top: -1123.76px; left: -62px; height: 674px; width: 1011px;"></div><div class="parallax-mirror" style="z-index: -100; position: fixed; overflow: hidden; transform: translate3d(0px, 0px, 0px); visibility: hidden; top: 4692.2px; left: 0px; height: 927px; width: 886px;"><img class="parallax-slider" src="assets/img/bg/bg4.jpg" style="transform: translate3d(0px, 0px, 0px); position: absolute; top: -938.44px; left: -226px; height: 892px; width: 1338px;"></div><div class="parallax-mirror" style="z-index: -100; position: fixed; overflow: hidden; transform: translate3d(0px, 0px, 0px); visibility: hidden; top: 1913px; left: 0px; height: 1069px; width: 886px;"><img class="parallax-slider" src="assets/img/bg/bg4.jpg" style="transform: translate3d(0px, 0px, 0px); position: absolute; top: -382.6px; left: -311px; height: 1006px; width: 1509px;"></div><div class="parallax-mirror" style="z-index: -100; position: fixed; overflow: hidden; transform: translate3d(0px, 0px, 0px); visibility: hidden; top: 14742.2px; left: 0px; height: 2415px; width: 134px;"><img class="parallax-slider" src="assets/img/bg/bg1.jpg" style="transform: translate3d(0px, 0px, 0px); position: absolute; top: -2948.44px; left: -1494px; height: 2082px; width: 3123px;"></div><div class="parallax-mirror" style="z-index: -100; position: fixed; overflow: hidden; transform: translate3d(0px, 0px, 0px); visibility: hidden; top: 13832.2px; left: 0px; height: 910px; width: 134px;"><img class="parallax-slider" src="assets/img/bg/bg10.jpg" style="transform: translate3d(0px, 0px, 0px); position: absolute; top: -2766.44px; left: -591px; height: 878px; width: 1317px;"></div><div class="parallax-mirror" style="z-index: -100; position: fixed; overflow: hidden; transform: translate3d(0px, 0px, 0px); visibility: hidden; top: 12814.8px; left: 0px; height: 1017px; width: 134px;"><img class="parallax-slider" src="assets/img/bg/bg4.jpg" style="transform: translate3d(0px, 0px, 0px); position: absolute; top: -2562.96px; left: -656px; height: 964px; width: 1446px;"></div><div class="parallax-mirror" style="z-index: -100; position: fixed; overflow: hidden; transform: translate3d(0px, 0px, 0px); visibility: hidden; top: 6849px; left: 0px; height: 3887px; width: 134px;"><img class="parallax-slider" src="assets/img/bg/bg4.jpg" style="transform: translate3d(0px, 0px, 0px); position: absolute; top: -1369.8px; left: -2378px; height: 3260px; width: 4890px;"></div>


    <div class="master-wrapper">

        <div class="preloader" style="display: none;"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
            <div class="preloader-img">
            	<span class="loading-animation animate-flicker"><img src="assets/img/loading.GIF" alt="loading"></span>
            </div>
        </div>

        <?php require_once 'navbar.php';
        ?>


<section id="the-menu">
            <div class="section-inner">

                 <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center mb100">
                            <h2 class="section-heading">Browse <span class="theme-accent-color">The</span> Events</h2>
                            <hr class="thin-hr">
                            <h3 class="section-subheading secondary-font">Your tastebuds will thank you.</h3>
                        </div>
                    </div>
                </div>
                
                <div class="container">

                    
                <?PHP
            foreach ($listeevent as $row) {
            ?>
                    <div class="row">
                        <div class="col-md-6 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                            <h2 class="mb50"><span class="heading-font text-uppercase">événement</span></h2>
                            <div class="food-menu-item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <img src="imgg/<?PHP echo $row['imageevent']; ?>" class="img-responsive">
                                    </div>
                                    <div class="col-xs-9">
                                        <h3><?PHP echo $row['nomevent']; ?>                             <span class="theme-accent-color">        <?PHP echo $row['nbrplace']; ?> place</span></h3>
                                        <li><?PHP echo $row['descriptionevent']; ?></li>
                                        <li><a href="lieu.php">Lieu</a></li>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <?PHP
            }
            ?>

                        <div class="col-md-6 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                            <h2 class="mb50"></h2>
                            <div class="food-menu-item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        
                                    </div>
                                    <div class="col-xs-9">
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/init.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script type="text/javascript">
    $(document).ready(function(){
       'use strict';
        jQuery('#headerwrap').backstretch([
          "assets/img/bg/bg1.jpg",
          "assets/img/bg/bg2.jpg",
          "assets/img/bg/bg3.jpg",
        ], {duration: 8000, fade: 500});
    });
    </script>











</body>

</html>
