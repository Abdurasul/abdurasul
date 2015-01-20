<?php
//Проверям есть ли переменные на добавление
if(isset($_POST['mess']) && $_POST['mess']!="" && $_POST['mess']!=" ")
{
    //Стартуем сессию для записи логина пользователя
    $conn = mysql_connect('localhost', 'root', '');
    $db = mysql_select_db('medicine', $conn);
	mysql_query('SET NAMES utf-8');

    session_start();
    //Принимаем переменную сообщения
    $mess = $_POST['mess'];
    //Переменная с логином пользователя
    $login = $_SESSION['lastname'].' '.$_SESSION['name'];

    //Добавляем все в таблицу
    $res = mysql_query("INSERT INTO `messages` (`login`,`message`) VALUES ('$login','$mess') ");
}
