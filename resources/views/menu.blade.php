@extends('layouts/mainlayouts')
@section('title', 'Menu')

@section('content')
    <div class="container heroSpace">
        <div class="row d-flex justify-content-center align-items-center">

            {{-- image mobile --}}
            <div id="showHeroMobile" class="col-12 col-lg-6 heroSecond text-center mb-3" style="display: none;">
                <img class="w-75 rounded-3" src="img/makanan/salmonSushiRoll.jpeg">
            </div>

            <div class="col-12 col-lg-5 background">
                <h1 class="fontTebal gradient">Our Menu</h1>
                <p class="fontTipis heroParagraph">
                    PAPA JOE'S provides a wide variety of different food with very affordable prices while still maintaining
                    the best quality.
                </p>
            </div>

            {{-- image dekstop --}}
            <div id="showHeroDekstop" class="col-12 col-lg-6  text-center">
                <img class="w-75 rounded-3" src="img/makanan/salmonSushiRoll.jpeg">
            </div>

        </div>

    </div>

    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center sectionSpace">
            <h2>Menu</h2>
            <p class="w-32">Our selection of Papa Joe Menu</p>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center ">
                <form action="" method="">
                    
                        <button name="tipe" value="semua" class="btn btn-success">Semua</button>
                        <button name="tipe" value="halal" class="btn btn-success">Halal</button>
                        <button name="tipe" value="nonhalal" class="btn btn-danger" >Non - Halal</button>

                </form>
        </div>
        {{-- card menu start --}}

        <div class=" row justify-content-center sectionSpace" id="konten">
            @foreach ($listMakanan as $makanan)
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-6 mb-3">
                    <div class="card shadow-sm" data-aos="fade" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <img src="img\{{ $makanan['fotoMakanan'] }}" alt="..."
                            style="width: auto; object-fit: cover;">
                        <div class="card-body">
                            <div class="p-3 row text-short-container justify-content-center">
                                <h5 class="card-title text-center cardHeadText">{{ $makanan['namaMakanan'] }}</h5>
                                <p class="card-text  text-short-container cardParagraphText">{{ $makanan['deskripsi'] }}
                                </p>
                                {{-- <a id="detail" href="/detailMakanan/{{ $makanan['id'] }}" class="btn buttonMenu"
                                data-bs-toggle="modal" data-bs-target="">Detail</a> --}}
                                <button type="button" class="btn buttonMenu" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal{{ $loop->iteration }}">Detail</button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $loop->iteration }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $makanan['namaMakanan'] }}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="card-text cardParagraphText">{{ $makanan['deskripsi'] }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button buttonMenu" class="btn buttonMenu"
                                    data-bs-dismiss="modal">Close</button>
                                <a target="_blank" class="btn btn-success"
                                    href="https://api.whatsapp.com/send?phone=6282221030638&text=Halo,%20saya%20ingin%20bertanya%20seputar%20produk%20{{ $makanan['namaMakanan'] }}">Pertanyaan
                                    Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        {{-- <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-6 mb-3">
                <div class="card  shadow-sm">
                    <img src="img\DBE350headset.jpg" alt="..." style="width: auto; object-fit: cover;">
                    <div class="card-body">
                        <div class="p-3 row text-short-container justify-content-center">
                            <h5 class="card-title text-center cardHeadText">Nama Makanan</h5>
                            <p class="card-text  text-short-container cardParagraphText">Some quick example text to build on the card title
                                and make up the bulk of
                                the card's content. </p>
                            <a href="detail" class="btn buttonMenu" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Detail</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-6 mb-3">
                <div class="card  shadow-sm">
                    <img src="img\DBE350headset.jpg" alt="..." style="width: auto; object-fit: cover;">
                    <div class="card-body">
                        <div class="p-3 row text-short-container justify-content-center">
                            <h5 class="card-title text-center cardHeadText">Nama Makanan</h5>
                            <p class="card-text  text-short-container cardParagraphText">Some quick example text to build on the card title
                                and make up the bulk of
                                the card's content. </p>
                            <a href="detail" class="btn buttonMenu" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Detail</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-6 mb-3">
                <div class="card  shadow-sm">
                    <img src="img\DBE350headset.jpg" alt="..." style="width: auto; object-fit: cover;">
                    <div class="card-body">
                        <div class="p-3 row text-short-container justify-content-center">
                            <h5 class="card-title text-center cardHeadText">Nama Makanan</h5>
                            <p class="card-text  text-short-container cardParagraphText">Some quick example text to build on the card title
                                and make up the bulk of
                                the card's content. </p>
                            <a href="detail" class="btn buttonMenu" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Detail</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-6 mb-3">
                <div class="card  shadow-sm">
                    <img src="img\DBE350headset.jpg" alt="..." style="width: auto; object-fit: cover;">
                    <div class="card-body">
                        <div class="p-3 row text-short-container justify-content-center">
                            <h5 class="card-title text-center cardHeadText">Nama Makanan</h5>
                            <p class="card-text  text-short-container cardParagraphText">Some quick example text to build on the card title
                                and make up the bulk of
                                the card's content. </p>
                            <a href="detail" class="btn buttonMenu" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Detail</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-6 mb-3">
                <div class="card  shadow-sm">
                    <img src="img\DBE350headset.jpg" alt="..." style="width: auto; object-fit: cover;">
                    <div class="card-body">
                        <div class="p-3 row text-short-container justify-content-center">
                            <h5 class="card-title text-center cardHeadText">Nama Makanan</h5>
                            <p class="card-text  text-short-container cardParagraphText">Some quick example text to build on the card title
                                and make up the bulk of
                                the card's content. </p>
                            <a href="detail" class="btn buttonMenu" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Detail</a>
                        </div>
                    </div>

                </div>
            </div> --}}

        {{-- card menu end --}}
    </div>
    </div>


    {{-- modal --}}
    {{-- @isset($detailMakanan)
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ $detailMakanan['namaMakanan'] }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>{{ $detailMakanan['deskripsi'] }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    @endisset --}}


@endsection
