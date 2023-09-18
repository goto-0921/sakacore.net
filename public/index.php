<!DOCTYPE html>
<html lang="ja">

<?php include('inc/head.php'); ?>

<body>
    <div id="particles-js"></div>

    <div id="wrapper">
        <header>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="#">TOP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">WORK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT</a>
                </li>
            </ul>

            <style>
                ul.nav a.nav-link { color: #fff; font-weight: 600; }
            </style>
        </header>

        <main>
            <div class="mx-auto mt-5" style="max-width: 960px;">
                <div class="d-md-flex justify-content-center main-top">
                    <div class="imgBox text-center">
                        <img class="img-thumbnail rounded-circle" src="/inc/img/rinchyan.jpeg" alt="rinchyan.jpeg">
                    </div>

                    <div class="profileBox mt-md-0 mt-5 mx-3">
                        <p class="h3 pb-2 mb-4 border-bottom border-white title">プロフィール / Taiki Goto <span>（1999年生まれ）</span></p>

                        <div class="h6 mb-3 headline"><i class="fa-solid fa-square"></i> 略歴</div>
                        <p class="mb-0">現職ではシステムエンジニアとして、新規事業の開発やシステム運用を行なっています。</p>
                        <p class="mb-1">大学生時代にプログラミングスクールに通い始め、現在までエンジニアとしてキャリアを築いてきました。</p>
                        <p class="mb-0">これらの経験をいかし、クリエイティブの力でお客様の課題を解決するWebデザイナーを目指しています。</p>

                        <div class="h6 mt-5 mb-3 headline"><i class="fa-solid fa-square"></i> 将来像</div>
                        <p class="mb-0">携わるビジネスのあるべき姿を相手と共創、そこから逆算しデザインへ昇華できるデザイナーを目指しています。</p>
                        <p class="mb-0">また粘り強さと素直さをいかし、デザイナーとしてのスキルを磨き続けます。</p>

                        <div class="h6 mt-5 mb-3 headline"><i class="fa-solid fa-square"></i> 趣味</div>
                        <p class="mb-0">映画鑑賞、旅行、サッカー観戦</p>
                    </div>
                </div>

                <style>
                    @media screen and (min-width: 769px) {
                        div.main-top { margin-top: 250px; }
                        div.main-top img { width: 200px; }
                        div.imgBox { width: 40% }
                        div.profileBox { width: 60% }
                    }

                    @media screen and (max-width: 768px) {
                        div.main-top img { width: 200px; }
                    }

                    div.profileBox { color: #ffffff; }
                    div.profileBox p.title { color: #add8e6;font-weight: 400; }
                    div.profileBox p.title span { font-size: 16px; color: #fff; word-break: keep-all; }

                    div.profileBox div.headline { font-weight: 600; }
                </style>
            </div>

            <div class="mx-auto mt-5" style="max-width: 1024px;">
                <p class="h3 pb-2 mx-3 mb-4 border-bottom border-white title">スキル・特性</p>

                <div class="d-md-flex flex-wrap justify-content-between mx-3">
                    <div class="skillBox rounded-4 mb-3" style="background: linear-gradient(45deg, #add8e6 50%, rgb(255, 255, 255) 48%);">
                        <div class="p-4">
                            <div class="h6 mb-3 headline">デザイン</div>
                        </div>
                    </div>
                    <div class="skillBox rounded-4 mb-3" style="background: linear-gradient(315deg, #add8e6 50%, #ffffff 40%);">
                        <div class="p-4">
                            <div class="h6 mb-3 headline">実装</div>
                        </div>
                    </div>
                    <div class="skillBox rounded-4 mb-3" style="background: linear-gradient(225deg, #add8e6 50%, #ffffff 39%);">
                        <div class="p-4">
                            <div class="h6 mb-3 headline">発揮できる特性</div>
                        </div>
                    </div>
                </div>

                <style>
                    p.title { color: #add8e6;font-weight: 400; }

                    @media screen and (min-width: 769px) {
                        div.skillBox { width: 308px; height: 300px; }
                    }
                </style>
            </div>
        </main>

        <footer>
            <style>
                footer { padding: 30px;}
            </style>
        </footer>
    </div>

    <style>
        #particles-js{ 
            position:fixed;/*描画固定*/
            z-index:-1;/*描画を一番下に*/
            width: 100%;
            height: 100%;
            background-color: currentColor;/*背景色*/
        }

        #wrapper{
            position: relative;/*描画を#particles-jsよりも上にするためposition:relative;を指定*/
            z-index: 1;/*z-indexの数字を大きくすることで描画を#particles-jsよりも上に*/
            width:100%;
            height: 100%;
        }
    </style>

    <script src="/inc/js/background.js"></script>
</body>
</html>
