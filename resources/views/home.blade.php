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
        <div class="jumbotron">
            <div class="container">
                <div class="btn_relative">
                    <button class="current_btn my_border my_bg">CURRENT SERIES</button> 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card-container">
                <SingleComic v-for="comic, index in comics" :key="index" :fumetto="comic"/>
            </div>
        </div>
    </main>
</body>
</html>