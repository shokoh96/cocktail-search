<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search_show.css') }}">

</head>
@extends('tops.search')
@section('search')

    <body>
        <div class="search-box"></div>

        <div class="guid">
            {{-- <a class="front" href="#">
            << 前へ</a> --}}
            <a href="javascript:history.back()">戻る</a>
            {{-- <a class="next" href="#">次へ >></a> --}}
        </div><!-- /.guid -->

        <div class="box">
            <div class="box2">
                <div class="container">
                    <p class="ex">{{ $posts['cocktail_digest'] }}</p>
                    <h1 class="zin">{{ $posts['cocktail_name'] }}</h1>
                    {{-- <div class="container2">
                    <div class="box3">
                        スタンダード
                    </div>
                    <div class="box4">
                        キレがある
                    </div>
                </div> --}}
                </div>

                <div class="picture-container">
                    <img class="picture" src="{{ asset('img/sample_zin_KH.jpeg') }}" alt="">

                    <div class="container3">
                        <div class="box5">Base</div>
                        <div class="box6">{{ $posts['base_name'] }}</div>
                        <div class="box7">taste</div>
                        <div class="box8">{{ $posts['taste_name'] }}</div>
                        <div class="box9">Alc.</div>
                        <div class="box10">{{ $posts['alcohol'] }}%</div>
                    </div>
                </div>

                @foreach ($posts['recipes'] as $recipe)
                    <div class="container4">
                        <div class="comp1">{{ $recipe['ingredient_name'] }}</div>
                        <div class="comp2">{{ $recipe['amount'] }}{{ $recipe['unit'] }}</div>
                    </div>
                    <hr class="hr">
                @endforeach

                <p class="ex2">{{ $posts['recipe_desc'] }}</p>

                <hr class="hr3">

                <p class="ex3">{{ $posts['cocktail_desc'] }}</p>

            </div>
            <div class="guid2">
                {{-- <div class="front">
                    << 前へ</div> --}}
                <div class="back">戻る</div>
                {{-- <div class="next">次へ >></div> --}}
            </div>
        </div>
    </body>
@endsection

</html>
