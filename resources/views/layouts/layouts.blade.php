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
    <header class="header" id="page-top">
        <ul class="item">
            @auth
                <li>
                    <div>
                        <a href="{{ route('logout') }}" onclick="confirm('ログアウトしてもよろしいですか?'); event.preventDefault();
                                                                document.getElementById('logout-form').submit();"
                            class="menu">
                            ログアウト
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @else
                <li><a class="menu" href="{{ route('register') }}">新規登録</a></li>
                <li><a class="menu2" href="{{ route('login') }}">ログイン</a></li>
            @endauth
            <li><a class="menu3" href="search">お酒検索</a></li>
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
