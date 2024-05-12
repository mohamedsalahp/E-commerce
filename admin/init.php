<?php


include 'connect.php';
// Routes 
$tpl = 'includes/templates/';  // Template Directory 
$css = 'layout/css/';  // css Directory
$js = 'layout/js/';  // js Directory
$lang = 'includes/lang/'; // lang Directory


// include the imp files 

include $lang . 'en.php';
include  $tpl . 'header.php';


// include navbar on all pages expect the one with $nonavbar var

if (!isset($noNavbar)) {include  $tpl . 'navbar.php';}
