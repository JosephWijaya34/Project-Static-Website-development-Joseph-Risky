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
                <h1 class="fontTebal heroHead ">Our Menu</h1>
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
        <div class="sectionSpace">
            <div class="row d-flex justify-content-around">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://images.pexels.com/photos/544295/pexels-photo-544295.jpeg?cs=srgb&dl=pexels-armand-valendez-544295.jpg&fm=jpg&_gl=1*yhvtbi*_ga*MTc2MzAxNDUzNS4xNjY2MTU1NDEw*_ga_8JE65Q40S6*MTY2Njc3MzYyOS42LjEuMTY2Njc3MzYzNy4wLjAuMA.."
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="https://images.pexels.com/photos/544295/pexels-photo-544295.jpeg?cs=srgb&dl=pexels-armand-valendez-544295.jpg&fm=jpg&_gl=1*yhvtbi*_ga*MTc2MzAxNDUzNS4xNjY2MTU1NDEw*_ga_8JE65Q40S6*MTY2Njc3MzYyOS42LjEuMTY2Njc3MzYzNy4wLjAuMA.."
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="https://images.pexels.com/photos/544295/pexels-photo-544295.jpeg?cs=srgb&dl=pexels-armand-valendez-544295.jpg&fm=jpg&_gl=1*yhvtbi*_ga*MTc2MzAxNDUzNS4xNjY2MTU1NDEw*_ga_8JE65Q40S6*MTY2Njc3MzYyOS42LjEuMTY2Njc3MzYzNy4wLjAuMA.."
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>
            </div>
            {{-- card menu end --}}
        </div>
    @endsection
