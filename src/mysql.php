<?php
$mysqli = new mysqli('localhost', 'root', '', 'bbs');
if ($mysqli->connect_error){ 
    echo $mysqli->connect_error;
    exit();
} else {
    $mysqli->set_charset("utf8");
}

// ここにDB処理いろいろ書く（後述）

// DB接続を閉じる
$mysqli->close();
?>
