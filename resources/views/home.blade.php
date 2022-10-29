@extends('layouts/mainlayouts')
@section('title', 'Home')

@section('hero')
    <div class="container heroSpace">
        <div class="d-flex justify-content-center align-items-center flex-column">
            <div class="row justify-content-center text-center">
                <h1 class="col-md-7 fontTebal gradient">Always Give Priority To Taste & Quality </h1>
                <p class="col-md-8 fontTipis heroParagraph mt-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis arcu et lorem
                    fermentum fermentum. Mauris non nulla posuere, tempus nisl ac, faucibus ex.
                </p>
            </div>

        </div>

    </div>
@endsection
@section('content')
    {{-- About Us Section Start --}}
    <div id="about" class="container ">
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
    <div id="service" class=" sectionSpace backgroundService">
        <div id="Service" class="container">
            <div class="row justify-content-center mt-4 mb-4">


                <div class="col-12 col-lg-3 service-first mx-4 m">
                    <div class="text-center">
                        {{-- buat logo gambar service --}}
                        <div class="dot rounded m-4 ">
                            <iconify-icon icon="carbon:order-details" style="color: #d0a138;" width="55" height="50">
                            </iconify-icon>
                        </div>
                        {{-- buat isi paragraf --}}
                        <div class="">
                            <h4 class="fontTebal warnaFontService text-center">Easy to Order</h4>
                            <p class="fontTipis warnaFontService text-center ">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolore aliquam
                                accusantium
                                officia sapiente impedit praesentium quod exercitationem vitae ipsa qui sit perspiciatis
                                atque
                                itaque, delectus laborum rem quisquam nisi!
                            </p>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-lg-3 service-first mx-4">
                    <div class="text-center">
                        {{-- buat logo gambar service --}}
                        <div class="dot rounded m-4 ">
                            <iconify-icon icon="bxs:book-bookmark" style="color: #d0a138;" width="55" height="50">
                            </iconify-icon>
                        </div>
                        {{-- buat isi paragraf --}}
                        <div class="">
                            <h4 class="fontTebal warnaFontService text-center">Best Quality</h4>
                            <p class="fontTipis warnaFontService text-center ">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolore aliquam
                                accusantium
                                officia sapiente impedit praesentium quod exercitationem vitae ipsa qui sit perspiciatis
                                atque
                                itaque, delectus laborum rem quisquam nisi!
                            </p>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-lg-3 service-first mx-4">
                    <div class="text-center">
                        {{-- buat logo gambar service --}}
                        <div class="dot rounded m-4 ">
                            <iconify-icon icon="carbon:delivery" style="color: #d0a138;" width="55" height="50">
                            </iconify-icon>
                        </div>
                        {{-- buat isi paragraf --}}
                        <div class="">
                            <h4 class="fontTebal warnaFontService text-center">On Time</h4>
                            <p class="fontTipis warnaFontService text-center ">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolore aliquam
                                accusantium
                                officia sapiente impedit praesentium quod exercitationem vitae ipsa qui sit perspiciatis
                                atque
                                itaque, delectus laborum rem quisquam nisi!
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- Section Service End --}}

    {{-- Our special menu section Start --}}

    <div id="specialMenu" class="container">
        <div class="sectionSpace backgroundOurSpecialMenu">
            {{-- text Our special menu Start --}}
            <div class="row d-flex flex-column justify-content-center align-items-center text-center">
                <h3 class="textColourPartner fontTebal">Menu</h3>
                <h2 class="textColourOurSpecialMenu fontTebal">Our Special Menu</h2>
                <p class="w-32 fontTipis">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae reprehenderit
                    voluptatem debitis possimus neque itaque in cumque illo, tenetur alias suscipit eum quidem aut, voluptas
                    cupiditate minus ut dolorem consequuntur?
                </p>
            </div>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide col-lg-6 offset-lg-3" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/salmonSushiRoll.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block menuColorText">
                        <h5>Nama Makanan</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, vel.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/salmonSushiRoll.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block menuColorText">
                        <h5>Nama Makanan</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, vel.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/salmonSushiRoll.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block menuColorText">
                        <h5>Nama Makanan</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, vel.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        {{-- card menu end --}}
    </div>
    {{-- Our special menu section End --}}

    {{-- Partner Section Start --}}
    <div id="parthner" class="container">
        <div class="sectionSpace backgroundPartner">
            {{-- text partner Start --}}
            <div class="row d-flex flex-column justify-content-center align-items-center text-center">
                <h3 class="textColourPartner fontTebal">Partner</h3>
                <h1 class="textColourPartner fontTebal">Our Partner</h1>
            </div>
        </div>
        {{-- text partner End --}}
        {{-- image partner start --}}
        <div class="row justify-content-center align-items-center sectionSpace">
            <div class="col-12 col-lg-5">
                <img src="img/hokky.png" class="mb-4 w-100 rounded-5">
            </div>
            <div class="col-12 col-lg-5">
                <img src="img/chicco.png" class="mb-4 w-100 rounded-5">
            </div>
        </div>
        
    </div>
    {{-- image partner End --}}
    {{-- Partner Section End --}}

    {{-- Contact Section Start --}}

    <div id="contact" class="sectionSpace backgroundContact">
        <div class="container ">
            {{-- text Contact Start --}}
            <div class="row d-flex flex-column justify-content-center align-items-center text-center ">
                <h3 class="textColourContact1 fontTebal mt-3">Contact</h3>
                <h1 class="textColourContact2 fontTebal">Contact Us</h1>
            </div>
            {{-- text Contact End --}}
            {{-- info Contact Start --}}
            <div class="row d-flex flex-row justify-content-center mt-4">
                <div class="col-12 col-lg-7 mb-4 ">
                    <iframe class="rounded-5" class="w-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6477440933427!2d112.68721011530367!3d-7.280860973575773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fc3d3c4b4485%3A0x6ccfddfc0b27c2c1!2sJl.%20Darmo%20Permai%20Sel.%20XIII%20No.6%2C%20Pradahkalikendal%2C%20Kec.%20Dukuhpakis%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060226!5e0!3m2!1sid!2sid!4v1666795738505!5m2!1sid!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="d-flex justify-content-center bd-highlight mb-3 row ">

                        <div class="col-12 ">
                            <div class="d-flex ">
                                <div class="">
                                    <iconify-icon class="dotContact" icon="akar-icons:location" width="55"
                                        height="50"></iconify-icon>
                                </div>

                                <div class="" style="margin-left: 10px">
                                    <h4 class="textColourContact1 fontTebal">Location</h4>
                                    <p class="textColourContact1 fontTipis">Darmo Permai Selatan</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-12">
                            <div class="d-flex">
                                <div class="">
                                    <iconify-icon icon="tabler:clock-hour-3" width="55" height="50"
                                    class="dotContact">
                                </iconify-icon>
                                </div>

                                <div class="" style="margin-left: 10px">
                                    <h4 class="textColourContact1 fontTebal">Open Hours</h4>
                                    <p class="textColourContact1 fontTipis">10.00 - 15.00 WIB</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-12">
                            <div class="d-flex">
                                <div class="">
                                    <iconify-icon icon="dashicons:email-alt" width="55" height="50"
                                    class="dotContact">
                                </iconify-icon>
                                </div>

                                <div class="" style="margin-left: 10px">
                                    <h4 class="textColourContact1 fontTebal">E-Mail</h4>
                                    <p class="textColourContact1 fontTipis">papajoe@gmail.com</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-12">
                            <div class="d-flex">
                                <div class="">
                                    <iconify-icon icon="bxl:whatsapp"  width="55" height="50"
                                    class="dotContact"></iconify-icon>
                                </div>

                                <div class="" style="margin-left: 10px">
                                    <h4 class="textColourContact1 fontTebal">WhatsApp</h4>
                                    <p class="textColourContact1 fontTipis">+62 8222 1030 638</p>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                {{-- info Contact End --}}
            </div>
        </div>
    </div>
    {{-- Contact Section End --}}

@endsection
