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
    <div id="AboutUs" class="container">
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
        <div id="Service" class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-10 col-lg-3 service-first mt-5 mb-5 mx-4">
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

                <div class="col-10 col-lg-3 service-second mt-5 mb-5 mx-4">
                    {{-- buat logo gambar service --}}
                    <div class="d-flex justify-content-center">
                        <span class="dot rounded m-4">
                            <iconify-icon icon="carbon:delivery" style="color: #d0a138;" width="85" height="80">
                            </iconify-icon>
                        </span>
                    </div>
                    {{-- buat heading --}}
                    <div class="d-flex justify-content-center mb-2">
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

                <div class="col-10 col-lg-3 service-third mt-5 mb-5 mx-4">
                    {{-- buat logo gambar service --}}
                    <div class="d-flex justify-content-center">
                        <span class="dot rounded m-4">
                            <iconify-icon icon="bxs:book-bookmark" style="color: #d0a138;" width="85" height="80">
                            </iconify-icon>
                        </span>
                    </div>
                    {{-- buat heading --}}
                    <div class="d-flex justify-content-center mb-2">
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

    <div id="OurSpecialMenu" class="container">
        <div class="sectionSpace backgroundOurSpecialMenu">
            {{-- text Our special menu Start --}}
            <div class="row d-flex flex-column justify-content-center align-items-center text-center">
                <h2 class="textColourOurSpecialMenu fontTebal">Our Special Menu</h2>
                <p class="w-32 fontTipis">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae reprehenderit
                    voluptatem debitis possimus neque itaque in cumque illo, tenetur alias suscipit eum quidem aut, voluptas
                    cupiditate minus ut dolorem consequuntur?
                </p>
                {{-- <div class="col-10 mx-auto">
                    <h1 class="text-center"></h1>
                </div> --}}
                {{-- <div class="col-6 mx-auto">
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio fugiat modi
                        quos magnam
                        consequuntur obcaecati perspiciatis soluta, alias est dolore delectus odio, itaque blanditiis ullam
                        commodi eius, illo accusamus corrupti?</p>
                </div> --}}
            </div>
        </div>
        {{-- text Our special menu End --}}

        {{-- card menu start --}}
        <div class="row d-flex justify-content-around">
            <div class="col-md-4">
                <div class="card">
                    <img src="img/salmonSushiRoll.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Nama Makanan</h5>
                        <p class="card-text">deskripsi makanan.</p>
                        <a href="#" class="btn btn-dark">Go somewhere</a>
                    </div>
                </div>

            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="img/salmonSushiRoll.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Nama Makanan</h5>
                        <p class="card-text">deskripsi makanan.</p>
                        <a href="#" class="btn btn-dark">Go somewhere</a>
                    </div>
                </div>

            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="img/salmonSushiRoll.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Nama Makanan</h5>
                        <p class="card-text">deskripsi makanan.</p>
                        <a href="#" class="btn btn-dark">Go somewhere</a>
                    </div>
                </div>

            </div>
        </div>
        {{-- card menu end --}}
    </div>
    {{-- Our special menu section End --}}

    {{-- Partner Section Start --}}
    <div id="Partner" class="container">
        <div class="sectionSpace backgroundPartner">
            {{-- text partner Start --}}
            <div class="row d-flex flex-column justify-content-center align-items-center text-center">
                <h3 class="textColourPartner fontTebal">Partner</h3>
                <h1 class="textColourPartner fontTebal">Our Partner</h1>
            </div>
        </div>
        {{-- text partner End --}}
        {{-- image partner start --}}
        <div class="row justify-content-center align-items-center">
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
    <div id="Contact" class="sectionSpace backgroundContact">
        <div class="container">
            {{-- text Contact Start --}}
            <div class="row d-flex flex-column justify-content-center align-items-center text-center">
                <h3 class="textColourContact1 fontTebal">Contact</h3>
                <h1 class="textColourContact2 fontTebal">Contact Us</h1>
            </div>
            {{-- text Contact End --}}
            {{-- info Contact Start --}}
            <div class="row d-flex flex-row justify-content-center">
                <div class="col-12 col-lg-6">
                    <iframe class="rounded-5"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6477440933427!2d112.68721011530367!3d-7.280860973575773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fc3d3c4b4485%3A0x6ccfddfc0b27c2c1!2sJl.%20Darmo%20Permai%20Sel.%20XIII%20No.6%2C%20Pradahkalikendal%2C%20Kec.%20Dukuhpakis%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060226!5e0!3m2!1sid!2sid!4v1666795738505!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-2">
                            <span class="dotContact">
                                <iconify-icon icon="akar-icons:location" width="55" height="50"></iconify-icon>
                            </span>
                        </div>
                        <div class="col-10">
                            <h4 class="textColourContact1 fontTebal">Location</h4>
                            <p class="textColourContact1 fontTipis">Darmo Permai Selatan</p>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-2">
                            <span class="dotContact">
                                <iconify-icon icon="tabler:clock-hour-3" width="55" height="50"></iconify-icon>
                            </span>
                        </div>
                        <div class="col-10">
                            <h4 class="textColourContact1 fontTebal">Open Hours</h4>
                            <p class="textColourContact1 fontTipis">10.00 - 15.00 WIB</p>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-2">
                            <span class="dotContact">
                                <iconify-icon icon="dashicons:email-alt" width="55" height="50"></iconify-icon>
                            </span>
                        </div>
                        <div class="col-10">
                            <h4 class="textColourContact1 fontTebal">E-Mail</h4>
                            <p class="textColourContact1 fontTipis">papajoe@gmail.com risky papa zola</p>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-2">
                            <span class="dotContact">
                                <iconify-icon icon="akar-icons:whatsapp-fill" width="55" height="50">
                                </iconify-icon>
                            </span>
                        </div>
                        <div class="col-10">
                            <h4 class="textColourContact1 fontTebal">WhatsApp</h4>
                            <p class="textColourContact1 fontTipis">+62 8222 1030 638</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- info Contact End --}}
        </div>
    </div>
    {{-- Contact Section End --}}

@endsection
