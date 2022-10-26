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
                
                <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                        <div class="card card-size" >
                            <img src="https://images.pexels.com/photos/544295/pexels-photo-544295.jpeg?cs=srgb&dl=pexels-armand-valendez-544295.jpg&fm=jpg&_gl=1*yhvtbi*_ga*MTc2MzAxNDUzNS4xNjY2MTU1NDEw*_ga_8JE65Q40S6*MTY2Njc3MzYyOS42LjEuMTY2Njc3MzYzNy4wLjAuMA.."
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="p-3 row text-short-container">
                                    <h5 class="card-title">Nama Makanan</h5>
                                    <p class="card-text  text-short-container">Some quick example text to build on the card title and make up the bulk of
                                        the card's content. </p>
                                    <a href="#" class="btn buttonMenu ">Detail</a>
                                </div>
                                
                            </div>
                        </div>
                </div>
<<<<<<< HEAD
=======


                <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                    <div class="card card-size">
                        <img src="https://images.pexels.com/photos/544295/pexels-photo-544295.jpeg?cs=srgb&dl=pexels-armand-valendez-544295.jpg&fm=jpg&_gl=1*yhvtbi*_ga*MTc2MzAxNDUzNS4xNjY2MTU1NDEw*_ga_8JE65Q40S6*MTY2Njc3MzYyOS42LjEuMTY2Njc3MzYzNy4wLjAuMA.."
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="p-3 row text-short-container">
                                <h5 class="card-title">Nama Makanan</h5>
                                <p class="card-text  text-short-container">Some quick example text to build on the card title and make up the bulk of
                                    the card's content. </p>
                                <a href="#" class="btn buttonMenu">Detail</a>
                            </div>
                            
                        </div>
                    </div>  
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                    <div class="card card-size">
                        <img src="https://images.pexels.com/photos/544295/pexels-photo-544295.jpeg?cs=srgb&dl=pexels-armand-valendez-544295.jpg&fm=jpg&_gl=1*yhvtbi*_ga*MTc2MzAxNDUzNS4xNjY2MTU1NDEw*_ga_8JE65Q40S6*MTY2Njc3MzYyOS42LjEuMTY2Njc3MzYzNy4wLjAuMA.."
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="p-3 row text-short-container">
                                <h5 class="card-title">Nama Makanan</h5>
                                <p class="card-text  text-short-container">Some quick example text to build on the card title and make up the bulk of
                                    the card's content. </p>
                                <a href="#" class="btn buttonMenu">Detail</a>
                            </div>
                            
                        </div>
                    </div>  
                </div>

                 <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                    <div class="card card-size">
                        <img src="https://images.pexels.com/photos/544295/pexels-photo-544295.jpeg?cs=srgb&dl=pexels-armand-valendez-544295.jpg&fm=jpg&_gl=1*yhvtbi*_ga*MTc2MzAxNDUzNS4xNjY2MTU1NDEw*_ga_8JE65Q40S6*MTY2Njc3MzYyOS42LjEuMTY2Njc3MzYzNy4wLjAuMA.."
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="p-3 row text-short-container">
                                <h5 class="card-title">Nama Makanan</h5>
                                <p class="card-text  text-short-container">Some quick example text to build on the card title and make up the bulk of
                                    the card's content. </p>
                                <a href="#" class="btn buttonMenu">Detail</a>
                            </div>
                            
                        </div>
                    </div>  
                </div>

>>>>>>> menu
            </div>
            {{-- card menu end --}}
        </div>
    </div>
        <div class=" sectionSpace " >
            <div class="" style="background-color:black;">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3  border-top p-5">
                  <p class="col-md-4 mb-0 text-muted">© 2022 Company, Inc</p>
              
                  <a href="/" class="col-md-4 gradient justify-content-center text-center align-items-center">
                    PAPA JOE'S
                  </a>
              
                  <ul class="nav col-md-4 justify-content-md-end footerHide">
                    <li class="nav-item "><a href="#" class="nav-link px-2 footerWhite" >Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 footerWhite">About</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 footerWhite">Menu</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 footerWhite">Service</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 footerWhite">Contact</a></li>
                  </ul>
                </footer>
            </div>
        </div>
    @endsection
