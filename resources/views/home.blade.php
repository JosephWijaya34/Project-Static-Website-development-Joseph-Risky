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
            <div class="row d-flex justify-content-center">
                <div class="col-10 col-lg-3 service-first">
                    {{-- buat logo gambar service --}}
                    <div class="d-flex justify-content-center">
                        <span class="dot rounded m-4">
                            <iconify-icon icon="carbon:order-details" style="color: #d0a138;" width="85" height="80">
                            </iconify-icon>
                        </span>
                    </div>
                    {{-- buat heading --}}
                    <div class="d-flex justify-content-center mb-2">
                        <h4 class="fontTebal warnaFontService text-center">Easy to Order</h4>
                    </div>
                    {{-- buat isi paragraf --}}
                    <div class="d-flex justify-content-center">
                        <p class="fontTipis warnaFontService text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolore aliquam accusantium
                            officia sapiente impedit praesentium quod exercitationem vitae ipsa qui sit perspiciatis atque
                            itaque, delectus laborum rem quisquam nisi!
                        </p>
                    </div>
                </div>

                <div class="col-10 col-lg-3 service-second">
                    {{-- buat logo gambar service --}}
                    <div class="d-flex justify-content-center">
                        <span class="dot rounded m-4">
                            <iconify-icon icon="carbon:delivery" style="color: #d0a138;" width="85" height="80">
                            </iconify-icon>
                        </span>
                    </div>
                    {{-- buat heading --}}
                    <div class="d-flex justify-content-center mt-2 mb-2">
                        <h4 class="fontTebal warnaFontService text-center">On Time</h4>
                    </div>
                    {{-- buat isi paragraf --}}
                    <div class="d-flex justify-content-center">
                        <p class="fontTipis warnaFontService text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolore aliquam accusantium
                            officia sapiente impedit praesentium quod exercitationem vitae ipsa qui sit perspiciatis atque
                            itaque, delectus laborum rem quisquam nisi!
                        </p>
                    </div>
                </div>

                <div class="col-10 col-lg-3 service-third">
                    {{-- buat logo gambar service --}}
                    <div class="d-flex justify-content-center">
                        <span class="dot rounded m-4">
                            <iconify-icon icon="bxs:book-bookmark" style="color: #d0a138;" width="85" height="80">
                            </iconify-icon>
                        </span>
                    </div>
                    {{-- buat heading --}}
                    <div class="d-flex justify-content-center mt-2 mb-2">
                        <h4 class="fontTebal warnaFontService text-center">Best Quality</h4>
                    </div>
                    {{-- buat isi paragraf --}}
                    <div class="d-flex justify-content-center">
                        <p class="fontTipis warnaFontService text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolore aliquam accusantium
                            officia sapiente impedit praesentium quod exercitationem vitae ipsa qui sit perspiciatis atque
                            itaque, delectus laborum rem quisquam nisi!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section Service End --}}

    {{-- Our special menu section Start --}}

    <div class="container">
        <div class="sectionSpace backgroundOurSpecialMenu">
            <div class="row d-flex justify-content center">
                <div class="col-10 mx-auto">
                    <h1 class="text-center">Our Special Menu</h1>
                </div>
                <div class="col-6 mx-auto">
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio fugiat modi quos magnam
                        consequuntur obcaecati perspiciatis soluta, alias est dolore delectus odio, itaque blanditiis ullam
                        commodi eius, illo accusamus corrupti?</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Our special menu section End --}}

@endsection
