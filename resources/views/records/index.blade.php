<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>記録一覧</title>
    <!-- リセットCSS -->
    <link rel="stylesheet" href="reset.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- 自作CSS -->
    {{-- <link rel="stylesheet" href="css/index.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/fb677ce336.js" crossorigin="anonymous"></script>
</head>

@extends('layouts.layouts')
@section('content')

    <body>
        <div class="container-bg">
            <div class="container">
                <main>
                    <div class="main-top">
                        <div class="main-top-left">
                            <h1>出会ったお酒たち。</h1>
                        </div><!-- /.main-top-left -->
                        <div class="main-top-right">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <div class="container-fluid">
                                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('records.create') }}"><img
                                                        src="img/record-list_btn1-1600.jpg" alt="思い出登録"></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><img src="img/record-list_btn2-1600.jpg"
                                                        alt="並べ替え"></a>
                                            </li>
                                        </ul>
                                        <div class="memory-count">
                                            <p>思い出保存数 46</p>
                                        </div><!-- /.memory-count -->
                                        <form class="d-flex search-box">
                                            <input class="form-control fas" type="search" placeholder="&#xf002; 思い出を検索"
                                                aria-label="Search">
                                            <button class="btn btn-outline-success" type="submit"
                                                style="display: none;"></button>
                                        </form>
                                    </div><!-- /.collapse /.navbar-collapse -->
                                </div><!-- /.container-fluid -->
                            </nav>
                        </div><!-- /.main-top-right -->
                    </div><!-- /.main-top -->
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


                    <div class="cards">
                        <div class="row">
                            @foreach ($records as $record)
                                <a href="{{ route('records.show', $record->id) }}" class="col-lg-3 col-md-6">
                                    <div class="card">
                                        {{-- <img src="{{ $record->image }}" alt="" class="card-img"> --}}
                                        <img src="{{ asset('img/Sample-img.jpg') }}" alt="" class="card-img">
                                        <div class="card-body">
                                            <p class="card-title">{{ $record->name }}</p>
                                            <p class="card-date">{{ $record->created_at }}</p>
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
                    <div class="page-top-btn">
                        <a href="#page-top"><i class="fas fa-angle-up"></i></a>
                    </div><!-- /.page-top -->
                </main>
            </div><!-- /.container -->
        </div><!-- /.container-bg -->
    </body>
@endsection

</html>
