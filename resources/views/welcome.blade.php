@extends('layouts.main')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <style>
            .card-body {
                padding: 2rem;
            }

            .footer {
                background-color: #D8B06D;
                color: white;
                padding: 2rem 0;
            }

            .footer a {
                color: white;
            }

        </style>
    </head>

    <body>
        <header>

        </header>

        <!-- Home Section -->
        <div class="container mt-5">
            <div class="card p-2">
                <div class="card-body">
                    <h1 class="card-title">KEUNGGULAN DAFTAR DI KOPERASI NUSANTARA</h1>
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <img src="{{ asset('img/IKN.jpg') }}" class="img-fluid" alt="Image 1">
                        </div>
                        <div class="col-md-6 mt-3">
                            <ul>
                                <li>
                                    <h2>Bisa melihat saldo simpanan</h2>
                                </li>
                                <li>Registrasi mudah</li>
                                <li>Aman dan terpercaya</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-4 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{ asset('path/to/your/image2.png') }}" class="img-fluid" alt="Image 2">
                                    <p class="mt-2">Kota Berkelanjutan di Dunia</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{ asset('path/to/your/image3.png') }}" class="img-fluid" alt="Image 3">
                                    <p class="mt-2">Simbol Identitas Nasional</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{ asset('path/to/your/image4.png') }}" class="img-fluid" alt="Image 4">
                                    <p class="mt-2">Penggerak Ekonomi Indonesia di Masa Depan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Investara Section -->
        <div class="container mt-5">
            <div class="card p-2">
                <div class="card-body text-center">
                    <img src="{{ asset('img/hero-news.jpg') }}" class="img-fluid" alt="Investara">
                    <h1 class="card-title mt-3">DAPATKAN KEMUDAHAN MENABUNG DI KOPERASI NUSANTARA</h1>
                    <p>Dengan join di <strong>Koperasi Nusantara</strong>, anda dapat melakukan simpanan.</p>
                </div>
            </div>
        </div>
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">A Bootstrap 5 template for modern businesses
                            </h1>
                            <p class="lead fw-normal text-white-50 mb-4">Quickly design and customize responsive
                                mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit!
                            </p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5"
                            src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
                </div>
            </div>
        </header>
        <!-- Features section-->
        <section class="py-5" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h2 class="fw-bolder mb-0">A better way to start building.</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="row gx-5 row-cols-1 row-cols-md-2">
                            <div class="col mb-5 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                        class="bi bi-collection"></i></div>
                                <h2 class="h5">Featured title</h2>
                                <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just
                                    a bit more text.</p>
                            </div>
                            <div class="col mb-5 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                        class="bi bi-building"></i></div>
                                <h2 class="h5">Featured title</h2>
                                <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just
                                    a bit more text.</p>
                            </div>
                            <div class="col mb-5 mb-md-0 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                        class="bi bi-toggles2"></i></div>
                                <h2 class="h5">Featured title</h2>
                                <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just
                                    a bit more text.</p>
                            </div>
                            <div class="col h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                        class="bi bi-toggles2"></i></div>
                                <h2 class="h5">Featured title</h2>
                                <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just
                                    a bit more text.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial section-->
                <div class="py-5 bg-light">
                    <div class="container px-5 my-5">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-10 col-xl-7">
                                <div class="text-center">
                                    <div class="fs-4 mb-4 fst-italic">"Working with Start Bootstrap templates has saved me
                                        tons of development time when building new projects! Starting with a Bootstrap
                                        template just makes things easier!"</div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d"
                                            alt="..." />
                                        <div class="fw-bold">
                                            Tom Ato
                                            <span class="fw-bold text-primary mx-1">/</span>
                                            CEO, Pomodoro
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- Footer Section -->
        <div class="footer mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h5>IKN</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Beranda</a></li>
                            <li><a href="#">Tentang IKN dan Regulasi</a></li>
                            <li><a href="#">Struktur Organisasi</a></li>
                            <li><a href="#">Berita dan Artikel</a></li>
                            <li><a href="#">Karier</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Bantuan</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Sekilas IKN</a></li>
                            <li><a href="#">Kontak Kami</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Sosial</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Youtube</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Alamat</h5>
                        <p>Jalan Mulawarman No. 99 Balikpapan,<br>Kalimantan Timur, 76116</p>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <p>Website IKN masih dalam proses pemulihan karena Pusat Data Nasional sedang mengalami gangguan teknis
                    </p>
                    <p>&copy;2023 Copyright Ibu Kota Nusantara | <a href="#">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
