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
            <h2 class="py-4">{{$comic['title']}}</h2>

            {{-- Sezione disponibilità e prezzo --}}
            <div class="d-flex">
                {{-- Colonna sinistra --}}
                <div class="bg-success d-flex align-items-center col-8">
                    <div class="col-6 ">
                        <span class="px-3">U.S. Price: <span class="text-white">{{ $comic['price'] }}</span></span>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <span class="px-3">AVAILABLE</span>
                    </div>
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
        <div class="col-4 py-5">
            <div class="text-end fw-bold text-secondary">ADVERTISEMENT</div>
            <img class="w-100" src="{{ Vite::asset('/public/img/adv.jpg') }}" alt="">
        </div>
    </div>
</div>

{{-- Sezione banner proprietà del comic --}}
<div class="my_bg_gray">
    <div class="container">
        <div class="row">
            <div class="col-6 py-4">
                <div class="col-12 py-3">
                    <h4>Talent</h4>
                </div>
                <div class="col-12 d-flex ">
                    <div class="col-12 d-flex border border-secondary border-start-0 border-end-0">
                        <div class="col-3">
                            <p class="">Art by:</p>
                        </div>
                        <div class="col-9">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates rem quis vitae soluta enim?</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex ">
                    <div class="col-12 d-flex border border-secondary border-top-0 border-start-0 border-end-0">
                        <div class="col-3">
                            <p class="">Art by:</p>
                        </div>
                        <div class="col-9">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates rem quis vitae soluta enim?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 py-4">
                <div class="col-12 py-3">
                    <h4>Specs</h4>
                </div>
                <div class="col-12 d-flex ">
                    <div class="col-12 d-flex border border-secondary border-start-0 border-end-0">
                        <div class="col-3">
                            <p class="">Series:</p>
                        </div>
                        <div class="col-9">
                            <p>{{$comic['series']}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex ">
                    <div class="col-12 d-flex border border-secondary border-top-0 border-start-0 border-end-0">
                        <div class="col-3">
                            <p class="">U.S Price:</p>
                        </div>
                        <div class="col-9">
                            <p>{{$comic['price']}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex ">
                    <div class="col-12 d-flex border border-secondary border-top-0 border-start-0 border-end-0">
                        <div class="col-3">
                            <p class="">On Sale Date:</p>
                        </div>
                        <div class="col-9">
                            <p>{{$comic['sale_date']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection