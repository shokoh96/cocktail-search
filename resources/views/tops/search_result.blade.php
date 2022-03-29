<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>検索結果</title>
    <!-- リセットcss -->
    <link rel="stylesheet" href="css/reset.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- 自作css -->
    <link rel="stylesheet" href="css/search_result.css">
    <!-- webフォント -->
    <link rel="stylesheet" href="fonts/Senobi-Gothic-Medium.ttf">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7d803bff65.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header" id="page-top">
        <ul class="item">
            <li><a class="menu" href="">新規登録</a></li>
            <li><a class="menu2" href="">ログイン</a></li>
            <li><a class="menu3" href="">お酒検索</a></li>
            <li><a class="menu4" href="">記録一覧</a></li>
        </ul>
    </header>
    <main class="main">
        <div class="main-top">

        </div>
        <div class="pagination pagination-top">
            <div class="pagination-inner">
                <div class="pagination-page">
                    <strong>
                        <span>1</span>
                    </strong>
                    <a href="#">
                        <span>2</span>
                    </a>
                    <a href="#">
                        <span>3</span>
                    </a>
                    <a href="#">
                        <span>4</span>
                    </a>
                    <a href="#">
                        <span>5</span>
                    </a>
                    <span class="pagination-omission">…</span>
                </div><!-- /.pagination_page -->
                <div class="pagination-next">
                    <a href="#">
                        <span>次</span>
                        <i class="fas fa-angle-right"></i>
                    </a>
                </div><!-- /.pagination_next-->
                <div class="pagination-last">
                    <a href="#">
                        <span>最後</span>
                        <i class="fas fa-angle-double-right"></i>
                    </a>
                </div><!-- /.pagination_last -->
            </div><!-- /.pagination-inner -->
        </div><!-- /.pagination-top -->
        <div class="main-middle">

            <div class="cards">
                <div class="row">
                    @foreach ($posts as $post)
                        <a href="{{ route('searches.show', $post['cocktail_id']) }}" class="col-lg-4 col-md-6">
                            <div class="card">
                                <img src="img/Sample-img.jpg" alt="" class="card-img">
                                <div class="card-body">
                                    <h2 class="japanese">{{ $post['cocktail_name'] }}</h2>
                                    <h4 class="english">{{ $post['cocktail_name_english'] }}</h4>
                                </div><!-- /.card-body -->
                            </div><!-- /.card -->
                        </a>
                    @endforeach
                </div><!-- /.row -->
            </div><!-- /.cards -->

            <div class="pagination pagination-bottom">
                <div class="pagination-inner">
                    <div class="pagination-page">
                        <strong>
                            <span>1</span>
                        </strong>
                        <a href="#">
                            <span>2</span>
                        </a>
                        <a href="#">
                            <span>3</span>
                        </a>
                        <a href="#">
                            <span>4</span>
                        </a>
                        <a href="#">
                            <span>5</span>
                        </a>
                        <span class="pagination-omission">…</span>
                    </div><!-- /.pagination_page -->
                    <div class="pagination-next">
                        <a href="#">
                            <span>次</span>
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div><!-- /.pagination_next-->
                    <div class="pagination-last">
                        <a href="#">
                            <span>最後</span>
                            <i class="fas fa-angle-double-right"></i>
                        </a>
                    </div><!-- /.pagination_last -->
                </div><!-- /.pagination-inner -->
            </div><!-- /.pagination-bottom -->

            <!-- ページトップボタン -->
            <div class="main-bottom">
                <a href="#page-top"><img class="top-btn-img" src="img/top.png" alt=""></a>
            </div>
    </main>
    <footer class="footer">
        <h3>ここ酒</h3>
        <p>copyright &copy; 2022 the 5th class All Rights Reserved</p>
    </footer>
</body>

</html>
