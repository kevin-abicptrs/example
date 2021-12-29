<?php include  $_SERVER['DOCUMENT_ROOT']."/example/db.php"; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/coutact.css">
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
        <section class="imgs">
            <div class="coutact-banner">
                <img src="./img/contact/banner11.png" alt="banner">
            </div>
            <div class="banner-line">
                <img src="./img/contact/contact_banner_below.png" alt="line">
            </div>
            <div class="blur-box1"></div>
            <div class="call">
                <img src="./img/contact/contact_call.png" alt="call">
            </div>
            <div class="blur-box1"></div>
            <div class="lines">
                <img src="./img/contact/contact_line (1).png" alt="lines">
            </div>
            <div class="blur-box1"></div>
            <div class="qusetion">
                <img src="./img/contact/contact_questioning.png" alt="qusetion">
            </div>
            <div class="blur-box1"></div>
        </section>

            <!-- input 다시 개념 정리해서 맞추기 -->


            <form action="./mail_ok.php" method="post">
            <table class="cut">
                    <tr>
                        <td>구 분</td>
                        <td>
                            <input type="text" id="gubun" name="gubun" style="height:30px; width:20%; border: 1;">
                        </td>
                    </tr>
                    <tr>
                        <td>성 명</td>
                        <td>
                            <input type="text" id="name" name="name" style="height:30px; width:30%; border: 1;">
                        </td>
                    </tr>
                    <tr>
                        <td>전 화 번 호</td>
                        <td>
                            <input type="text" id="phone1" name="phone1" style="height:30px; width:10%; border: 1;"> -
                            <input type="text" id="phone2" name="phone2" style="height:30px; width:10%; border: 1;"> -
                            <input type="text" id="phone3" name="phone3" style="height:30px; width:10%; border: 1;">
                        </td>
                    </tr>
                    
                    <tr>
                        <td>이메일</td>
                        <td>
                            <input type="text" id="gubun" name="email" style="height:30px; width:50%; border: 1;">
                        </td>
                    </tr>
                    <tr>
                        <td>설 명</td>
                        <td>
                            <textarea class="notes" name="content" rows="17" style="width: 900px; border: px; margin-top:6px; height: 280px;"></textarea>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>파일</td>
                        <td><input type="file" ></td>
                    </tr>
            </table>
            <div class="blur-box1"></div></br>
                    <div class="ques"><button type="submit" style="border: none; background-color: white;"><img src="./img/contact/contact_ques_button.png"></button></div>
        </form>

        <div class="blur-box1"></div></br>
        <div class="bottom-line">
            <img src="./img/contact/contact_footer_upper.png" alt="bottom-line">
        </div>

    </main>

    <footer class="footer">
        <div><img src="./img/footer.png" alt="footer"></div>
    </footer>
</body>
</html>