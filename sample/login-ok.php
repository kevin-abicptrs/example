<?php
session_start();
$userId = trim($_POST['id']);
$userPw = trim($_POST['password']);
$date = date("Y-m-d H:i:s");

include $_SERVER['DOCUMENT_ROOT']."/example/db.php";

if ($result = mq("select * from login where id='".$userId."' and pw='".$userPw."'")){
    while ($row = $result->fetch_object()) {
                $Exist = "1"; 
    }
}

if ($Exist ==""){
    echo "<script>alert('로그인 정보가 다릅니다'); history.back();</script>";
    session_destroy();
    exit;
}

$mysql = mq("update login set date = '".$date."' where id='".$userId."'");

$_SESSION['userId'] = $userId;
$_SESSION['userdate'] = $date;
 
?>
<meta http-equiv='refresh' content='0;url=./admin.php'>