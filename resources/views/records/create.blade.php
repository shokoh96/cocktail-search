<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="create.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7d803bff65.js" crossorigin="anonymous"></script>
    
    <title>新規登録</title>
</head>
<body>
    <div class="container">
        <header class="header"  id="page-top">
            <ul class="item">
                <li><a class="menu" href="">新規登録</a></li>
                <li><a class="menu2" href="">ログイン</a></li>
                <li><a class="menu3" href="">お酒検索</a></li>
                <li><a class="menu4" href="">記録一覧</a></li>
            </ul>
        </header>
        <main class="main">
            <div class="main-top">
                <h2>新規登録</h2>
                <img class="glass" src="グラス.png" alt="グラス">
            </div>
            <div class="input-form-outside">
                <div class="input-form">
                    <div class="form-top">
                        <div class="top-left">
                            <div class="top-left-container">
                                <!-- 👇ここにプレビュー画像を追加する -->
                                <div class="upload-img">
                                    <div id="preview"></div>
                                </div>
                                <label class="upload-label">
                                    写真を選ぶ
                                    <input type="file" id="example" multiple>
                                </label>
                            </div>
                        </div>
                        <div class="top-right">
                            <div class="top-right-container">
                                <div class="date">
                                    <label for="start">日付</label>
                                    <input type="date" id="today" name="date-form">
                                </div>
                                <div class="name">
                                    <label for="name">名前</label>
                                    <input type="text" class="name-form" placeholder="ジントニック">
                                </div>
                                <div class="base">
                                    <label for="base">ベース</label>
                                    <input type="text" class="base-form" placeholder="ジン">
                                </div>
                                <div class="taste">
                                    <label for="taste-form">味</label>
                                    <input type="text" class="taste-form" placeholder="中辛口">
                                </div>
                                <div class="featuru">
                                    <label for="featuru-form">特徴</label>
                                    <textarea name="example1" cols="30" rows="5" placeholder="シンプル、さっぱり（自由入力）"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-middle">
                        <div class="middle-lrft">
                            <div class="ingredient-top">
                                <h4>材料</h4>
                            </div>
                            <div class="left-increase">
                                <div class="increase">
                                    <button class="puls">+</button>
                                </div>
                                <div class="ingredient-bottom">
                                    <input type="text" class="ingredient" placeholder="ジン">
                                    <input type="text" class="ingredient2" placeholder="トニックウォーター">
                                    <input type="text" class="ingredient3" placeholder="ライム">
                                </div>
                            </div>
                        </div>
                        <div class="middle-right">
                            <div class="quantity-top">
                                <h4>分量</h4>
                            </div>
                            <div class="quantity-bottom">
                                <input type="text" class="quantity"  placeholder="45ml">
                                <input type="text" class="quantity2" placeholder="FullUP">
                                <input type="text" class="quantity3" placeholder="1/6個">
                            </div>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <h4>コメント（５００文字）</h4>
                        <textarea  name="example1" cols="110" rows="10"></textarea>
                    </div>
                    <!-- 登録ボタン -->
                    <div class="register">
                        <button class="register-btn">登録する</button>
                    </div>
                </div>
            </div>
            <div class="memory">
                <a class="memory-list" href="">>> 思い出一覧に戻る</a>
            </div>
            <!-- ページトップボタン -->
            <div class="page-top-btn">
                <a href="#page-top"><img src="top.png" alt=""></a>
            </div>
        </main>
        <footer class="footer">
            <h3>ここ酒</h3>
            <p>copyright &copy; 2022 the 5th class All Rights Reserved</p>
        </footer>
    </div>
    <script src="script.js"></script>
</body>

</html>