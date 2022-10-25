@extends('layouts/mainlayouts')
@section('title', 'Home')

@section('hero')
<div class="container heroSpace">
    <div class="row d-flex justify-content-center">

        {{-- image mobile --}}
        <div id="showHeroMobile"  class="col-12 col-md-6 heroSecond text-center" style="display: none;">
            <img  class="w-100 rounded-3" src="img/salmonSushiRoll.jpeg" >
        </div>

        <div class="col-12 col-md-5 heroFirst">
            <h1 class="fontTebal heroHead">Always Give Priority To Taste & Quality </h1>
            <p class="fontTipis heroParagraph">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis arcu et lorem
                fermentum fermentum. Mauris non nulla posuere, tempus nisl ac, faucibus ex.
            </p>
            <div class="btn btn-merah">Hubungi Kami</div>
        </div>

        {{-- image dekstop --}}
        <div id="showHeroDekstop"  class="col-12 col-md-6 heroSecond text-center">
            <img  class="w-50 rounded-3" src="img/salmonSushiRoll.jpeg" >
        </div>

    </div>

</div>
@endsection
@section('content')
<h1>Home</h1>


@endsection
