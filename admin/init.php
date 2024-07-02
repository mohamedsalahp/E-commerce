<?php


include 'connect.php';
// Routes 
$tpl = 'includes/templates/';  // Template Directory 
$lang = 'includes/lang/';     // lang Directory
$func = 'includes/functions/';                  //function directory 
$css = 'layout/css/';       // css Directory
$js = 'layout/js/';        // js Directory


// include the imp files 

include $func . 'functions.php';
include $lang . 'en.php';
include  $tpl . 'header.php';


// include navbar on all pages expect the one with $nonavbar var

if (!isset($noNavbar)) {include  $tpl . 'navbar.php';}
