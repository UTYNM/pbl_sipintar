<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pangan</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('client/img/favicon.ico') }}">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="{{ asset('client/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/plugins/glightbox.min.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Plugin css -->
    <link rel="stylesheet" href="{{ asset('client/css/vendor/bootstrap.min.css') }}">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
</head>

<body>


    <main class="main__content_wrapper">
        {{-- <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content text-center">
                            <h1 class="breadcrumb__content--title text-white mb-25">Account Page</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">Account Page</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section --> --}}
        <!-- Start about section -->
        <section class="about__section section--padding mb-95">
            <div class="container">
                <div class="row">
                    <div class="about__content ">
                        <div class="text-center">
                            <header class="main__header checkout__mian--header mb-30">
                            </header>
                            {{-- <span class="about__content--subtitle text__secondary mb-20">Pangan Ketapang</span> --}}
                            <a class="logo logo__left mb-20" href="index.html"><img src="{{ asset('client/img/panganketapang.svg')}}" alt="logo"></a>
                            <h2 class="about__content--maintitle mb-25">Tersambung Langsung, Harga Adil Untuk Semua: Pangan Ketapang, Solusi Terbaik untuk Pasar yang Lebih Adil!
                    </div>
                        <div class="col">
                            <ul class="product__tab--one product__details--tab d-flex justify-content-center mb-30">
                                <li class="product__details--tab__list active" style="margin-right: 1rem;" data-toggle="tab" data-target="#login">
                                    Masuk</li>
                                <li class="product__details--tab__list" data-toggle="tab" data-target="#register">
                                    Buat Akun</li>
                            </ul>
                            <div class="product__details--tab__inner border-radius-10">
                                <div class="tab_content">
                                    <div id="login" class="tab_pane active show">
                                        <div class="account__login">
                                            <div class="account__login--header mb-25">
                                                {{-- <h2 class="account__login--header__title h3 mb-10">Login</h2> --}}
                                                <p class="account__login--header__desc">Silahkan Login Menggunakan Akun Anda</p>
                                            </div>
                                            <div class="account__login--inner">
                                                <label>
                                                    <input class="account__login--input" placeholder="Alamat Email"
                                                        type="email">
                                                </label>
                                                <label>
                                                    <input class="account__login--input" placeholder="Kata Sandi"
                                                        type="password">
                                                </label>
                                                <div
                                                    class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
                                                    <div class="account__login--remember position__relative">
                                                        <input class="checkout__checkbox--input" id="check1"
                                                            type="checkbox">
                                                        <span class="checkout__checkbox--checkmark"></span>
                                                        <label class="checkout__checkbox--label login__remember--label"
                                                            for="check1">
                                                            Ingat Saya</label>
                                                    </div>
                                                    <button class="account__login--forgot" type="submit">Lupa Kata Sandi?</button>
                                                </div>
                                                <button class="account__login--btn btn" type="submit">Masuk</button>
                                                {{-- <div class="account__login--divide">
                                                    <span class="account__login--divide__text">Atau</span>
                                                </div>
                                                <div class="account__social d-flex justify-content-center mb-15">
                                                    <a class="account__social--link facebook" target="_blank"
                                                        href="https://www.facebook.com">Facebook</a>
                                                    <a class="account__social--link google" target="_blank"
                                                        href="https://www.google.com">Google</a>
                                                    <a class="account__social--link twitter" target="_blank"
                                                        href="https://twitter.com">Twitter</a>
                                                </div> --}}
                                                <p class="account__login--signup__text">Tidak Ingin Membuat Akun?
                                                    <button type="submit">Lanjut Ke Beranda</button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="register" class="tab_pane">
                                        <div class="account__login register">
                                            <div class="account__login--header mb-25">
                                                {{-- <h2 class="account__login--header__title h3 mb-10">Create an Account
                                                </h2> --}}
                                                <p class="account__login--header__desc">Silahkan Buat Akun Anda</p>
                                            </div>
                                            <div class="account__login--inner">
                                                <label>
                                                    <input class="account__login--input" placeholder="Nama Lengkap"
                                                        type="text">
                                                </label>
                                                <label>
                                                    <input class="account__login--input" placeholder="Alamat Email"
                                                        type="email">
                                                </label>
                                                <label>
                                                    <input class="account__login--input" placeholder="Nomor Handphone/Whatsapp"
                                                        type="email">
                                                </label>
                                                <label>
                                                    <input class="account__login--input" placeholder="Kata Sandi"
                                                        type="password">
                                                </label>
                                                <label>
                                                    <input class="account__login--input" placeholder="Ulangi Kata Sandi"
                                                        type="password">
                                                </label>
                                                <button class="account__login--btn btn mb-10" type="submit">Kirim & Buat Akun</button>
                                                <div class="account__login--remember position__relative">
                                                    <input class="checkout__checkbox--input" id="check2"
                                                        type="checkbox">
                                                    <span class="checkout__checkbox--checkmark"></span>
                                                    <label class="checkout__checkbox--label login__remember--label"
                                                        for="check2">
                                                        Saya telah membaca dan menyetujui syarat & ketentuan</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6">
                     </div> --}}
                </div>
            </div>
        </section>
        <!-- End about section -->
    </main>

    <!-- All Script JS Plugins here  -->
    <script src="{{ asset('client/js/vendor/popper.js') }}" defer="defer"></script>
    <script src="{{ asset('client/js/vendor/bootstrap.min.js') }}" defer="defer"></script>
    <script src="{{ asset('client/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('client/js/plugins/glightbox.min.js') }}"></script>

    <!-- Customscript js -->
    <script src="{{ asset('client/js/script.js') }}"></script>

</body>

</html>
