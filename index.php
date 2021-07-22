<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <!-- <title>?php bloginfo('name'); wp_title('|', true, 'left'); ?></title> -->
    <meta name="description" content="ディスクリプションを入力">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="?php echo get_template_directory_uri(); ?>/css/common.css">
    <link rel="stylesheet" href="?php echo get_template_directory_uri(); ?>/css/header.css">
    <link rel="stylesheet" href="?php echo get_template_directory_uri(); ?>/css/footer.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- ?php wp_head(); ?> -->
    <!-- <style>
        header{
            background-image: url("?php  echo get_template_directory_uri(); ?>/img/header/top.jpg");
        }
    </style> -->
</head>
<body>
    <!-- ?php wp_footer(); ?> -->
    <header>
        <div id="menu">
            <div>London Cupcakes</div>
        </div>
        <div id="ham-pc">
            <span></span>
            <span></span>
            <span></span>
            <p id="ham_font">MENU</p>
        </div>
        <div id="top">
            <!-- <img src="?php  echo get_template_directory_uri(); ?>/img/header/logo.png" alt="logo"> -->
            <img src="img/header/logo.png" alt="logo">
            <p class="london">London Cupcakes</p>
            <div class="london_01">
                <p>カップケーキ&オリジナルケーキ専門店</p>
                <p>London Cupcakesは、<br class="sp">バタークリームを使用した<br>
                カップケーキ&オリジナルケーキの専門店です。<br>
                見た目も可愛く日本のみなさまにも食べやすい<br class="sp">テイストに仕上げております。<br>
                日本に居ながらイギリスを感じられるこの<br class="sp">London Cupcakesのケーキを<br>
                皆様に楽しんでいただけたらと思います。</p>
            </div>
        </div>
        <div id="ham">
            <div id="ham-menu">
                <div class="ham-menu-01">
                    <div>CUPCAKES</div>
                    <a href="#cupcakes">定番のカップケーキ ></a>
                </div>
                <div class="ham-menu-01">
                    <div>SEASONABLE</div>
                    <a href="#seasonable">季節のカップケーキ ></a>
                </div>
                <div class="ham-menu-01">
                    <div>CELEBRATION</div>
                    <a href="#celebration">お祝いのカップケーキ ></a>
                </div>
                <div class="ham-menu-01">
                    <div>ORIGINAL</div>
                    <a href="#original">オリジナルカップケーキ ></a>
                </div>
                <div class="ham-menu-01">
                    <div>BIRTHDAY</div>
                    <a href="#birthday">誕生日のカップケーキ ></a>
                </div>
                <div class="ham-menu-02">
                    <div class="ham-menu-21">
                        <div>WHOLE CAKE</div>
                        <a href="#wholecake">ホールカップケーキ ></a>
                    </div>
                    <div class="ham-menu-22">
                        <div class="ham-menu-221">
                            <div>　・Semi-Order</div>
                            <a href="#semi-order">ホールケーキのセミオーダー ></a>
                        </div>
                        <div class="ham-menu-221">
                            <div>　・Season Whole Cake</div>
                            <a href="#season-wholecake">季節のホールケーキのセミオーダー ></a>
                        </div>
                        <div class="ham-menu-221">
                            <div>　・Full-Order</div>
                            <a href="#full-order">ホールケーキのフルオーダー ></a>
                        </div>
                        <div class="ham-menu-221">
                            <div>　・Full-Order Sample</div>
                            <a href="#sample">ホールケーキフルオーダーサンプル ></a>
                        </div>
                    </div>
                </div>
                <div class="ham-menu-01">
                    <div>Ice Cup Cake</div>
                    <a href="#frozen-cake">アイスカップケーキ ></a>
                </div>
                <div class="ham-menu-01 border-none">
                    <div>HOW TO ORDER</div>
                    <a href="#howto-order">オーダーの仕方 ></a>
                </div>
                <a href="#"><img src="img\insta.png"></a>
            </div>
            <div class="ham-menu-bottom">
                <div>London Cupcakes</div>
            </div>
        </div>
    </header>
    <div id="badge">
        <!-- <img src="?php  echo get_template_directory_uri(); ?>/img/header/line.png" alt="logo">
        <img src="?php  echo get_template_directory_uri(); ?>/img/header/christmas.png" alt="logo">
        <img src="?php  echo get_template_directory_uri(); ?>/img/header/order.png" alt="logo"> -->
        <img src="img/header/t-line.png" alt="logo">
        <img src="img/header/t-christmas.png" alt="logo">
        <img src="img/header/t-order.png" alt="logo">
    </div>
    <div id="badge-sp">
        <div id="badge-sp-01">
            <div><img src="img/header/t-line-sp.png" alt="logo"></div>
            <div><img src="img/header/t-order-sp.png" alt="logo"></div>
        </div>
        <div id="badge-sp-02">
            <div><img src="img/header/t-christmas-sp.png" alt="logo"></div>
        </div>
    </div>
    <div id="news">
        <div class="news-01">
            <p>NEWS</p>
            <p>新着情報</p>
        </div>
        <div class="news-02">
            <p>ここにタイトルが入ります。ここにタイトルが入ります。</p>
            <p>ここにタイトルが入ります。ここにタイトルが入ります。</p>
            <p>ここにタイトルが入ります。ここにタイトルが入ります。</p>
        </div>
    </div>
    <main>
        <section id="cupcakes">
            <div class="section-margin">
                <div class="section-title">
                    <img src="img/t-cupcakes.png" alt="seasonable">
                </div>
                <div class="cupcake-groups">
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/cupcakes_DoubleVanilla.jpg">
                            </div>
                            <div class="cupcake-name">
                                Double vanilla
                            </div>
                            <div class="cupcake-name-kana">
                                ダブルバニラ
                            </div>
                            <div class="cupcake-price">
                                ¥340
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/cupcakes__VanillaStrawberry.jpg">
                            </div>
                            <div class="cupcake-name">
                                Vanilla Strawberry
                            </div>
                            <div class="cupcake-name-kana">
                                バニラストロベリー
                            </div>
                            <div class="cupcake-price">
                                ¥360
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/cupcakes_SaltedCaramel.jpg">
                            </div>
                            <div class="cupcake-name">
                                Salt Caramel
                            </div>
                            <div class="cupcake-name-kana">
                                ソルトキャラメル
                            </div>
                            <div class="cupcake-price">
                                ¥380
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/cupcakes_ChocoOreo.jpg">
                            </div>
                            <div class="cupcake-name">
                                Choco Oreo
                            </div>
                            <div class="cupcake-name-kana">
                                チョコオレオ
                            </div>
                            <div class="cupcake-price">
                                ¥380
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/cupcakes_VanillaLemon.jpg">
                            </div>
                            <div class="cupcake-name">
                                Vanilla Lemon
                            </div>
                            <div class="cupcake-name-kana">
                                バニラレモン
                            </div>
                            <div class="cupcake-price">
                                ¥370
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/cupcakes_ChocoRaspberry.jpg">
                            </div>
                            <div class="cupcake-name">
                                Choco Raspberry
                            </div>
                            <div class="cupcake-name-kana">
                                チョコラズベリー
                            </div>
                            <div class="cupcake-price">
                                ¥360
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/cupcakes_Doublechocolate.png">
                            </div>
                            <div class="cupcake-name">
                                Double Choco
                            </div>
                            <div class="cupcake-name-kana">
                                ダブルチョコ
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/cupcakes_ChocoVanilla.jpg">
                            </div>
                            <div class="cupcake-name">
                                Choco Vanilla
                            </div>
                            <div class="cupcake-name-kana">
                                チョコバニラ
                            </div>
                            <div class="cupcake-price">
                                ¥350
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/cupcakes_chocoStrawberry.jpg">
                            </div>
                            <div class="cupcake-name">
                                choco Strawberry
                            </div>
                            <div class="cupcake-name-kana">
                                チョコストロベリー
                            </div>
                            <div class="cupcake-price">
                                ¥350
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/cupcakes_RedVelvet.jpg">
                            </div>
                            <div class="cupcake-name">
                                Red Velvet
                            </div>
                            <div class="cupcake-name-kana">
                                レッドベルベット
                            </div>
                            <div class="cupcake-price">
                                ¥380
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="seasonable">
            <div class="section-margin">
                <div class="section-title">
                    <img src="img\t-seasonable.png" alt="seasonable">
                </div>
                <div class="season" style="background-color: #FC9FAF;">
                    <img src="img/spring.png"><span>SPRING</span>
                </div>
                <div class="cupcake-groups">
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_MachaSakura.png">
                            </div>
                            <div class="cupcake-name">
                                Macha Sakura
                            </div>
                            <div class="cupcake-name-kana">
                                まっちゃ桜
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_BunnyChoco.png">
                            </div>
                            <div class="cupcake-name">
                                Bunny Choco
                            </div>
                            <div class="cupcake-name-kana">
                                バニーチョコ
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_VanillaLavender.png">
                            </div>
                            <div class="cupcake-name">
                                Vanilla Lavender
                            </div>
                            <div class="cupcake-name-kana">
                                バニララベンダー
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_ChildrensDay.png">
                            </div>
                            <div class="cupcake-name">
                                Children's Day
                            </div>
                            <div class="cupcake-name-kana">
                                こどもの日
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_MothersDay.png">
                            </div>
                            <div class="cupcake-name">
                                Mother's Day
                            </div>
                            <div class="cupcake-name-kana">
                                母の日
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-spring-pc hide-pc">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_AjisaiRaspberry.png">
                            </div>
                            <div class="cupcake-name">
                                Ajisai Raspberry
                            </div>
                            <div class="cupcake-name-kana">
                                アジサイラズベリー
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-spring-pc more-spring-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_VanillaPrincess.png">
                            </div>
                            <div class="cupcake-name">
                                Vanilla Princess
                            </div>
                            <div class="cupcake-name-kana">
                                ひな祭り（バニラ）
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-spring-pc more-spring-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_LemonCrown.png">
                            </div>
                            <div class="cupcake-name">
                                Lemon Crown
                            </div>
                            <div class="cupcake-name-kana">
                                ひな祭り（レモン）
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-spring-pc more-spring-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_CarrotVanilla.jpg">
                            </div>
                            <div class="cupcake-name">
                                Carrot Vanilla
                            </div>
                            <div class="cupcake-name-kana">
                                キャロットバニラ
                            </div>
                            <div class="cupcake-price">
                                ¥380
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-spring-pc more-spring-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_BunnyBanana.png">
                            </div>
                            <div class="cupcake-name">
                                Bunny Banana
                            </div>
                            <div class="cupcake-name-kana">
                                バニーバナナ
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-spring-pc more-spring-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_SuperDad.png">
                            </div>
                            <div class="cupcake-name">
                                Super Dad
                            </div>
                            <div class="cupcake-name-kana">
                                スーパーダッド
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-spring-pc more-spring-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_ChocoEgg.png">
                            </div>
                            <div class="cupcake-name">
                                Choco Egg
                            </div>
                            <div class="cupcake-name-kana">
                                チョコエッグ
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-spring-pc more-spring-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_Hinamatsuri.png">
                            </div>
                            <div class="cupcake-name">
                                Hina matsuri
                            </div>
                            <div class="cupcake-name-kana">
                                ひな祭り（抹茶）
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                </div>
                <div id="more-spring-btn" class="more-btn">
                    <img src="img/more.png">
                </div>
                <div id="close-spring-btn" class="more-btn hide-pc hide-sp">
                    <img src="img/close.png">
                </div>
                <div class="season" style="background-color: #A7DD62;">
                    <img src="img/summer.png"><span>SUMMER</span>
                </div>
                <div class="cupcake-groups">
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_VanillaShortbread.png">
                            </div>
                            <div class="cupcake-name">
                                Vanilla Shortbread
                            </div>
                            <div class="cupcake-name-kana">
                                バニラショートブレッド
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_ChocoMint.png">
                            </div>
                            <div class="cupcake-name">
                                Choco Mint
                            </div>
                            <div class="cupcake-name-kana">
                                チョコミント
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_CandyUnicorn.png">
                            </div>
                            <div class="cupcake-name">
                                Candy Unicorn
                            </div>
                            <div class="cupcake-name-kana">
                                キャンディユニコーン
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_BerryFlamingo.png">
                            </div>
                            <div class="cupcake-name">
                                Berry Flamingo
                            </div>
                            <div class="cupcake-name-kana">
                                ベリーフラミンゴ
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_TanabataBlueberry.png">
                            </div>
                            <div class="cupcake-name">
                                Tanabata Blueberry
                            </div>
                            <div class="cupcake-name-kana">
                                七夕
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-summer-pc hide-pc">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_VanillaRainbow.png">
                            </div>
                            <div class="cupcake-name">
                                Vanilla Rainbow
                            </div>
                            <div class="cupcake-name-kana">
                                バニラレインボー
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-summer-pc more-summer-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_TakabataStrawberry.png">
                            </div>
                            <div class="cupcake-name">
                                Tanabata Strawberry
                            </div>
                            <div class="cupcake-name-kana">
                                七夕ストロベリー
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                </div>
                <div id="more-summer-btn" class="more-btn">
                    <img src="img/more.png">
                </div>
                <div id="close-summer-btn" class="more-btn hide-pc hide-sp">
                    <img src="img/close.png">
                </div>

                <div class="season" style="background-color: #FFAB7D;">
                    <img src="img/autmun.png"><span>AUTMUN</span>
                </div>
                <div class="cupcake-groups">
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_Argray.png">
                            </div>
                            <div class="cupcake-name">
                                Earl Grey
                            </div>
                            <div class="cupcake-name-kana">
                                アールグレイ
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_WalnutsMaple.png">
                            </div>
                            <div class="cupcake-name">
                                Walnuts Maple
                            </div>
                            <div class="cupcake-name-kana">
                                ウォルナッツメープル
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_BritishCheescake.png">
                            </div>
                            <div class="cupcake-name">
                                British Cheescake
                            </div>
                            <div class="cupcake-name-kana">
                                ブリティッシュチーズケーキ
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_ApplePie.png">
                            </div>
                            <div class="cupcake-name">
                                Apple Pie
                            </div>
                            <div class="cupcake-name-kana">
                                アップルパイ
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_CafeMoca.png">
                            </div>
                            <div class="cupcake-name">
                                Cafe Mocha
                            </div>
                            <div class="cupcake-name-kana">
                                カフェモカ
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-autmun-pc hide-pc">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_CaramelCat.png">
                            </div>
                            <div class="cupcake-name">
                                Caramel Cat
                            </div>
                            <div class="cupcake-name-kana">
                                キャラメルキャット（ナッツ）
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-autmun-pc more-autmun-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_RedVelvet.png">
                            </div>
                            <div class="cupcake-name">
                                Red Velvet
                            </div>
                            <div class="cupcake-name-kana">
                                レッドベルベット
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-autmun-pc more-autmun-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_WitchLemon.png">
                            </div>
                            <div class="cupcake-name">
                                Witch Lemon
                            </div>
                            <div class="cupcake-name-kana">
                                ウィッチレモン
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-autmun-pc more-autmun-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_Oreo.png">
                            </div>
                            <div class="cupcake-name">
                                Oreo
                            </div>
                            <div class="cupcake-name-kana">
                                オレオ
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-autmun-pc more-autmun-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_ChocoVanilla.png">
                            </div>
                            <div class="cupcake-name">
                                Choco Vanilla
                            </div>
                            <div class="cupcake-name-kana">
                                チョコバニラ
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-autmun-pc more-autmun-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_CandyUnicorn02.png">
                            </div>
                            <div class="cupcake-name">
                                Candy Unicorn
                            </div>
                            <div class="cupcake-name-kana">
                                キャンディユニコーン
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                </div>
                <div id="more-autmun-btn" class="more-btn">
                    <img src="img/more.png">
                </div>
                <div id="close-autmun-btn" class="more-btn hide-pc hide-sp">
                    <img src="img/close.png">
                </div>

                <div class="season" style="background-color: #8BDCDC;">
                    <img src="img/winter.png"><span>WINTER</span>
                </div>
                <div class="cupcake-groups">
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_Baileys.png">
                            </div>
                            <div class="cupcake-name">
                                Baileys
                            </div>
                            <div class="cupcake-name-kana">
                                ベイリーズ
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_NutellaCoconuts.png">
                            </div>
                            <div class="cupcake-name">
                                Nutella Coconuts
                            </div>
                            <div class="cupcake-name-kana">
                                ヌテラココナッツ
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_Cristmas.png">
                            </div>
                            <div class="cupcake-name">
                                Cristmas
                            </div>
                            <div class="cupcake-name-kana">
                                クリスマス
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_valentine.png">
                            </div>
                            <div class="cupcake-name">
                                valentine /<br>White day
                            </div>
                            <div class="cupcake-name-kana">
                                バレンタイン
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_CaramelLips.png">
                            </div>
                            <div class="cupcake-name">
                                Caramel Lips
                            </div>
                            <div class="cupcake-name-kana">
                                キャラメルリップス
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-winter-pc hide-pc">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_NewYear.png">
                            </div>
                            <div class="cupcake-name">
                                Cafe Moca
                            </div>
                            <div class="cupcake-name-kana">
                                賀正
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-winter-pc more-winter-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_ChocoStrawberry.png">
                            </div>
                            <div class="cupcake-name">
                                Choco Strawberry
                            </div>
                            <div class="cupcake-name-kana">
                                チョコストロベリー
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-winter-pc more-winter-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_RedVelvet02.png">
                            </div>
                            <div class="cupcake-name">
                                Red Velvet
                            </div>
                            <div class="cupcake-name-kana">
                                レッドベルベット
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-winter-pc more-winter-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_ChocoVanilla.png">
                            </div>
                            <div class="cupcake-name">
                                Choco Vanilla
                            </div>
                            <div class="cupcake-name-kana">
                                チョコバニラ
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-winter-pc more-winter-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_Charot.png">
                            </div>
                            <div class="cupcake-name">
                                Charot
                            </div>
                            <div class="cupcake-name-kana">
                                キャロット
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-winter-pc more-winter-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_VanillaUnicorn.png">
                            </div>
                            <div class="cupcake-name">
                                Vanilla Unicorn
                            </div>
                            <div class="cupcake-name-kana">
                                〇〇〇〇〇
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-winter-pc more-winter-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_MachaWreath.png">
                            </div>
                            <div class="cupcake-name">
                                Macha Wreath
                            </div>
                            <div class="cupcake-name-kana">
                                リース抹茶
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-winter-pc more-winter-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_Lemon.png">
                            </div>
                            <div class="cupcake-name">
                                Lemon
                            </div>
                            <div class="cupcake-name-kana">
                                レモン
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-winter-pc more-winter-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_VanillaDeamon.png">
                            </div>
                            <div class="cupcake-name">
                                Vanilla Deamon
                            </div>
                            <div class="cupcake-name-kana">
                                青鬼
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group more-winter-pc more-winter-sp hide-pc hide-sp">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/seasonable_StrawberryDeamon.png">
                            </div>
                            <div class="cupcake-name">
                                Strawberry Deamon
                            </div>
                            <div class="cupcake-name-kana">
                                赤鬼
                            </div>
                            <div class="cupcake-price">
                                ¥390
                            </div>
                        </div>
                    </div>
                    <div id="more-winter-btn" class="more-btn">
                        <img src="img/more.png">
                    </div>
                    <div id="close-winter-btn" class="more-btn hide-pc hide-sp">
                        <img src="img/close.png">
                    </div>
                </div>
            </div>
        </section>
        <section id="birthday">
            <div class="section-margin">
                <div class="section-title">
                    <img src="img\t-birthday.png" alt="birthday">
                </div>
                <div id="birthday-groups">
                    <div id="birthday-01">
                        <div id="birthday-011">
                            <img src="img/birthday_01.png" alt="birthday_01">
                        </div>
                        <div id="birthday-012">
                            <img src="img/birthday_02.png" alt="birthday_02.png">
                            <div id="birthday-0121">
                                <h3 style="margin-bottom:0;">7個スタンドセット <span>¥2,980</span></h3>
                                <p style="margin-top:0;">当日ショーケースより<span>お好きな<br id="br_none">
                                カップケーキを</span>お選びください。<br>
                                ※HAPPY BIRTHDAYピック込み<br>
                                ※お名前、年齢は別途料金
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="birthday-02">
                        <div id="birthday-021">
                            <div id=birthday-0211>
                                <img src="img/birthday_03.png" alt="birthday_03">
                                <div id="option">
                                    <img src="img/birthday_04.png" alt="birthday_04">
                                    <div id="birthday-0212">
                                        <p><span>Option  </span>飾り付け</p>
                                        <p id="font1">
                                            ・お名前１文字　　¥30<br>
                                            ・年齢　　　　　　¥100<br>
                                            ・各種ピック　１枚¥30<br>
                                        </p>
                                        <p id="font2">
                                            ・HAPPY BIRTHDAY<br>
                                            ・ANNIVERSARY<br>
                                            ・THANK YOU<br>
                                            ・CONGRATULATIONS<br>
                                            上記4つ以外の場合はご予約ください。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="birthday-022">
                            <div><img src="img/birthday_06.png" alt="birthday_06"></div>
                            <p>
                            当日店頭よりお選びいただいたカップケーキに飾り付け致します。<br>
                            ※1 個からお買い求めいただけます。
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                </div>
            </div>
        </section>
        <section id="celebration">
            <div class="section-margin">
                <div class="section-header">
                    <div class="section-title">
                        <img src="img\t-celebration.png" alt="calebration">
                    </div>
                    <div class="attention">
                        <img src="img\yoyaku.png" alt="reservation">
                    </div>
                </div>
                <div id="celebration-groups">
                    <div id="celebration-01">
                        <img src="img\celebration_01.png" alt="celebration_02">
                    </div>
                    <div id="celebration-02">
                        <div id="celebration-021">
                            <img src="img\celebration_02.jpg" alt="celebration_02">
                            <img src="img\celebration_03.jpg" alt="celebration_03">
                            <img src="img\celebration_04.jpg" alt="celebration_04">
                        </div>
                        <div id="celebration-022">
                            <p>「おめでとう！」「これからもよろしくね！」「お疲れ様！」「頑
                                張ってね！」「お世話になりました！」お祝いのカップケーキは人生の色々な場面に活躍します
                            </p>
                            <div id="celebration-023">
                                <img src="img\celebration_pc.png" alt="celebration_pc">
                            </div>
                            <div id="celebration-hide">
                                <img src="img\celebration_sp.png" alt="celebration_sp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="original">
            <div class="section-margin">
                <div class="section-header">
                    <div class="section-title">
                        <img src="img\t-original.png" alt="original">
                    </div>
                    <div class="attention">
                        <img src="img\yoyaku.png" alt="reservation">
                        <img src="img\zenkoku.png" alt="shipping">
                    </div>
                </div>
                <div id="original-img">
                    <div id="original-top">
                        <img src="img/original_01.png" alt="original_01">
                        <img src="img/original_02.png" alt="original_02">
                        <img src="img/original_03.png" alt="original_03">
                    </div>
                    <div id="original-bottom">
                        <img src="img/original_04.png" alt="original_04">
                        <img src="img/original_05.png" alt="original_05">
                    </div>
                </div>
                <div id="original-order">
                    <div id="order-01">
                        <img src="img\e0745_1.png" alt=e0745_1.png"">
                        <div id="order-011">
                            <img src="img\original_06.png" alt="original_06">
                            <p>
                                オリジナルのカップケーキは<br>
                                ４個以上から承ります。<br>
                                ※そのうち１個をオリジナルという注文もOK!
                            </p>
                        </div>
                    </div>
                    <div class="order-btn" id="order-02">
                        <a href="#">フルオーダー表　ダウンロード</a>
                        <a href="#">冷凍発送オーダー表　ダウンロード</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="wholecake">
            <div class="section-margin">
                <div class="section-header">
                    <div class="section-title">
                        <img src="img\t-wholecake.png" alt="wholecake">
                    </div>
                    <div class="attention">
                        <img src="img\zenkoku.png" alt="reservation">
                    </div>
                </div>
                <div id="semi-order">
                    <div class="wholecake-01">
                        <div class="wholecake-011">
                            <div class="wholecake-0111">
                                <p><span class="ro-ma">Semi-Order</span><span class="kana">セミオーダー</span></p>
                                <div class="attention wholecake-attention">
                                    <img src="img\yoyaku.png" alt="reservation">
                                </div>
                            </div>
                            <p>
                                下記の１２種類のホールケーキのデザインからお選びいただくことができます。
                                １色のみの変更が可能です。（アルファベットの文字、画像【S7】の変更可。）
                                それ以外は<span id="span-color">フルオーダー</span>になります。<br>
                                ５号サイズも注文可能です。値段等はお問い合わせください。
                            </p>
                        </div>
                        <div id="wholecake-012">
                            <img src="img/wholecake-pc-font.png" alt="wholecake-pc-font">
                            <img src="img/wholecake-sp-font.png" alt="wholecake-sp-font">
                            <p>
                                バースデー以外の、アニバーサリー、ベビーシャワー、ウェディング、
                                ジェンダーリビール、ハーフバースデー等も<br>
                                フルオーダー表からご注文可能です。
                            </p>
                        </div>
                    </div>
                    <div class="order-btn wholecake-02">
                        <a href="#">セミオーダー表　ダウンロード</a>
                        <a href="#">冷凍発送オーダー表　ダウンロード</a>
                    </div>
                    <div class="cupcake-groups">
                        <div class="cupcake-group-01">
                            <div class="inner">
                                <div class="cupcake-img">
                                    <img src="img/wholecake_S1.png">
                                    <div class="order-number">
                                        <img src="img\order-number.png" alt="order-number">
                                        <p>S1</p>
                                    </div>
                                </div>
                                <div class="cupcake-name">
                                    Classic (Birthday Pink)
                                </div>
                                <div class="cupcake-name-kana">
                                    クラシックバースデー
                                </div>
                                <div class="cupcake-price">
                                    ¥4,000
                                </div>
                            </div>
                        </div>
                        <div class="cupcake-group-01">
                            <div class="inner">
                                <div class="cupcake-img">
                                    <img src="img/wholecake_S2.png">
                                    <div class="order-number">
                                        <img src="img\order-number.png" alt="order-number">
                                        <p>S2</p>
                                    </div>
                                </div>
                                <div class="cupcake-name">
                                    Big Ribbon
                                </div>
                                <div class="cupcake-name-kana">
                                    ビッグリボン
                                </div>
                                <div class="cupcake-price">
                                    ¥4,300
                                </div>
                            </div>
                        </div>
                        <div class="cupcake-group-01">
                            <div class="inner">
                                <div class="cupcake-img">
                                    <img src="img/wholecake_S3.png">
                                    <div class="order-number">
                                        <img src="img\order-number.png" alt="order-number">
                                        <p>S3</p>
                                    </div>
                                </div>
                                <div class="cupcake-name">
                                    Simple Classic
                                </div>
                                <div class="cupcake-name-kana">
                                    シンプルクラシック
                                </div>
                                <div class="cupcake-price">
                                    ¥4,000
                                </div>
                            </div>
                        </div>
                        <div class="cupcake-group-01">
                            <div class="inner">
                                <div class="cupcake-img">
                                    <img src="img/wholecake_S4.png">
                                    <div class="order-number">
                                        <img src="img\order-number.png" alt="order-number">
                                        <p>S4</p>
                                    </div>
                                </div>
                                <div class="cupcake-name">
                                    Heart
                                </div>
                                <div class="cupcake-name-kana">
                                    ハート
                                </div>
                                <div class="cupcake-price">
                                    ¥4,800
                                </div>
                            </div>
                        </div>
                        <div class="cupcake-group-01">
                            <div class="inner">
                                <div class="cupcake-img">
                                    <img src="img/wholecake_S5.png">
                                    <div class="order-number">
                                        <img src="img\order-number.png" alt="order-number">
                                        <p>S5</p>
                                    </div>
                                </div>
                                <div class="cupcake-name">
                                    Crown
                                </div>
                                <div class="cupcake-name-kana">
                                    クラウン
                                </div>
                                <div class="cupcake-price">
                                    ¥5,500
                                </div>
                            </div>
                        </div>
                        <div class="cupcake-group-01">
                            <div class="inner">
                                <div class="cupcake-img">
                                    <img src="img/wholecake_S6.png">
                                    <div class="order-number">
                                        <img src="img\order-number.png" alt="order-number">
                                        <p>S6</p>
                                    </div>
                                </div>
                                <div class="cupcake-name">
                                    Pop
                                </div>
                                <div class="cupcake-name-kana">
                                    ポップ
                                </div>
                                <div class="cupcake-price">
                                    ¥3,500
                                </div>
                            </div>
                        </div>
                        <div class="cupcake-group-01">
                            <div class="inner">
                                <div class="cupcake-img">
                                    <img src="img/wholecake_S7.png">
                                    <div class="order-number">
                                        <img src="img\order-number.png" alt="order-number">
                                        <p>S7</p>
                                    </div>
                                </div>
                                <div class="cupcake-name">
                                    Print Cake
                                </div>
                                <div class="cupcake-name-kana">
                                    プリントケーキ
                                </div>
                                <div class="cupcake-price">
                                    ¥4,500
                                </div>
                            </div>
                        </div>
                        <div class="cupcake-group-01">
                            <div class="inner">
                                <div class="cupcake-img">
                                    <img src="img/wholecake_S8.png">
                                    <div class="order-number">
                                        <img src="img\order-number.png" alt="order-number">
                                        <p>S8</p>
                                    </div>
                                </div>
                                <div class="cupcake-name">
                                    Posh
                                </div>
                                <div class="cupcake-name-kana">
                                    ポッシュ
                                </div>
                                <div class="cupcake-price">
                                    ¥4,200
                                </div>
                            </div>
                        </div>
                        <div class="cupcake-group-01">
                            <div class="inner">
                                <div class="cupcake-img">
                                    <img src="img/wholecake_S9.png">
                                    <div class="order-number">
                                        <img src="img\order-number.png" alt="order-number">
                                        <p>S9</p>
                                    </div>
                                </div>
                                <div class="cupcake-name">
                                    One Print
                                </div>
                                <div class="cupcake-name-kana">
                                    ワンプリント
                                </div>
                                <div class="cupcake-price">
                                    ¥3,900
                                </div>
                            </div>
                        </div>
                        <div class="cupcake-group-01">
                            <div class="inner">
                                <div class="cupcake-img">
                                    <img src="img/wholecake_S10.png">
                                    <div class="order-number">
                                        <img src="img\order-number.png" alt="order-number">
                                        <p>S10</p>
                                    </div>
                                </div>
                                <div class="cupcake-name">
                                    Classic
                                </div>
                                <div class="cupcake-name-kana">
                                    クラシック
                                </div>
                                <div class="cupcake-price">
                                    ¥3,500
                                </div>
                            </div>
                        </div>
                        <div class="cupcake-group-01">
                            <div class="inner">
                                <div class="cupcake-img">
                                    <img src="img/wholecake_S11.png">
                                    <div class="order-number">
                                        <img src="img\order-number.png" alt="order-number">
                                        <p>S11</p>
                                        <div id="S11-font">
                                            <p>色変更不可</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="cupcake-name">
                                    Print Cake
                                </div>
                                <div class="cupcake-name-kana">
                                    プリントケーキ
                                </div>
                                <div class="cupcake-price">
                                    ¥4,500
                                </div>
                            </div>
                        </div>
                        <div class="cupcake-group-01">
                            <div class="inner">
                                <div class="cupcake-img">
                                    <img id="S12-margin" src="img/wholecake_S12.png">
                                    <div class="order-number">
                                        <div id="ninki">
                                            <img src="img\ninki.png" alt="ninki">
                                        </div>
                                        <img src="img\order-number.png" alt="order-number">
                                        <p>S12</p>
                                    </div>
                                </div>
                                <div class="cupcake-name">
                                    Heart Ribbon
                                </div>
                                <div class="cupcake-name-kana">
                                    ハートリボン
                                </div>
                                <div class="cupcake-price">
                                    ¥4,800
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="season-wholecake">
                    <div class="wholecake-01 flex-01">
                        <div class="wholecake-011">
                            <div class="wholecake-0111">
                                <p><span class="ro-ma">Season Whole Cake</span><span id="season-wholecake-a" class="kana">期間限定ホールケーキのセミオーダー</span></p>
                                <div class="attention wholecake-attention" id="season-wholecake-attention">
                                    <img src="img\yoyaku.png" alt="reservation">
                                </div>
                            </div>
                            <div class="season-wholecake-b">
                                <p>
                                    文字が入ります。文字が入ります。文字が入ります。文字が入ります。文字が入ります。文字が入ります。文字が入ります。文字が入ります。
                                    文字が入ります。文字が入ります。文字が入ります。文字が入ります。文字が入ります。文字が入ります。文字が入ります。文字が入ります。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="order-btn wholecake-02 season-full-btn">
                        <a href="#">セミオーダー表　ダウンロード</a>
                        <a href="#">冷凍発送オーダー表　ダウンロード</a>
                    </div>
                </div>
                <div class="cupcake-groups">
                    <div class="cupcake-group-01">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/wholecake_S4.png">
                                <div class="order-number">
                                    <img src="img\season-wholecake-number.png" alt="order-number">
                                    <p>S9</p>
                                </div>
                            </div>
                            <div class="cupcake-name">
                                AAAAAA
                            </div>
                            <div class="cupcake-name-kana">
                                〇〇〇〇〇〇
                            </div>
                            <div class="cupcake-price">
                                ¥0,000
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group-01">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/wholecake_S4.png">
                                <div class="order-number">
                                    <img src="img\season-wholecake-number.png" alt="order-number">
                                    <p>S9</p>
                                </div>
                            </div>
                            <div class="cupcake-name">
                                AAAAAA
                            </div>
                            <div class="cupcake-name-kana">
                                〇〇〇〇〇〇
                            </div>
                            <div class="cupcake-price">
                                ¥0,000
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group-01">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/wholecake_S4.png">
                                <div class="order-number">
                                    <img src="img\season-wholecake-number.png" alt="order-number">
                                    <p>S9</p>
                                </div>
                            </div>
                            <div class="cupcake-name">
                                AAAAAA
                            </div>
                            <div class="cupcake-name-kana">
                                〇〇〇〇〇〇
                            </div>
                            <div class="cupcake-price">
                                ¥0,000
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group-01">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/wholecake_S4.png">
                                <div class="order-number">
                                    <img src="img\season-wholecake-number.png" alt="order-number">
                                    <p>S9</p>
                                </div>
                            </div>
                            <div class="cupcake-name">
                                AAAAAA
                            </div>
                            <div class="cupcake-name-kana">
                                〇〇〇〇〇〇
                            </div>
                            <div class="cupcake-price">
                                ¥0,000
                            </div>
                        </div>
                    </div>
                </div>
                <div id="full-order">
                    <div id="full-order-01">
                        <div class="wholecake-01 flex-01">
                            <div class="wholecake-011">
                                <div class="wholecake-0111">
                                    <p><span class="ro-ma color-pink">Full-Order</span><span class="kana">フルオーダー</span></p>
                                    <div id="full-order-attention" class="attention wholecake-attention">
                                        <img src="img\yoyaku.png" alt="reservation">
                                    </div>
                                </div>
                                <div class="season-wholecake-b">
                                    <p>
                                        世界に一つだけ！ご自分だけのフルオーダーケーキです。ケーキの色やクリームの絞り方、印刷プレートなど
                                        すべてオーダーメイドでお作りします。オリジナルケーキは指定個数の枠がありますので、お早めにご連絡ください。
                                    </p>
                                    <p class="color-pink">
                                        １週間までに、デザインの確定が必要です。<br>
                                        ご予約確定後のキャンセル、デザインの変更はできかねます。（キャンセル等別途発生します。）
                                        予めご了承ください。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="full-order11" class="order-btn wholecake-02 season-full-btn">
                            <a href="#">フルオーダー表　ダウンロード</a>
                            <a href="#">冷凍発送オーダー表　ダウンロード</a>
                        </div>
                    </div>
                    <div id="full-order-02">
                        <img src="img\fullorder_01.jpg" alt="fullorder_01">
                    </div>
                </div>
                <div id="sample">
                    <div class="wholecake-01 flex-01">
                        <div class="wholecake-011">
                            <div class="wholecake-0111">
                                <p><span class="ro-ma color-pink">Sample</span><span class="kana">人気商品のサンプル</span></p>
                                <div id="sample-attention" class="attention wholecake-attention">
                                    <img src="img\yoyaku.png" alt="reservation">
                                </div>
                            </div>
                            <div class="season-wholecake-b">
                                <p>
                                    フルオーダー表からご注文、ご予約ください。<br>
                                    全てフルオーダーになりますが、見本としてご参照ください。印刷するキャラクターや色なども変更が可能です。<br>
                                    フルオーダー表からご注文ください。全てフルオーダーとなります。見本としてインスタと合わせてご参照ください。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-groups">
                        <div class="sample-capcake-group">
                            <div class="cupcake-img">
                                <img src="img\sample_01.png">
                            </div>
                        </div>
                        <div class="sample-capcake-group">
                            <div class="cupcake-img">
                                <img src="img\sample_02.png">
                            </div>
                        </div>
                        <div class="sample-capcake-group">
                            <div class="cupcake-img">
                                <img src="img\sample_03.png">
                            </div>
                        </div>
                        <div class="sample-capcake-group">
                            <div class="cupcake-img">
                                <img src="img\sample_04.png">
                            </div>
                        </div>
                        <div class="sample-capcake-group">
                            <div class="cupcake-img">
                                <img src="img\sample_05.png">
                            </div>
                        </div>
                        <div class="sample-capcake-group">
                            <div class="cupcake-img">
                                <img src="img\sample_06.png">
                            </div>
                        </div>
                        <div class="sample-capcake-group">
                            <div class="cupcake-img">
                                <img src="img\sample_07.png">
                            </div>
                        </div>
                        <div class="sample-capcake-group">
                            <div class="cupcake-img">
                                <img src="img\sample_08.png">
                            </div>
                        </div>
                        <div class="sample-capcake-group">
                            <div class="cupcake-img">
                                <img src="img\sample_09.png">
                            </div>
                        </div>
                        <div class="sample-capcake-group">
                            <div class="cupcake-img">
                                <img src="img\sample_10.png">
                            </div>
                        </div>
                        <div class="sample-capcake-group">
                            <div class="cupcake-img">
                                <img src="img\sample_11.png">
                            </div>
                        </div>
                        <div class="sample-capcake-group">
                            <div class="cupcake-img">
                                <img src="img\sample_12.png">
                            </div>
                        </div>
                        <div class="sample-capcake-group">
                            <div class="cupcake-img">
                                <img src="img\sample_13.png">
                            </div>
                        </div>
                        <div class="sample-capcake-group">
                            <div class="cupcake-img">
                                <img src="img\sample_14.png">
                            </div>
                        </div>
                        <div class="sample-capcake-group">
                            <div class="cupcake-img">
                                <img src="img\sample_15.png">
                            </div>
                        </div>
                        <div class="sample-capcake-group">
                            <div class="cupcake-img">
                                <img src="img\sample_16.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="frozen-cake">
            <div class="section-margin">
                <div class="section-header">
                    <div class="section-title">
                        <img src="img\t-frozencake.png" alt="frozencake">
                    </div>
                    <div class="attention">
                        <img src="img\zenkoku2.png" alt="reservation">
                    </div>
                </div>
                <div id="frozen-cake-01">
                    <div id="frozen-cake-011">
                        <p>
                            冷凍パックでホールケーキ、カップケーキを全国どこへでもお届けできます。大切な
                            人への贈り物にもぴったりです。<br>
                            冷凍カップケーキは下記よりお選びください。<br>
                            オリジナルをご希望の方はフルオーダーを参照ください。<br>
                        </p>
                        <div id="frozen-cake-0111">
                            <p>
                                解凍は常温解凍で3時間ほどかかります。<br>
                                １週間前までに、デザインの確定が必要です。<br>
                                ご予約確定後のキャンセル、デザインの変更はできかねます。<br>
                                （キャンセル等別途発生します。）予めご了承ください。
                            </p>
                            <p>一律<span> ¥400</span></p>
                        </div>
                    </div>
                    <div id="frozen-cake-012">
                        <img src="img\frozencake_01.jpg" alt="frozencake_01">
                    </div>
                </div>
                <div class="cupcake-groups">
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/frozencake_ChocoOreo.png">
                            </div>
                            <div class="cupcake-name">
                                Choco Oreo
                            </div>
                            <div class="cupcake-name-kana">
                                チョコオレオ
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/frozencake_ChocoVanilla.png">
                            </div>
                            <div class="cupcake-name">
                                Choco Vanilla
                            </div>
                            <div class="cupcake-name-kana">
                                チョコバニラ
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/frozencake_ChocoStrawberry.png">
                            </div>
                            <div class="cupcake-name">
                                Choco Strawberry
                            </div>
                            <div class="cupcake-name-kana">
                                チョコストロベリー
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/frozencake_VanillaStrawberry.png">
                            </div>
                            <div class="cupcake-name">
                                Vanilla Strawberry
                            </div>
                            <div class="cupcake-name-kana">
                                バニラストロベリー
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/frozencake_DoubleVanilla.png">
                            </div>
                            <div class="cupcake-name">
                                Double Vanilla
                            </div>
                            <div class="cupcake-name-kana">
                                ダブルバニラ
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/frozencake_VanillaBluebeerry.png">
                            </div>
                            <div class="cupcake-name">
                                Vanilla Bluebeerry
                            </div>
                            <div class="cupcake-name-kana">
                                バニラブルーベリー
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/frozencake_VanillaLemon.png">
                            </div>
                            <div class="cupcake-name">
                                Vanilla Lemon
                            </div>
                            <div class="cupcake-name-kana">
                                バニラレモン
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/frozencake_Caramel.png">
                            </div>
                            <div class="cupcake-name">
                                Caramel
                            </div>
                            <div class="cupcake-name-kana">
                                キャラメル
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/frozencake_RedVelvet.png">
                            </div>
                            <div class="cupcake-name">
                                Red Velvet
                            </div>
                            <div class="cupcake-name-kana">
                                レッドベルベット
                            </div>
                        </div>
                    </div>
                    <div class="cupcake-group">
                        <div class="inner">
                            <div class="cupcake-img">
                                <img src="img/frozencake_DoubleChoco.png">
                            </div>
                            <div class="cupcake-name">
                                Double Choco
                            </div>
                            <div class="cupcake-name-kana">
                                ダブルチョコ
                            </div>
                        </div>
                    </div>
                </div>
                <div id="frozen-cake-02">
                    <p>※季節によって変更することがあります。</p>
                </div>
                <div id="frozen-cake-03">
                    <div id="frozen-cake-031">
                        <img src="img\frozencake_02.png">
                        <img src="img\frozencake_03.png">
                        <p>★オリジナルケーキ・カップケーキ共に全国発送可能です。</p>
                    </div>
                    <div id="frozen-cake-032">
                        <a href="#">ホール・カップケーキ 冷凍発送オーダー表</a>
                        <p>
                            入念に梱包をしておりますが、稀に破損等が起こる
                            場合があります。お召し上がりにならずに、写真を撮って
                            ヤマト運輸と当店にご連絡ください。ご返金にてご対応致します。
                            ご了承頂ける方のみ発送いたします。
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="howto-order">
            <div class="section-margin">
                <div id="howto-order-01">
                    <div id="howto-order-11">
                        <img src="img\howto-order.png">
                    </div>
                    <div id="howto-order-12">
                        <p><span>１.</span>ご希望のケーキのオーダー表をダウンロード、印刷</p>
                        <img src="img\seasonwholecake_S9.png">
                    </div>
                </div>
                <div id="howto-order-02">
                    <div class="howto-order-21">
                        <div class="howto-order-211">
                            <a href="#">
                                ホールケーキ<br>
                                カップケーキ<br>
                                セミオーダー表<br>
                            </a>
                        </div>
                        <img src="img\uketori-green.png">
                    </div>
                    <div class="howto-order-21">
                        <div id="red" class="howto-order-211">
                            <a href="#">
                                ホールケーキ<br>
                                カップケーキ<br>
                                フルオーダー表<br>
                            </a>
                        </div>
                        <img src="img\uketori-red.png">
                    </div>
                    <div class="howto-order-21">
                        <div id="blue" class="howto-order-211">
                            <a href="#">
                                ホールケーキ<br>
                                カップケーキ<br>
                                冷凍発送オーダー表<br>
                            </a>
                        </div>
                        <img src="img\uketori-blue.png">
                    </div>
                    <div id="howto-order-24" class="howto-order-21">
                        <p>記入例</p>
                        <a href="img\t-test.png" data-lightbox="pop-up" data-title="拡大画像">
                            <img src="img\t-test.png" alt="縮小画像">
                        </a>
                    </div>
                </div>
                <div id="howto-order-03">
                    <div id="howto-order-31">
                        <p><span>２.</span>オーダー表に必要事項を記入</p>
                        <p><span>３.</span>ラインにて送信</p>
                        <p><span>４.</span>担当から折り返し</p>
                        <p><span>５.</span>オーダー完了</p>
                    </div>
                    <div id="howto-order-32">
                        <p><span>注意事項</span></p>
                        <p>当店より３日経っても折り返し<br>返答がなければもう一度ご連絡ください。</p>
                    </div>
                </div>
                <div id="howto-order-04">
                    <p>ご不明な点がございましたら、お電話にてお問い合わせください。</p>
                    <div id="howto-order-041">
                        <a href="tel:0762997012">Tel.076-299-7012</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="img1-10">
            <div class="img-01"><img src="img\img_01.png"></div>
            <div class="img-01"><img src="img\img_02.png"></div>
            <div class="img-01"><img src="img\img_03.png"></div>
            <div class="img-01"><img src="img\img_04.png"></div>
            <div class="img-01"><img src="img\img_05.png"></div>
            <div class="img-01"><img src="img\img_06.png"></div>
            <div class="img-01"><img src="img\img_07.png"></div>
            <div class="img-01"><img src="img\img_08.png"></div>
            <div id="img-09-hide" class="img-01"><img src="img\img_09.png"></div>
            <div class="img-01"><img src="img\img_10.png"></div>
        </section>
        <section id="what-cupcake">
            <div class="section-margin">
                <div id="what-cupcake-01">
                    <div id="what-cupcake-11">
                        <div id="what-cupcake-111">
                            <img src="img/what_is_cupcakes.png" alt="">
                            <p>
                                私の母国イギリスでは昔から人気の伝統的なお菓子です。<br>
                                味だけじゃなく見た目も楽しめるので、カワイイもの好きの日本人にぴったり！
                                贈り物にしてもきっと喜んでもらえると思いますよ。
                            </p>
                        </div>
                        <div id="what-cupcake-12-hide-pc">
                            <img src="img\howtoeat.JPG" alt="">
                        </div>
                        <div id="what-cupcake-112">
                            <p>How to eat</p>
                            <p>
                                ロンドンカップケーキがたくさんの人から愛されているヒミツは、ソフトでクリーミーな
                                バタークリームとスポンジのハーモニー！いちばんおいしい常温（15〜25度）で、イギリス流に
                                「手に持ってパクッ」と楽しんでくださいね。保存料未使用なので、できるだけ早め（購入した
                                翌日まで）にお召しあがりください。
                            </p>
                        </div>
                    </div>
                    <div id="what-cupcake-12">
                        <img src="img\howtoeat.JPG" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="map">
            <div class="map-01">
                <p>KANAZAWA</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d800.9399305788519!2d136.63344957000908!3d36.58400765123514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff8334be2cfda15%3A0x7f9b30145cd66fa6!2z44Ot44Oz44OJ44Oz44Kr44OD44OX44Kx44O844KtIExvbmRvbiBDdXBjYWtlcyDph5HmsqLmnKzlupc!5e0!3m2!1sja!2sjp!4v1621337121752!5m2!1sja!2sjp" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="map-01">
                <p>NAGOYA</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.5392776377153!2d136.95602236495432!3d35.16810929938361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6003707241049555%3A0xab7d257c3ba65507!2z44Ot44Oz44OJ44Oz44Kr44OD44OX44Kx44O844KtIOWQjeWPpOWxi-W6lw!5e0!3m2!1sja!2sjp!4v1621337301348!5m2!1sja!2sjp" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
    </main>
    <footer>
        <div id="footer_info">
            <div id="footer_logo">
                <!-- <img src="?php echo get_template_directory_uri(); ?>/img/footer/logo.png" alt="logo"> -->
                <img src="img/footer/t-foot.png" alt="logo">
            </div>
            <div id="addresses">
                <div class="address">
                    <div>
                        金沢本店
                    </div>
                    <div>
                        〒920-0024<br>
                        石川県金沢市西念4-2-6<br>
                        電話：076-299-7012<br>
                        営業時間：10:00-17:30<br>
                        定休日：毎週火曜／水曜<br>
                    </div>
                </div>
                <div class="address">
                    <div>
                        名古屋店
                    </div>
                    <div>
                        〒464-0055<br>
                        愛知県名古屋市千種区姫池通3-25-2<br>
                        電話：052-898-4083<br>
                        営業時間：10:00-17:30<br>
                        定休日：毎週火曜／水曜
                    </div>
                </div>
            </div>
        </div>
        <div id="footer_mail">
            mail:info@londoncupcakes.jp
        </div>
    </footer>
    <script>
    document.addEventListener('DOMContentLoaded',function() {
        document.getElementById("ham-pc").addEventListener("click", function() {
            this.classList.toggle("active");
            document.getElementById("ham_font").classList.toggle("active");
            document.getElementById("ham").classList.toggle("active");
        })
    });
    $(function() {
        $('#ham-menu a').click(function() {
            $('#ham-pc').trigger('click');
        });
    });
    </script>
    <script>
    $(function(){
        if (window.matchMedia('(max-width: 768px)').matches) {
        // スマホ
            $(function(){
                $('.hide-sp').hide();
            });
            //supring
            $('#more-spring-btn').on('click', function() {
                $('#close-spring-btn , #more-spring-btn , .more-spring-sp').fadeToggle();
            });
            $('#close-spring-btn').on('click', function() {
                $('#close-spring-btn , #more-spring-btn , .more-spring-sp').fadeToggle();
            });
            //summer
            $('#more-summer-btn').on('click', function() {
                $('#close-summer-btn , #more-summer-btn , .more-summer-sp').fadeToggle();
            });
            $('#close-summer-btn').on('click', function() {
                $('#close-summer-btn , #more-summer-btn , .more-summer-sp').fadeToggle();
            });
            //autmun
            $('#more-autmun-btn').on('click', function() {
                $('#close-autmun-btn , #more-autmun-btn , .more-autmun-sp').fadeToggle();
            });
            $('#close-autmun-btn').on('click', function() {
                $('#close-autmun-btn , #more-autmun-btn , .more-autmun-sp').fadeToggle();
            });
            //WINTER
            $('#more-winter-btn').on('click', function() {
                $('#close-winter-btn , #more-winter-btn , .more-winter-sp').fadeToggle();
            });
            $('#close-winter-btn').on('click', function() {
                $('#close-winter-btn , #more-winter-btn , .more-winter-sp').fadeToggle();
            });
        } else if (window.matchMedia('(min-width: 769px)').matches) {
            // PC
            $(function(){
                $('.hide-pc').hide();
            });
            //supring
            $('#more-spring-btn').on('click', function() {
                $('#close-spring-btn , #more-spring-btn , .more-spring-pc').fadeToggle();
            });
            $('#close-spring-btn').on('click', function() {
                $('#close-spring-btn , #more-spring-btn , .more-spring-pc').fadeToggle();
            });
            //summer
            $('#more-summer-btn').on('click', function() {
                $('#close-summer-btn , #more-summer-btn , .more-summer-pc').fadeToggle();
            });
            $('#close-summer-btn').on('click', function() {
                $('#close-summer-btn , #more-summer-btn , .more-summer-pc').fadeToggle();
            });
            //autmun
            $('#more-autmun-btn').on('click', function() {
                $('#close-autmun-btn , #more-autmun-btn , .more-autmun-pc').fadeToggle();
            });
            $('#close-autmun-btn').on('click', function() {
                $('#close-autmun-btn , #more-autmun-btn , .more-autmun-pc').fadeToggle();
            });
            //WINTER
            $('#more-winter-btn').on('click', function() {
                $('#close-winter-btn , #more-winter-btn , .more-winter-pc').fadeToggle();
            });
            $('#close-winter-btn').on('click', function() {
                $('#close-winter-btn , #more-winter-btn , .more-winter-pc').fadeToggle();
            });
        }
    });
    </script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
</body>
</html>
