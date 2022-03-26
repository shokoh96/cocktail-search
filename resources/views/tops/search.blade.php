<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/search.css">
    <title>検索結果 - ここ酒</title>
</head>

<body>
    <div class="container">
        <header>
            ヘッダー
        </header>
        <section class="body">
            <form method="get" action="{{ route('searches.index') }}">
                <div class="search">
                    <div class="serchin">
                        <img src="/img/search-pic1.png" alt="文字装飾" class="pic1">
                        <div class="content">
                            <div class="one">
                                <label for="name">フリーワード</label>
                                <input class="free" type="text" id="name" name="name" required minlength="1"
                                    maxlength="50" size="41" placeholder="マティーニ ライム シンプル etc…">
                            </div>
                        </div>

                        <div class="two">
                            <div class="content">
                                <label for="name">お酒のベース</label>
                                <div class="select-wrap">
                                    <select name="" id="">
                                        <option value=""></option>
                                        <option value="">SELECT.01</option>
                                        <option value="">SELECT.02</option>
                                        <option value="">SELECT.03</option>
                                    </select>
                                </div>
                            </div>

                            <div class="content">
                                <label for="name">甘口-辛口</label>
                                <div class="select-wrap">
                                    <select name="" id="">
                                        <option value=""></option>
                                        <option value="">甘口</option>
                                        <option value="">中辛</option>
                                        <option value="">辛口</option>
                                    </select>
                                </div>
                            </div>

                            <div class="content">
                                <label for="name">味の特徴</label>
                                <div class="select-wrap">
                                    <select name="" id="">
                                        <option value=""></option>
                                        <option value="">SELECT.01</option>
                                        <option value="">SELECT.02</option>
                                        <option value="">SELECT.03</option>
                                    </select>
                                </div>
                            </div>
                            <img src="/img/search-pic2.png" alt="カクテルの画像" class="pic2">
                        </div>
                        <button class="button" href="#"><img src="/img/search-button.png" alt="検索ボタン"></button>
                    </div>
                </div>
            </form>
        </section>

        <div class="push"></div>

        <footer>
            フッター
        </footer>
    </div>
</body>

</html>
