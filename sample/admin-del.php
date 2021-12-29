<?php
include $_SERVER['DOCUMENT_ROOT']."/example/db.php";

$bno = $_GET['idx'];
$sql = mq("select * from board where idx='".$bno."'");

$row = $sql->fetch_array();
$del_file="../upload/".$row['file'];

if($row['file'] == true) {

    unlink($del_file);
    $sqldel=mq("delete from board where idx='".$bno."'");

    echo "<script>alert('삭제되었습니다.');</script>";
} else {

    echo "<script>alert('다시시도하세요.');</script>";
} 
?>

<!-- <script type="text/javascript"> alert("수정되었습니다."); </script> -->
<meta http-equiv="refresh" content="0 url=./admin-sl.php">