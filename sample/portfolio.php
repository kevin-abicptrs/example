<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/port.css">
    <title>portfolio</title>
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

    <main class="port_main">
    <section class="section01">
                <div class="top-po">
                <img src="./img/po/portfolio_intro_banner.png" alt="배너">
                </div>
                <div class="line-po">
                 <img src="./img/po/portfolio_banner_below.png" alt="라인">
                </div>
                <div class="blur-box1"></div>
                <div class="blur-box1"></div>
            </section>


            <?php
            $img9 = $_GET['img9'];
            
             if($img9==true){
                 echo "<div class='big-outimg'><div class='big-img'>
                       <img src='../upload/$img9'/></div></div></br>";
             }else{

             }
             
            ?>

                <div class="menu-butten">
                    <a href="http://localhost/example/sample/portfolio.php?page2=all">
                    <img src="./img/po/portfolio_all_set.png" alt="all"></a>
                    <a href="http://localhost/example/sample/portfolio.php?page2=pack">
                    <img src="./img/po/portfolio_pkg_set.png" alt="pack"></a>
                    <a href="http://localhost/example/sample/portfolio.php?page2=print">
                    <img src="./img/po/portfolio_print_set.png" alt="print"></a>
                </div>

                <div class="all-list">
                <?php   
                    $page2 = $_GET['page2'];                    
                    if($page2==true){
                        $main_page= include ''.$page2.'.php';
                        echo $main_page;
                        // include ''.$page2.'.php';
                    }else{
                        include 'all.php'; 
                    }
                ?>
                </div>
    </main>

    <footer class="footer">
        <div class="footer-line"><img src="./img/contact/contact_footer_upper.png" alt="bottom-line"></div>
        <div class="footer-img"><img src="./img/footer.png" alt="footer"></div>
    </footer>
</body>   
</html>
