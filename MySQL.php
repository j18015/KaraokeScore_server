<?php
class MySQL{
  private $host;
  private $user;
  private $pass;
  private $dbname;
  protected $mysqli;

  //コンストラクタ
  public function __construct(){
    //date_default_timezone_set('Asia/Tokyo');
    date_default_timezone_set('GMT');
    $this->host="localhost";
    $this->user="j18015";
    $this->pass="j18015";
    $this->dbname="KaraokeScore";

    $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
    $this->mysqli->set_charset("utf8");
    if($this->mysqli->connect_error){
      print("接続失敗：".$mysqli->connect_error);
      exit();
    }
  }

  function add($date, $title, $singer, $score){
    $stmt=$this->mysqli->prepare("INSERT INTO upload(date_1,title,singer,score)VALUES(?,?,?,?)");
    $stmt->bind_param('ssss',$date,$title,$singer,$score);
    $stmt->execute();
  }
}

 ?>
