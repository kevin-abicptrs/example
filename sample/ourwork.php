<?php include  $_SERVER['DOCUMENT_ROOT']."/example/db.php"; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/ourwork.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <nav class="nav">
                <div class="menu">
                <a href="./index.php"><img src="./img/header_logo-top.png" alt="로고"></a>
                        <a href="./about.php"><img src="./img/header_about-us.png" onmouseover="this.src='./img/header_about-us-over.png'" onmouseout="this.src='./img/header_about-us.png'"></a>
                        <a href="./ourwork.php"><img src="./img/header_our-work.png" onmouseover="this.src='./img/header_our-work-over.png'" onmouseout="this.src='./img/header_our-work.png'"></a>
                        <a href="./portfolio.php"><img src="./img/header_portfolio.png" onmouseover="this.src='./img/header_portfolio-over.png'" onmouseout="this.src='./img/header_portfolio.png'"></a>
                        <a href="./coutactus.php"><img src="./img/header_contact-us.png" onmouseover="this.src='./img/header_contact-us-over.png'" onmouseout="this.src='./img/header_contact-us.png'"></a>
                        <!-- tel 부분부터 왼쪽 -->
                        <div class="top-right">
                            <span><img src="./img/header_tel.png" alt="tel"></span>
                            <a href="http://www.goodbox.co.kr/01_main/main.php" target="_blank">
                                <img src="./img/header_goodbox.png" alt="goodbox"></a>
                            <a href="https://blog.naver.com/goodbox2015" target="_blank">
                                <img src="./img/header_blog.png" alt="blog"></a>
                        </div>
                </div>
        </nav>
    </header>

<main>
    <div class="ourwork-banner">
        <img src="./img/ourwork/our_intro_banner.png" alt="banner">
    </div>
    <div class="ourwork-top">
        <img src="./img/ourwork/our_contents01.png" alt="top">
    </div>
    <div class="blur-box1"></div>
    <div class="Consulting">
        <img src="./img/ourwork/our_contents02.png" alt="Consulting">
    </div>
    <div class="blur-box1"></div>
    <div class="structure">
        <img src="./img/ourwork/our_contents04.png" alt="structure">
    </div>
    <div class="blur-box1"></div>
    <div class="commerce">
        <img src="./img/ourwork/our_contents03.png" alt="commerce">
    </div>
    <div class="blur-box1"></div>
    <div class="ourwork-line">
        <img src="./img/ourwork/our_line.png" alt="ourwork-line">
    </div>
    <div class="blur-box1"></div>
    <div class="partner">
        <img src="./img/ourwork/our_contents05.png" alt="partner">
    </div>
    <div class="blur-box1"></div>
    <div class="footer-line">
        <img src="./img/ourwork/our_footer_upper.png" alt="footer-line">
    </div>
</main>
<footer class="footer">
    <div><img src="./img/footer.png" alt="footer"></div>
</footer>
</body>
</html>