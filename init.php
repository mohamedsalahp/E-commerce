<?php

// to show error in site 
ini_set('display_errors' , 'On');
error_reporting(E_ALL);

include 'admin/connect.php';

$sessionUser = '';

if(isset($_SESSION['user'])) {

    $sessionUser = $_SESSION['user'];

}
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

