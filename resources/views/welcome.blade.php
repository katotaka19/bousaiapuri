<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel システム</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                margin : 20px;
            }
            h1 {
                float:left;
                font-size:40px;
            }
            h2 {
                font-size:22px;
                color: #364e96;/*文字色*/
                border: solid 3px #364e96;/*線色*/
                padding: 0.5em;/*文字周りの余白*/
                border-radius: 0.5em;/*角丸*/
            }
            h3 {
                font-size:18px;
            }
            /*
            div.header1 {
                height:60px;
            }
            */
            div.header-right {
                float:right;
            }

            div.contents-section {
                margin-top:8px;
                margin-bottom:8px;
            }

            .cb{
                clear: both;
            }

            /* Google Mapを囲う要素 */
            .map {
                position: relative;
                width: 100%;
                height: 0;
                padding-top: 75%; /* 比率を4:3に固定 */
            }

            /* Google Mapのiframe */
            .map iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height:100%;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="header1">
            <h1>豊橋市吉田方校区の防災情報</h1>
            <div class="header-right">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ログイン済</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ログイン</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">新規登録</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>

        <br class="cb">
        <p style="color:red;">※【注意】このページはサンプルページです※</p>
        <hr class="cb">

        <div class="cb contents-section">
            <h2>区域内避難施設と避難対象</h2>
            <div class="map">
            <!-- Google Mapの共有タグを埋め込む -->
　              <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13109.460531327099!2d137.348287!3d34.7715822!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1701988816381!5m2!1sja!2sjp" 
                    width="600" 
                    height="350" 
                    style="border:0;" 
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <hr class="cb">

        <div class="contents-section">
            <h2>吉田方校区に想定される被害</h2>
            ※豊橋市防災危機管理課より、各種災害のハザードマップなど便利な情報が確認出来、皆様自身の防災活動に活用出来ます。
            　以下のリンクよりアクセス、確認が出来ます。
        </div>

        <hr class="cb">

        <div class="contents-section">
            <h2>各家庭での防災に対する備え</h2>

            <h3>(1) 建物の備え</h3>
            ※このページは準備中です。

            <br>
            <br>

            <h3>(2) 防災グッズ</h3>
            ※このページは準備中です。
        </div>

        <hr class="cb">

        <div class="contents-section">
            <h2>地域の防災取り組み紹介</h2>
            ※このページは準備中です。
        </div>
        <hr class="cb">

        <div class="contents-section">
            <h2>年間行事予定</h2>
            ※このページは準備中です。
        </div>

        <hr class="cb">

        <div class="contents-section">
            <h2>消防団の取り組み紹介</h2>
            ※このページは準備中です。
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
