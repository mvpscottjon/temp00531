<?php

//include 'sqlPdo.php';

$host = '127.0.0.1';
$db = 'iii';
$user = 'root';
$passwd = 'root';
$driver = 'mysql';
$charset = 'utf8';

$dsn = "{$driver}:host={$host};dbname={$db};charset={$charset}";

$opt = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH];




$PDO = new PDO($dsn, $user, $passwd, $opt);

//$sql = 'select * from member';

$sql = 'insert into member (account,password,realname) values(?,?,?)';

$account = 's132';
$password = 'a132';
$realname = 'AZXD';

$prepare = $PDO->prepare($sql);
$prepare->execute([$account,$password,$realname]);



//$rs = $pdo->query($sql);
//while ($row = $rs->fetchObject()){
//    echo "{$row->id}:{$row->account}<br>";
//}