<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document HP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- 背景に星座 -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/5-4/js/5-4.js"></script>
</head>

<?php
    $document_root = $_SERVER['DOCUMENT_ROOT'];
?>

<style>
    html, body { margin: 0; padding: 0; height: 100%; }
</style>

<body>
    <div id="particles-js"></div>

    <div id="wrapper">
        <header>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="#">TOP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">MYSELF</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">WORK ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT</a>
                </li>
            </ul>
        </header>

        <main></main>
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

        ul.nav a.nav-link { color: #fff; font-weight: 600; }
    </style>

    <script src="/inc/js/background.js"></script>
</body>
</html>
