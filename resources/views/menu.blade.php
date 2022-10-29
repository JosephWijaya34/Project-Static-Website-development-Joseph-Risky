@extends('layouts/mainlayouts')
@section('title', 'Menu')

@section('content')
    <div class="container heroSpace">
        <div class="row d-flex justify-content-center align-items-center">

            {{-- image mobile --}}
            <div id="showHeroMobile" class="col-12 col-lg-6 heroSecond text-center mb-3" style="display: none;">
                <img class="w-75 rounded-3" src="img/salmonSushiRoll.jpeg">
            </div>

            <div class="col-12 col-lg-5 background">
                <h1 class="fontTebal heroHead">Our Menu</h1>
                <p class="fontTipis heroParagraph">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis arcu et lorem
                    fermentum fermentum. Mauris non nulla posuere, tempus nisl ac, faucibus ex.
                </p>
            </div>

            {{-- image dekstop --}}
            <div id="showHeroDekstop" class="col-12 col-lg-6  text-center">
                <img class="w-75 rounded-3" src="img/salmonSushiRoll.jpeg">
            </div>

        </div>

    </div>


    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center sectionSpace">
            <h2>Menu</h2>
            <p class="w-32">mauris tristique, a molestie sem accumsan. Aenean sem neque, congue vel libero sit </p>
        </div>

        {{-- card menu start --}}
        <div class="container sectionSpace">

            <div class="row d-flex justify-content-center flex-wrap">
                @foreach ($listMakanan as $makanan)
                    <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                        <div class="card card-size">
                            <img src="img/{{$makanan['fotoMakanan']}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="p-3 row text-short-container">
                                    <h5 class="card-title">{{$makanan['namaMakanan']}}</h5>
                                    <p class="card-text  text-short-container">{{$makanan['deskripsi']}}</p>
                                    <a href="#" class="btn buttonMenu ">Detail</a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- card menu end --}}
        </div>
    </div>

@endsection
