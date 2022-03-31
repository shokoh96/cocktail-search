<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/edit.css">

    <title>編集</title>
</head>

<body>
    @extends('layouts.layouts')
    @section('content')
        <main class="main">
            <div class="main-top">
                <h2>編集</h2>
                <img class="lemon" src="img/lemon.png" alt="グラス">
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
                                    <input type="file" id="example">
                                </label>
                            </div>
                        </div>
                        <div class="top-right">
                            <div class="top-right-container">
                                <div class="date">
                                    <label for="start">日付</label>
                                    <input type="date" id="today" name="date-form" value="2022-04-02">
                                </div>
                                <div class="name">
                                    <label for="name">名前</label>
                                    <input type="text" class="name-form" value="ジントニック">
                                </div>
                                <div class="base">
                                    <label for="base">ベース</label>
                                    <input type="text" class="base-form" value="ジン">
                                </div>
                                <div class="taste">
                                    <label for="taste-form">味</label>
                                    <input type="text" class="taste-form" value="中辛口">
                                </div>
                                <div class="featuru">
                                    <label for="featuru-form">特徴</label>
                                    <textarea name="example1" cols="30" rows="5">シンプル、さっぱり</textarea>
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
                                    <input type="text" class="ingredient" value="ジン">
                                    <input type="text" class="ingredient2" value="トニックウォーター">
                                    <input type="text" class="ingredient3" value="ライム">
                                </div>
                            </div>
                        </div>
                        <div class="middle-right">
                            <div class="quantity-top">
                                <h4>分量</h4>
                            </div>
                            <div class="quantity-bottom">
                                <input type="text" class="quantity" value="45ml">
                                <input type="text" class="quantity2" value="FullUP">
                                <input type="text" class="quantity3" value="1/6個">
                            </div>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <h4>コメント（５００文字）</h4>
                        <textarea name="example1" cols="110"
                            rows="10">ジンとトニックウォーターをビルドするシンプルなレシピ。家でも簡単に作れる上、さっぱりして飲みやすい。シンプルかつスタンダードなカクテルが故にバーテンダーの腕が出やすいとされる。なお、トニックウォーターだけでは甘すぎる場合は炭酸水を半分入れたジン・ソニックというカクテルもある。</textarea>
                    </div>
                    <!-- 登録ボタン -->
                    <div class="register-derete">
                        <button class="register-btn">登録する</button>
                        <button class="derete-btn">削除する</button>
                    </div>
                </div>
            </div>
            <div class="memory">
                <a class="memory-list" href="">>> 思い出一覧に戻る</a>
            </div>
            <!-- ページトップボタン -->
            <div class="page-top-btn">
                <a href="#page-top"><img src="page_top.png" alt=""></a>
            </div>
        </main>
        <script src="js/edit.js"></script>
    @endsection
</body>

</html>
