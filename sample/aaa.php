<div class="row">
        <div class="col-lg-6">
            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><?php echo $board['title']; ?></h6></div>
            <!-- Card Body -->
            <div class="card-body">
                <div><?php echo $board['name']; ?></div>
                <div><?php echo nl2br("$board[content]"); ?></div>
                <div> 파일 : <a href="../upload/<?php echo $board['file'];?>" download><?php echo $board['file']; ?></a></div>
                	<!-- 목록, 수정, 삭제 -->
                    <div id="bo_ser">
		                 <ul>
			                <li><a href="./admin-sl.php">[목록으로]</a></li>
			                <li><a href="admin-modify.php?idx=<?php echo $board['idx']; ?>">[수정]</a></li>
			                <li><a href="admin-delete.php?idx=<?php echo $board['idx']; ?>">[삭제]</a></li>
		                 </ul>
	                </div>
            </div>
        </div>
    </div>


    <?php
		$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
		$hit = mysqli_fetch_array(mq("select * from board where idx ='".$bno."'"));
		$sql = mq("select * from board where idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$board = $sql->fetch_array();
	?>







<!--- 게시글 수정 -->

<?php
	include $_SERVER['DOCUMENT_ROOT']."/example/db.php";
   
	$bno = $_GET['idx'];
	$sql = mq("select * from board where idx='$bno';");
	$board = $sql->fetch_array();
 ?>


<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>
<link rel="stylesheet" href="./write.css" />
</head>
<body>
    <div id="board_write">
        <h1><a href="/">Portfolio</a></h1>
        <h4>글을 수정합니다.</h4>
            <div id="write_area">
                <form action="admin-modify-ok.php?idx=<?php echo $bno; ?>" method="post" enctype="multipart/form-data">
                <div id="in_title">
                        <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required><?php echo $board['title']; ?></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_name">
                        <textarea name="name" id="uname" rows="1" cols="55" placeholder="글쓴이" maxlength="100" required><?php echo $board['name']; ?></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_content">
                        <textarea name="content" id="ucontent" placeholder="내용" required><?php echo $board['content']; ?></textarea>
                    </div>
                    <div id="in_file">
                      <input type="file" name="b_file" value="1" />
                    </div>
                    <div class="bt_se">

                    <div style="padding-left:30px;">
                     <label>
                    <input type="checkbox" name="check" class="chk" value="pak">
                    <span class="label label-info"><small>pak</small></span>
                      </label>

                       <label>
                    <input type="checkbox" name="check" class="chk" value="print">
                    <span class="label label-info"><small>print</small></span>
                      </label>

                        <button type="submit">글 작성</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>




