<?php
session_start();
include ('../config/config.php');

$_SESSION['uid'] = '';
$_SESSION['lastname'] = '';
$_SESSION['name'] = '';

if (isset($_POST['submit']))
{
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE login='$login' AND pass='$password'";
    
    $result = query($sql);
    
    if (mysql_num_rows($result) != 0) {
        $row = mysql_fetch_object($result);
        
        $_SESSION['uid'] = $row->did;
        $_SESSION['lastname'] = $row->lastname;
        $_SESSION['name'] = $row->name;
    }

header('location: ../index.php');
}