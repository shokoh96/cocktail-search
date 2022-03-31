<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/layouts.css">
    <title></title>
</head>
<body>
    <header class="header"  id="page-top">
        <ul class="item">
            <li><a class="menu" href="">新規登録</a></li>
            <li><a class="menu2" href="">ログイン</a></li>
            <li><a class="menu3" href="">お酒検索</a></li>
            <li><a class="menu4" href="">記録一覧</a></li>
        </ul>
    </header>
    @yield('content')
    <footer class="footer">
        <h3>ここ酒</h3>
        <p>copyright &copy; 2022 the 5th class All Rights Reserved</p>
    </footer>
</body>

</html>