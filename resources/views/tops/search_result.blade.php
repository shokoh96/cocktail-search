<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>検索結果</title>
    <!-- リセットcss -->
    <link rel="stylesheet" href="css/reset.css">
    <!-- 自作css -->
    <link rel="stylesheet" href="css/search_result.css">
    <!-- webフォント -->
    <link rel="stylesheet" href="fonts/Senobi-Gothic-Medium.ttf">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7d803bff65.js" crossorigin="anonymous"></script>
</head>
<body>
@extends('layouts.layouts')
@section('content')
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
                <div class="card">
                    <a href="">
                        <img src="img/ジントニック.jpeg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h2 class="japanese">ジントニック</h2>
                            <h4 class="english">Gin Tonik</h4>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="">
                        <img src="img/ジントニック.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="japanese">ジントニック</h2>
                            <h4 class="english">Gin Tonik</h4>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="">
                        <img src="img/ジントニック.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="japanese">ジントニック</h2>
                            <h4 class="english">Gin Tonik</h4>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="">
                        <img src="img/ジントニック.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h2 class="japanese">ジントニック</h2>
                        <h4 class="english">Gin Tonik</h4>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="">
                        <img src="img/ジントニック.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="japanese">ジントニック</h2>
                            <h4 class="english">Gin Tonik</h4>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="">
                        <img src="img/ジントニック.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="japanese">ジントニック</h2>
                            <h4 class="english">Gin Tonik</h4>
                        </div>
                    </a>
                </div>
        </div>
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
    @endsection
</body>
</html>