<?php
//�������� ���� �� ���������� �� ����������
if(isset($_POST['mess']) && $_POST['mess']!="" && $_POST['mess']!=" ")
{
    //�������� ������ ��� ������ ������ ������������
    $conn = mysql_connect('localhost', 'root', '');
    $db = mysql_select_db('medicine', $conn);
	mysql_query('SET NAMES utf-8');

    session_start();
    //��������� ���������� ���������
    $mess = $_POST['mess'];
    //���������� � ������� ������������
    $login = $_SESSION['lastname'].' '.$_SESSION['name'];

    //��������� ��� � �������
    $res = mysql_query("INSERT INTO `messages` (`login`,`message`) VALUES ('$login','$mess') ");
}
