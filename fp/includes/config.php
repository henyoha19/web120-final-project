<?php
/*
    config.php allows us to place configuration information
    into our web application
*/

$siteKey = "6Led7L8UAAAAAGekKcW6X-envuyyh6mWVuE1QluU";
$secretKey = "6Led7L8UAAAAANW7lNkQP_KE88zFvJBcIGjnvi_y";

date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this 

//identifies unique page url
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


//this helps elimite php date errors


//these are page specific
switch(THIS_PAGE)
{
    case 'index.php':
        $title = 'Home';
        $logo = 'fa-home';
        $PageID ='Welcome';
    break;
     
    case 'foodmenu.php':
        $title = 'Menu';
        $logo = 'fa-utensils';
        $PageID ='Food Menu';
    break;
        
    case 'foodorderform.php':
        $title = 'Food Order';
        $logo = 'fa-spoon';
        $PageID ='Food Order';
    break;
        
   
    case 'map.php':
        $title = 'Location';
        $logo = 'map-marker';
        $PageID ='Location ';
    break;
        
      case 'youtube.php':
        $title = 'YouTube';
        $logo = 'fa-youtube-square';
        $PageID ='Google YouTube Video';
    break;
        
        
    case 'contactform.php':
        $title = 'Contact Us';
        $logo = 'fa-phone';
        $PageID ='Contact Form';
    break;
    
    
    case 'about.php':
        $title = 'About';
        $logo = 'fa-certificate';
        $PageID ='About US';
    break;
        
    
         
    default:
        $title = THIS_PAGE;
        $logo = '';
        $pageID = '';
        
}

//functions go at the bottom


