@extends('layouts/mainlayouts')
@section('title', 'Home')

@section('hero')
    <div class="container heroSpace">
        <div class="row d-flex justify-content-center align-items-center">

            {{-- image mobile --}}
            <div id="showHeroMobile" class="col-12 col-lg-6 heroSecond text-center mb-4" style="display: none;">
                <img class="w-75 rounded-3" src="img/salmonSushiRoll.jpeg">
            </div>

            <div class="col-12 col-lg-5 background">
                <h1 class="fontTebal heroHead ">Always Give Priority To Taste & Quality </h1>
                <p class="fontTipis heroParagraph">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis arcu et lorem
                    fermentum fermentum. Mauris non nulla posuere, tempus nisl ac, faucibus ex.
                </p>
                <div class="btn btn-merah">Hubungi Kami</div>
            </div>

            {{-- image dekstop --}}
            <div id="showHeroDekstop" class="col-12 col-lg-6  text-center">
                <img class="w-75 rounded-3" src="img/salmonSushiRoll.jpeg">
            </div>

        </div>

    </div>
@endsection
@section('content')
    {{-- About Us Section Start --}}
    <div class="container">
        <div class="sectionSpace">
            <h5 class="fontTebal gradient">
                ABOUT US
            </h5>
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-12 col-lg-5 about-first">
                    <h3 class="fontTebal">TEXT 1</h3>
                    <p class="fontTipis ">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis arcu et lorem
                        fermentum fermentum. Mauris non nulla posuere, tempus nisl ac, faucibus ex.
                    </p>
                </div>

                <div class="col-12 col-lg-5 about-second">
                    <h3 class="fontTebal">TEXT 2</h3>
                    <p class="fontTipis ">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis arcu et lorem
                        fermentum fermentum. Mauris non nulla posuere, tempus nisl ac, faucibus ex.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- About Us Section End --}}

    {{-- Section Service Start --}}
    <div class=" sectionSpace backgroundService">
        <div class="container">
            <h1>tes</h1>
        </div>

    </div>
    {{-- Section Service End --}}



@endsection
