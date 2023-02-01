<?php
    session_start();
    if(isset($_SESSION['username']))
    {
        include "init.php";
        echo 'Welcome : ' . ucfirst($_SESSION['username']);
        include $tpl . "footer.php";
    }
    else
    {
        header('location: index.php');
        exit();
    }