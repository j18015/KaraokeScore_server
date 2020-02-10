<?php
  $date = htmlspecialchars($_POST["date"]);
  $title = htmlspecialchars($_POST["title"]);
  $singer = htmlspecialchars($_POST["singer"]);
  $score = htmlspecialchars($_POST["score"]);

  //MySQL.phpを取り込み
  include 'MySQL.php';
  //MySQLに接続
  $up = new MySQL();
  //MySQLに書き込み
  $up->add($date, $title ,$singer, $score);

  $fp = fopen("android.txt", "a");

  fwrite($fp ,"$date,$title,$singer,$score \n");
  fclose($fp);


?>
