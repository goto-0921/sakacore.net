<!DOCTYPE html>
<html lang="ja">

<?php include('inc/head.php'); ?>
<body>
    <div id="particles-js"></div>

    <div id="wrapper">
        <?php include('inc/header.php'); ?>

        <div class="mx-auto mt-5" style="max-width: 1024px;">
            <p class="h3 pb-2 mx-3 mb-5 text-white border-bottom border-white title">お問い合わせ<span class="ms-2">Contact</span></p>

            <div class="mx-auto text-center" style="max-width: 624px;">
                <a href="mailto:sui.nano0921@gmail.com" class="btn btn-border">メールでお問い合わせ</a>
            </div>
        </div>

        <style>
            p.title span { font-size: 16px; }

            button.btn { border-radius: initial; }

            a.btn-border {
                border: 2px solid #000;
                background: #fff;
                border-radius: 100px;
                padding: 15px 30px;
                display: inline-block;
            }

            a.btn-border:hover {
                background: #fff;
            }
        </style>
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