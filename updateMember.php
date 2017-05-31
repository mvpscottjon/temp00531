<?php
session_start();
if(!isset($_SESSION['editid']) )
    header('Location:20170531_xx.php');
$id= $_SESSION['editid'];
$account = $_GET['account'];
$password = $_GET['password'];
$realname = $_GET['realname'];

$sql = "update member set account='{$account}',password='{$password}',realname='{$realname}' where id = {$id}";
$db = new mysqli('127.0.0.1','root',
    'root','iii');
$db->query($sql);

//echo 'ok';
header('Location:20170531_38.php');
