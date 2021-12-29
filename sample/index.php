
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/main-banner.css">
    <script src="./js/banner.js" defer></script>
    <title>(주)씨앤알 코리아</title>
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
                            <div class="admin-button"><a href="./login.php" type="button">admin</a></div>
                        </div>
                </div>
        </nav>
    </header>

<main class="main">
        <!-- 이미지 슬라이드 부분 -->
            <section class="section1">
                <div class="outer">
                    <div class="inner-list">
                      <div class="inner">
                        <img src="./img/banner11.png" alt="11">
                      </div>
                      <div class="inner">
                        <img src="./img/banner12.png" alt="12">
                      </div>
                      <div class="inner">
                        <img src="./img/banner13.png" alt="13">
                      </div>
                    </div>
                  </div>
                  <div class="button-list" hidden>
                    <button class="button-left">← Left</button>
                    <button class="button-right">Right →</button>
                  </div>
            </section>

        <section class="section2">
            <div class="blur-box1"></div>
            <div class="pdds">

                <div class="mouse">
                    <div class="mouse-over">
                        <img src="./img/main1_plan.png"
                        onmouseover="this.src='./img/main1_plan_over.png'"
                        onmouseout="this.src='./img/main1_plan.png'">
                    </div>
                    <div class="mouse-over">
                        <img src="./img/main1_deliv.png"
                        onmouseover="this.src='./img/main1_deliv_over.png'"
                        onmouseout="this.src='./img/main1_deliv.png'">
                    </div>
                    <div class="mouse-over">
                        <img src="./img/main1_design.png"
                        onmouseover="this.src='./img/main1_design_over.png'"
                        onmouseout="this.src='./img/main1_design.png'">
                    </div>
                    <div class="mouse-over">
                        <img src="./img/main1_struct.png"
                        onmouseover="this.src='./img/main1_struct_over.png'"
                        onmouseout="this.src='./img/main1_struct.png'">
                    </div>
                </div>

            </div>
            <div class="blur-box1"></div>
            <div class="line-image"><img src="./img/main2_line.png" alt=""></div>
            <div class="blur-box1"></div>
        </section>

<section class="section3">
            <div class="about">
                <img src="./img/main2_contents2.png" alt="about">
            </div>
            <div class="button">
                <a href="./ourwork.php" type="button">
                    <img src="http://xn--299a171cge11q.com/resources/midder_main/main_contents2_link.png" alt="button">
                </a>
            </div>
</section>

<section class="section4">
    <div class="blur-box1"></div>
    <div class="service"><img src="./img/main2_contents3.png" alt="service"></div>
    <div class="blur-box1"></div>
    <div class="map"><img src="./img/main2_contents4.png" alt="map"></div>
</section>
</main>

<footer class="footer">
    <div><img src="./img/footer.png" alt="footer"></div>
</footer>

</body>
</html>