<?php
    //Connection to the database file
    include "connect.php";

    //Routes
    $tpl = "include/templates/";
    $lang = "include/languages/";
    $func = "include/functions/";
    $css = "layout/css/";
    $js = "layout/js/";

    //Include the important files
    include $func . "functions.php"; // include functions file
    include $lang . "english.php"; //Language File
    include $tpl . "header.php"; // include header layout

    //Include navbar on all pages except with noNavBar variable
    if(!isset($noNavBar))
    {
        include $tpl ."navbar.php";
    }