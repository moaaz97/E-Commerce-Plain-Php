<?php
    //Connection to the database file
    include "connect.php";

    //Routes
    $tpl = "include/templates/";
    $css = "layout/css/";
    $js = "layout/js/";
    $lang = "include/languages/";

    //Include the important files
    include $lang . "english.php"; //Language File
    include $tpl . "header.php"; // include header layout

    //Include navbar on all pages except with noNavBar variable
    if(!isset($noNavBar))
    {
        include $tpl ."navbar.php";
    }