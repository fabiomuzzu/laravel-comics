<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('partials.header')
    <main>

        {{-- Jumbotron --}}
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="btn_relative">
                            <button class="current_btn my_border my_bg">CURRENT SERIES</button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Comics section --}}
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card-container">
                        @foreach ($comics as $comic)
                        <div class="my-card">
                            <img src="{{ $comic['thumb']}}" alt="">
                            <div class="card-body">
                                {{$comic['title']}}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex justify-content-center pb-5">
                        <button class="load_btn my_border my_bg justify-content-center">LOAD MORE</button> 
                    </div>
                </div>
            </div>
        </div>

        {{-- Subscription Banner --}}
        <div class="banner">
            <div class="container">
                <ul class="list-unstyled m-0  d-flex justify-content-around  p-5 flex-wrap">
                    @foreach ($blueBanner as $item)
                        <li>
                            <img src="{{ Vite::asset($item['icon']) }}" alt="">
                            <span class="title">{{$item['title']}}</span>
                        </li>    
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
    @include('partials.footer')
</body>
</html>