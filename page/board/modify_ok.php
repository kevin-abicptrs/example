<?php
include $_SERVER['DOCUMENT_ROOT']."/example/db.php";

$bno = $_GET['idx'];
$username = $_POST['name'];
$title = $_POST['title'];
$content = $_POST['content'];
$sql = mq("update board set name='".$username."',title='".$title."',content='".$content."' where idx='".$bno."'"); ?>

<script type="text/javascript">alert("수정되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/example/page/board/read.php?idx=<?php echo $bno; ?>">