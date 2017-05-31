<?php
//1.
//$db = @mysqli_connect('127.0.0.1','root',
//    'root','iii') ;


//2.
$db = @new mysqli('127.0.0.1','root',
    'root','iii');

//echo $db->error;

//add
//$sql = 'insert into member(account,password,realname)
//value("seven","123456","SevenTsai")';

//select
$sql = 'select * from member';
$result=$db->query($sql);

while($row = $result->fetch_object()){
    echo "{$row->id}.'<br>';
    {$row->account}.'<br>';
    {$row->password}.'<br>'";
}


//撈資料
//$row = $result->fetch_object();
//
//撈一筆
//    echo $row->id.'<br>';
//    echo $row->account.'<br>';
//    echo $row->password.'<br>';




