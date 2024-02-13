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
    <div class="row text-white">

        {{-- Sezione sinistra --}}
        <div class="col-12">

            {{-- Immagine  --}}
            <div class="img-container">
                <img class="img-fluid" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
            </div>
        </div>

        <div class="col-8">
            {{-- Titolo del comics --}}
            <h2 class="">{{$comic['title']}}</h2>

            {{-- Sezione disponibilità e prezzo --}}
            <div class="d-flex">
                {{-- Colonna sinistra --}}
                <div class="bg-success col-8 d-flex py-3">
                    <span class="px-5">U.S. Price: <span class="text-white">{{ $comic['price'] }}</span></span>
                    <span class="px-5">AVAILABLE</span>
                </div>
                {{-- Colonna destra --}}
                <div class="bg-success col-4 d-flex justify-content-end py-3 border-start border-black">
                    <div class="">
                        <span class="px-2">Check Availability &#9662</span>
                    </div>
                </div>
            </div>

            {{-- Sezione descrizione --}}
            <div class="py-4">
                <p>{{ $comic['description'] }}</p>
            </div>
        </div>

        {{-- Sezione advertisement --}}
        <div class="col-4">
            <div class="text-end fw-bold text-secondary">ADVERTISEMENT</div>
            <img class="w-100" src="{{ Vite::asset('/public/img/adv.jpg') }}" alt="">
        </div>
    </div>
</div>
@endsection