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
                <h1 class="fontTebal gradient">Our Menu</h1>
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


        <div class=" row justify-content-center sectionSpace">
            @foreach ($listMakanan as $makanan)
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-6 mb-3">
                    <div class="card  shadow-sm">
                        <img src="img\{{ $makanan['fotoMakanan'] }}" alt="..." style="width: auto; object-fit: cover;">
                        <div class="card-body">
                            <div class="p-3 row text-short-container justify-content-center">
                                <h5 class="card-title text-center cardHeadText">{{ $makanan['namaMakanan'] }}</h5>
                                <p class="card-text  text-short-container cardParagraphText">{{ $makanan['deskripsi'] }}</p>
                                <a href="detail" class="btn buttonMenu" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Detail</a>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

            
            {{-- card menu end --}}
        </div>
    </div>


    {{-- modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection
