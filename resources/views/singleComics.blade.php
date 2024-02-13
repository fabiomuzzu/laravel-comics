@extends('layout.app')

@section('content')

{{-- Jumbotron --}}
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-12">
                
            </div>
        </div>
    </div>
</div>

{{-- Blue banner nelle card singole --}}
<div class="banner">
    <div class="single_blueBanner">

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="img-container">
                <img class="img-fluid" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
            </div>
        </div>
        <div class="col-12">
            <h2 class="text-white ">{{$comic['title']}}</h2>
        </div>
    </div>
</div>
@endsection