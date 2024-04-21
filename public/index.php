<!DOCTYPE html>
<html lang="ja">

<?php include('inc/head.php'); ?>

<body>
    <div id="particles-js"></div>

    <div id="wrapper">
        <?php include('inc/header.php'); ?>

        <main>
            <div class="mx-auto mt-5" style="max-width: 960px;">
                <div class="d-md-flex justify-content-center main-top">
                    <div class="imgBox text-center">
                        <img class="img-thumbnail rounded-circle" src="/inc/img/rinchyan.jpeg" alt="rinchyan.jpeg">
                    </div>

                    <div class="profileBox mt-md-0 mt-5 mx-3">
                        <p class="h3 pb-2 mb-4 border-bottom border-white title">プロフィール / Taiki Goto <span>（1999年生まれ）</span></p>

                        <div class="h6 mb-3 headline"><i class="fa-solid fa-square"></i> 略歴</div>
                        <p class="mb-0">現職ではWebエンジニアとして、新規事業の開発やシステム運用を行なっています。</p>
                        <p class="mb-1">大学生時代にプログラミングスクールに通い始め、現在までエンジニアとしてキャリアを築いてきました。</p>
                        <p class="mb-0">これらの経験をいかし、クリエイティブの力でお客様の課題を解決するフルスタックエンジニアを目指しています。</p>

                        <div class="h6 mt-5 mb-3 headline"><i class="fa-solid fa-square"></i> 将来像</div>
                        <p class="mb-0">携わるビジネスのあるべき姿を相手と共創、そこから逆算しデザインへ昇華できるような仕事を目指しています。</p>
                        <p class="mb-0">また粘り強さと素直さをいかし、エンジニアとしてのスキルを磨き続けます。</p>

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
                    <div class="skillBox mb-3" style="background: linear-gradient(45deg, #add8e6 50%, rgb(255, 255, 255) 48%);">
                        <div class="p-4">
                            <div class="h5 mt-4 mb-3 headline">デザイン</div>

                            <p class="mb-3">「見る人にとってわかりやすい」を前提とした情報設計と、普遍的に美しいデザインスタイリングを心がけています。</p>

                            <p class="mb-3" style="color: #777777;">Webサイト / モックアップ</p>

                            <div class="d-flex flex-wrap">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40px" viewBox="0 0 32 32" fill="none"><path d="M6 28L4 3H28L26 28L16 31L6 28Z" fill="#E44D26"/><path d="M26 5H16V29.5L24 27L26 5Z" fill="#F16529"/><path d="M9.5 17.5L8.5 8H24L23.5 11H11.5L12 14.5H23L22 24L16 26L10 24L9.5 19H12.5L13 21.5L16 22.5L19 21.5L19.5 17.5H9.5Z" fill="white"/></svg>
                                </div>

                                <div>
                                    <svg width="40px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 28L4 3H28L26 28L16 31L6 28Z" fill="#1172B8"/><path d="M26 5H16V29.5L24 27L26 5Z" fill="#33AADD"/><path d="M19.5 17.5H9.5L9 14L17 11.5H9L8.5 8.5H24L23.5 12L17 14.5H23L22 24L16 26L10 24L9.5 19H12.5L13 21.5L16 22.5L19 21.5L19.5 17.5Z" fill="white"/></svg>
                                </div>

                                <div class="ms-1" style="margin-top: 3px;">
                                    <svg width="36px" viewBox="0 0 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid"><g><path d="M0,222.991225 C0,241.223474 14.7785318,256 33.0087747,256 L222.991225,256 C241.223474,256 256,241.221468 256,222.991225 L256,33.0087747 C256,14.7765263 241.221468,0 222.991225,0 L33.0087747,0 C14.7765263,0 0,14.7785318 0,33.0087747 L0,222.991225 Z" fill="#563D7C"></path><path d="M106.157563,113.238095 L106.157563,76.9845938 L138.069328,76.9845938 C141.108559,76.9845938 144.039202,77.2378593 146.861345,77.7443978 C149.683488,78.2509362 152.179961,79.1554557 154.35084,80.4579832 C156.52172,81.7605107 158.258397,83.5695496 159.560924,85.8851541 C160.863452,88.2007585 161.514706,91.1675823 161.514706,94.7857143 C161.514706,101.298352 159.560944,106.001853 155.653361,108.896359 C151.745779,111.790864 146.752832,113.238095 140.67437,113.238095 L106.157563,113.238095 L106.157563,113.238095 Z M72.07493,50.5 L72.07493,205.5 L147.186975,205.5 C154.133788,205.5 160.899594,204.631661 167.484594,202.894958 C174.069594,201.158255 179.93088,198.480877 185.068627,194.862745 C190.206375,191.244613 194.294803,186.577293 197.334034,180.860644 C200.373264,175.143996 201.892857,168.37819 201.892857,160.563025 C201.892857,150.866431 199.541107,142.581033 194.837535,135.706583 C190.133963,128.832132 183.00635,124.020088 173.454482,121.270308 C180.401295,117.941627 185.647508,113.672295 189.193277,108.462185 C192.739047,103.252075 194.511905,96.7395349 194.511905,88.9243697 C194.511905,81.6881057 193.317939,75.6097352 190.929972,70.6890756 C188.542005,65.7684161 185.177193,61.8247114 180.835434,58.8578431 C176.493676,55.8909749 171.283644,53.756309 165.205182,52.4537815 C159.12672,51.151254 152.397096,50.5 145.016106,50.5 L72.07493,50.5 L72.07493,50.5 Z M106.157563,179.015406 L106.157563,136.466387 L143.279412,136.466387 C150.660401,136.466387 156.594049,138.166883 161.080532,141.567927 C165.567016,144.968971 167.810224,150.649353 167.810224,158.609244 C167.810224,162.661552 167.122789,165.990183 165.747899,168.595238 C164.373009,171.200293 162.527789,173.262597 160.212185,174.782213 C157.89658,176.301828 155.219203,177.387252 152.179972,178.038515 C149.140741,178.689779 145.956833,179.015406 142.628151,179.015406 L106.157563,179.015406 L106.157563,179.015406 Z" fill="#FFFFFF"></path></g></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="skillBox mb-3" style="background: linear-gradient(315deg, #add8e6 50%, #ffffff 40%);">
                        <div class="p-4">
                            <div class="h5 mt-4 mb-3 headline">実装</div>

                            <p class="mb-3">SaSSでの効率的なコーデイングに努めるほか、Javascriptよりアニメーションの実装、お問い合わせフォームなどの作成も行えます。</p>

                            <p class="mb-3" style="color: #777777;">ホームページ制作 / フォーム作成 / サーバーアップロード・更新 / 独自ドメインの取得</p>

                            <div class="d-flex flex-wrap">
                                <div class="m-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" viewBox="0 0 32 32"><defs><radialGradient id="a" cx="-16.114" cy="20.532" r="18.384" gradientTransform="translate(26.52 -9.307)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffffff"/><stop offset="0.5" stop-color="#4c6b96"/><stop offset="1" stop-color="#231f20"/></radialGradient></defs><title>file_type_php</title><ellipse cx="16" cy="16" rx="14" ry="7.365" style="fill:url(#a)"/><ellipse cx="16" cy="16" rx="13.453" ry="6.818" style="fill:#6280b6"/><path d="M18.725,18.2l.667-3.434a1.752,1.752,0,0,0-.372-1.719,2.929,2.929,0,0,0-2-.525H15.867l.331-1.7a.219.219,0,0,0-.215-.26h-1.6a.219.219,0,0,0-.215.177l-.709,3.646a2.051,2.051,0,0,0-.477-1.054,2.783,2.783,0,0,0-2.2-.807H7.7a.219.219,0,0,0-.215.177l-1.434,7.38a.219.219,0,0,0,.215.26H7.869a.219.219,0,0,0,.215-.177l.347-1.785h1.2a5.167,5.167,0,0,0,1.568-.2,3.068,3.068,0,0,0,1.15-.689,3.538,3.538,0,0,0,.68-.844l-.287,1.475a.219.219,0,0,0,.215.26h1.6a.219.219,0,0,0,.215-.177l.787-4.051h1.094c.466,0,.6.093.64.133s.1.165.025.569l-.635,3.265a.219.219,0,0,0,.215.26h1.62A.219.219,0,0,0,18.725,18.2ZM11.33,15.366a1.749,1.749,0,0,1-.561,1.092,2.171,2.171,0,0,1-1.315.321H8.742l.515-2.651h.921c.677,0,.949.145,1.059.266A1.181,1.181,0,0,1,11.33,15.366Z" style="fill:#fff"/><path d="M25.546,13.332a2.783,2.783,0,0,0-2.2-.807H20.255a.219.219,0,0,0-.215.177l-1.434,7.38a.219.219,0,0,0,.215.26h1.608a.219.219,0,0,0,.215-.177l.347-1.785h1.2a5.167,5.167,0,0,0,1.568-.2,3.068,3.068,0,0,0,1.15-.689,3.425,3.425,0,0,0,1.076-1.927A2.512,2.512,0,0,0,25.546,13.332Zm-1.667,2.034a1.749,1.749,0,0,1-.561,1.092A2.171,2.171,0,0,1,22,16.778H21.29l.515-2.651h.921c.677,0,.949.145,1.059.266A1.181,1.181,0,0,1,23.879,15.366Z" style="fill:#fff"/><path d="M10.178,13.908a1.645,1.645,0,0,1,1.221.338,1.34,1.34,0,0,1,.145,1.161,1.945,1.945,0,0,1-.642,1.223A2.361,2.361,0,0,1,9.454,17H8.476l.6-3.089ZM6.261,20.124H7.869l.381-1.962H9.627a4.931,4.931,0,0,0,1.5-.191,2.84,2.84,0,0,0,1.07-.642,3.207,3.207,0,0,0,1.01-1.808,2.3,2.3,0,0,0-.385-2.044,2.568,2.568,0,0,0-2.035-.732H7.7Z" style="fill:#000004"/><path d="M14.387,10.782h1.6L15.6,12.744h1.421a2.767,2.767,0,0,1,1.85.468,1.548,1.548,0,0,1,.305,1.516l-.667,3.434H16.89l.635-3.265a.886.886,0,0,0-.08-.76,1.121,1.121,0,0,0-.8-.2H15.37l-.822,4.228h-1.6Z" style="fill:#000004"/><path d="M22.727,13.908a1.645,1.645,0,0,1,1.221.338,1.34,1.34,0,0,1,.145,1.161,1.945,1.945,0,0,1-.642,1.223A2.361,2.361,0,0,1,22,17h-.978l.6-3.089ZM18.81,20.124h1.608l.381-1.962h1.377a4.931,4.931,0,0,0,1.5-.191,2.84,2.84,0,0,0,1.07-.642,3.207,3.207,0,0,0,1.01-1.808,2.3,2.3,0,0,0-.385-2.044,2.568,2.568,0,0,0-2.035-.732H20.244Z" style="fill:#000004"/></svg>
                                </div>

                                <div class="ms-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" viewBox="0 0 256 256" version="1.1" preserveAspectRatio="xMidYMid"><g><path d="M0,0 L256,0 L256,256 L0,256 L0,0 Z" fill="#F7DF1E"></path><path d="M67.311746,213.932292 L86.902654,202.076241 C90.6821079,208.777346 94.1202286,214.447137 102.367086,214.447137 C110.272203,214.447137 115.256076,211.354819 115.256076,199.326883 L115.256076,117.528787 L139.313575,117.528787 L139.313575,199.666997 C139.313575,224.58433 124.707759,235.925943 103.3984,235.925943 C84.1532952,235.925943 72.9819429,225.958603 67.3113397,213.93026" fill="#000000"></path><path d="M152.380952,211.354413 L171.969422,200.0128 C177.125994,208.433981 183.827911,214.619835 195.684368,214.619835 C205.652521,214.619835 212.009041,209.635962 212.009041,202.762159 C212.009041,194.513676 205.479416,191.592025 194.481168,186.78207 L188.468419,184.202565 C171.111213,176.81473 159.597308,167.53534 159.597308,147.944838 C159.597308,129.901308 173.344508,116.153295 194.825752,116.153295 C210.119924,116.153295 221.117765,121.48094 229.021663,135.400432 L210.29059,147.428775 C206.166146,140.040127 201.699556,137.119289 194.826159,137.119289 C187.78047,137.119289 183.312254,141.587098 183.312254,147.428775 C183.312254,154.646349 187.78047,157.568406 198.089956,162.036622 L204.103924,164.614095 C224.553448,173.378641 236.067352,182.313448 236.067352,202.418387 C236.067352,224.071924 219.055137,235.927975 196.200432,235.927975 C173.860978,235.927975 159.425829,225.274311 152.381359,211.354413" fill="#000000"></path></g></svg>
                                </div>

                                <div class="ms-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40px" viewBox="0 0 32 32" fill="none"><circle cx="16" cy="16" r="14" fill="#0769AD"/><path d="M22.6573 13.4211C23.9143 13.4211 25.0652 13.0019 25.955 12.3066C25.0312 13.5238 23.5007 14.3196 21.7689 14.3196C18.9477 14.3196 16.6607 12.2077 16.6607 9.60256C16.6607 8.1581 17.3638 6.86527 18.4712 6C17.8901 6.76568 17.5491 7.6981 17.5491 8.70407C17.5491 11.3092 19.8361 13.4211 22.6573 13.4211Z" fill="#78CFF5"/><path d="M25.9064 16.6586C24.5512 17.7216 22.7968 18.3628 20.8805 18.3628C16.5874 18.3628 13.1071 15.1447 13.1071 11.1749C13.1071 9.63522 13.6307 8.20859 14.5221 7.03894C12.8413 8.35742 11.7745 10.3248 11.7745 12.5226C11.7745 16.4924 15.2548 19.7106 19.5479 19.7106C22.176 19.7106 24.4994 18.5047 25.9064 16.6586Z" fill="#78CFF5"/><path d="M26 20.7701C24.0689 22.6129 21.3937 23.7538 18.4375 23.7538C12.5497 23.7538 7.77678 19.2283 7.77678 13.6458C7.77678 11.8768 8.25603 10.214 9.09813 8.76767C7.18322 10.595 6 13.1125 6 15.892C6 21.4745 10.7729 26 16.6607 26C20.6827 26 24.1846 23.8881 26 20.7701Z" fill="#78CFF5"/></svg>
                                </div>

                                <div class="m-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:serif="http://www.serif.com/" width="40px" viewBox="0 0 64 64" version="1.1" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><rect id="Icons" x="-512" y="-128" width="1280" height="800" style="fill:none;"/><g id="Icons1" serif:id="Icons"><g id="Strike"></g><g id="H1"></g><g id="H2"></g><g id="H3"></g><g id="list-ul"></g><g id="hamburger-1"></g><g id="hamburger-2"></g><g id="list-ol"></g><g id="list-task"></g><g id="trash"></g><g id="vertical-menu"></g><g id="horizontal-menu"></g><g id="sidebar-2"></g><g id="Pen"></g><g id="Pen1" serif:id="Pen"></g><g id="clock"></g><g id="external-link"></g><g id="hr"></g><g id="info"></g><g id="warning"></g><g id="plus-circle"></g><g id="minus-circle"></g><g id="vue"><path d="M17.595,11.204l8.91,0l5.536,9.391l5.591,-9.391l8.831,0l-14.422,25.359l-14.446,-25.359Z" style="fill:#435466;"/><path d="M8.089,11.204l23.952,41.845l24.126,-41.845l-9.704,0l-14.422,25.359l-14.446,-25.359l-9.506,0Z" style="fill:#4dba87;"/></g><g id="cog"></g><g id="logo"></g><g id="radio-check"></g><g id="eye-slash"></g><g id="eye"></g><g id="toggle-off"></g><g id="shredder"></g><g id="spinner--loading--dots-" serif:id="spinner [loading, dots]"></g><g id="react"></g><g id="check-selected"></g><g id="turn-off"></g><g id="code-block"></g><g id="user"></g><g id="coffee-bean"></g><g id="coffee-beans"><g id="coffee-bean1" serif:id="coffee-bean"></g></g><g id="coffee-bean-filled"></g><g id="coffee-beans-filled"><g id="coffee-bean2" serif:id="coffee-bean"></g></g><g id="clipboard"></g><g id="clipboard-paste"></g><g id="clipboard-copy"></g><g id="Layer1"></g></g></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="skillBox mb-3" style="background: linear-gradient(225deg, #add8e6 50%, #ffffff 39%);">
                        <div class="p-4">
                            <div class="h5 mt-4 mb-3 headline">発揮できる特性</div>

                            <p class="mb-3">クライアント視点両面で問題を分析し、理想的な解決策に落とし込みます。ユーザー視点を重んじたデザインを心がけます。</p>
                        </div>
                    </div>
                </div>

                <style>
                    p.title { color: #add8e6; font-weight: 400; }

                    div.skillBox div.headline { font-weight: 400; }
                    div.skillBox p { font-size: 14px; }

                    @media screen and (min-width: 769px) {
                        div.skillBox { width: 308px; }
                    }
                </style>
            </div>

            <!-- <div class="mx-auto mt-5" style="max-width: 1024px;">
                <p class="h3 pb-2 mx-3 mb-4 text-white border-bottom border-white title">お問い合わせ<span class="ms-2">Contact</span></p>

                <div class="mx-auto" style="max-width: 624px;">
                    <form action="/contact" method="post">
                        <div class="mx-3 mb-3">
                            <label for="mail" class="form-label text-white">メールアドレス</label>
                            <input type="email" name="mail" class="form-control" id="mail" placeholder="name@example.com">
                        </div>

                        <div class="mx-3 mb-3">
                            <label for="name" class="form-label text-white">お名前</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="山田たろう">
                        </div>

                        <div class="mx-3 mb-3">
                            <label for="content" class="form-label text-white">お問い合わせ内容</label>
                            <textarea class="form-control" name="content" id="content" rows="5"></textarea>
                        </div>

                        <div class="text-center pt-5">
                            <button type="submit" name="submit" value="save" class="btn btn-light px-4">送信する</button>
                        </div>
                    </form>
                </div>

                <style>
                    p.title { color: #add8e6; font-weight: 400; }
                    p.title span { font-size: 16px; }
                    button.btn { border-radius: initial; }
                </style>
            </div> -->

        </main>

        <footer>
            <div class="mx-auto" style="max-width: 1024px;">
                <div class="h6 text-white pb-2 mx-3 mb-4">©︎ 2023 Taiki Goto</div>
            </div>
            <style>
                footer { padding: 30px 0; }
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
            position: relative;
            z-index: 1;
            width:100%;
            height: 100%;
        }
    </style>

    <script src="/inc/js/background.js"></script>
</body>
</html>
