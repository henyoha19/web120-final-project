<?php include 'includes/config.php'?> 
<!DOCTYPE html>
<html>
<head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/fp.css" />
    <link rel="stylesheet" href="css/table.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
   
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class=" fa fa-cutlery"></i>Agelgel Restaurant</a></h1>
  <nav id="cssmenu">
  <ul>
     
     <li><a href="index.php"><span><i class="fa fa-fw fa-home"   ></i> HOME</span></a></li>
     <li><a href="foodmenu.php"><span><i class="fas fa-utensils"></i> Food Menu</span></a></li>
     <li><a href="foodorderform.php"><span><i class="fa fa-fw fa-spoon"></i> Food Order </span></a></li>
     <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
        <ul>
           <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
           <li><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a></li>
        </ul>
     </li>
     <li><a href="contactform.php"><span><i class="fa fa-fw fa-phone"></i> Contact</span></a></li>
     <li><a href="about.php"><span><i class="fa fa-fw fa-certificate"></i> About </span></a></li>
        
  </ul>
  </nav>
</header>
    <!-- START LEFT COL -->
<section>
 <h2 class="pageID"> <?=$PageID?></h2>