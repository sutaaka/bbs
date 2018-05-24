<?php

$con = mysql_connect('127.0.0.1','root', 'pass');
if (!$con) {
  exit('データベースに接続できませんでした。');
}

$result = mysql_select_db('bbs', $con);
if (!$result) {
  exit('データベースを選択できませんでした。');
}

$result = mysql_query('SET NAMES utf8', $con);
if (!$result) {
  exit('文字コードを指定できませんでした。');
}

$comment   = $_REQUEST['comment'];
$name = $_REQUEST['name'];
$pass  = $_REQUEST['pass'];

$result = mysql_query("INSERT INTO bbs(comment, name, pass) VALUES('$comment', '$name', '$pass')", $con);
if (!$result) {
  exit('データを登録できませんでした。');
}
echo 'test';
$con = mysql_close($con);
if (!$con) {
  exit('データベースとの接続を閉じられませんでした。');
}

header( "Location:index.html" ) ;
	exit ;
?>

