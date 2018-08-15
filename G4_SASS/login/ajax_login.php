<?php
ob_start();
session_start();
try{
  require_once("connect_g4.php");
  $sql = "select * from member where MEM_ID = :MEM_ID and MEM_PSW = :MEM_PSW";
  $member = $pdo->prepare( $sql );
  $member->bindValue(":MEM_ID", $_REQUEST["MEM_ID"]);
  $member->bindValue(":MEM_PSW", $_REQUEST["MEM_PSW"]);
  $member->execute();
  if( $member->rowCount()==0){ //查無此人
	  echo "NG";
  }else{ //登入成功
    //自資料庫中取回資料
  	$memRow = $member->fetch(PDO::FETCH_ASSOC);
  	$_SESSION["MEM_NO"] = $memRow["MEM_NO"];
  	$_SESSION["MEM_ID"] = $memRow["MEM_ID"];
  	$_SESSION["MEM_NAME"] = $memRow["MEM_NAME"];
  	

    //送出登入者的姓名資料
    echo $memRow["MEM_NAME"];
  }
}catch(PDOException $e){
  echo $e->getMessage();
}
?>