<?php
session_start(); // Start session
session_unset(); //Unset Session
session_destroy(); //Destroy Session
header('location: index.php');
