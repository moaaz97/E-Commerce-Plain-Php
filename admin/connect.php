<?php 
    $dsn = 'mysql:host=localhost;dbname=shop';
    $user = 'root';
    $password = '';
    $option = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

try
{
    $connection = new PDO($dsn, $user, $password, $option);
//    echo 'You Connected Successfully!';
}
catch (PDOException $exception)
{
    echo 'Failed to Connect' . $exception->getMessage();
}