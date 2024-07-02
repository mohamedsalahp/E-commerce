<?php

/*
1- this func that echo the page title in case the page 
2- has the var $pagetitle and ecgo default title for other pages 
*/

function getTitle()
{
    global $pageTitle;
    if (isset($pageTitle)) {
        echo $pageTitle;
    } else {
        echo 'Default ';
    }
};

?>