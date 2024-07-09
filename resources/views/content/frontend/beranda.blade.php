    @extends('template.client')
    @section('content')
        <!-- Start slider section -->
        <section class="hero__slider--section mb-60">
            <div class="hero__slider--inner hero__slider--activation swiper">
                <div class="hero__slider--wrapper swiper-wrapper">
                    <div class="swiper-slide ">
                        <div class="hero__slider--items slider__4--bg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-7">
                                        <div class="slider__content4">
                                            <span class="slider__content4--subtitle text-white">Langsung dari Ladang ke Meja
                                                Anda</span>
                                            <h2 class="slider__content4--maintitle text-white h1">Adil untuk
                                                Petani,<br>Terjangkau untuk Konsumen</h2>
                                            <p class="slider__content4--desc text-white d-sm-none">The more you love your
                                                health, more you eat organic. No medicine can heal you better than organic
                                                food does</p>
                                            <a class="btn slider__btn style4" href="shop.html">Belanja Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="hero__slider--items slider__4--bg two">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-7">
                                        <div class="slider__content4">
                                            <span class="slider__content4--subtitle text-white">Langsung dari
                                                Peternak</span>
                                            <h2 class="slider__content4--maintitle text-white h1">Harga
                                                Bersahabat,<br>Kesejahteraan Terangkat</h2>
                                            <p class="slider__content4--desc text-white d-sm-none">The more you love your
                                                health, more you eat organic. No medicine can heal you better than organic
                                                food does</p>
                                            <a class="btn slider__btn style4" href="shop.html">Belanja Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="hero__slider--items slider__4--bg three">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-7">
                                        <div class="slider__content4">
                                            <span class="slider__content4--subtitle  text-white">Tangkap Kesempatan</span>
                                            <h2 class="slider__content4--maintitle h1  text-white">Jual Langsung!<br>
                                                Keuntungan Tidak Lagi Terapung!</h2>
                                            <p class="slider__content4--desc d-sm-none  text-white">The more you love your
                                                health, more you eat organic. No medicine can heal you better than organic
                                                food does</p>
                                            <a class="btn slider__btn style4" href="shop.html">Belanja Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__pagination swiper-pagination"></div>
            </div>
        </section>
        <!-- End slider section -->


        <!-- Start product section -->
        <section class="product__section product__section--style3 section--padding pt-0">
            <div class="container">
                <div class="section__heading text-center mb-25">
                    <h2 class="section__heading--maintitle">Produk Populer</h2>
                </div>
                <ul class="product__tab--one product__tab--btn d-flex justify-content-center mb-35">
                    <li class="product__tab--btn__list active" data-toggle="tab" data-target="#products">Semua Kategori</li>
                    <li class="product__tab--btn__list" data-toggle="tab" data-target="#pertanian">Pertanian</li>
                    <li class="product__tab--btn__list" data-toggle="tab" data-target="#peternakan">Peternakan</li>
                    <li class="product__tab--btn__list" data-toggle="tab" data-target="#perikanan">Perikanan</li>
                </ul>
                <div class="tab_content">
                    <div id="products" class="tab_pane active show">
                        <div class="product__section--inner product__section--style3__inner">
                            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                                @foreach ($allProducts as $product)
                                    <div class="col mb-30">
                                        <div class="product__items product__items2">
                                            <div class="product__items--thumbnail">
                                                <a class="product__items--link"
                                                    href="{{ route('products.show', $product->id) }}">
                                                    @if ($product->photos->isNotEmpty() && ($photo = $product->photos->first()))
                                                        <img class="product__items--img product__primary--img"
                                                            src="{{ $photo->photo_url }}"
                                                            alt="{{ $product->product_name }}">
                                                        <img class="product__items--img product__secondary--img"
                                                            src="{{ $photo->photo_url }}"
                                                            alt="{{ $product->product_name }}">
                                                    @else
                                                        <img class="product__items--img product__primary--img"
                                                            src="{{ asset('frontend/img/padi-1.png') }}"
                                                            alt="{{ $product->product_name }}">
                                                        <img class="product__items--img product__secondary--img"
                                                            src="{{ asset('frontend/img/padi-1.png') }}"
                                                            alt="{{ $product->product_name }}">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="product__items--content product__items2--content text-center">
                                                <a class="add__to--cart__btn">Lihat Detail Produk</a>
                                                <h3 class="product__items--content__title h4">
                                                    <a href="{{ route('products.show', $product->id) }}">
                                                        @if (strlen($product->product_name) > 25)
                                                            {{ substr($product->product_name, 0, 25) . '...' }}
                                                        @else
                                                            {{ $product->product_name }}
                                                        @endif
                                                    </a>
                                                </h3>
                                                <div class="product__items--price">
                                                    <span class="current__price">Rp
                                                        {{ number_format($product->price, 0, ',', '.') }}</span>
                                                </div>
                                                <span class="">Stock: {{ $product->stock }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div id="pertanian" class="tab_pane">
                        <div class="product__section--inner product__section--style3__inner">
                            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                                @foreach ($pertanianProducts as $product)
                                    <div class="col mb-30">
                                        <div class="product__items product__items2">
                                            <div class="product__items--thumbnail">
                                                <a class="product__items--link"
                                                    href="{{ route('products.show', $product->id) }}">
                                                    @if ($product->photos->isNotEmpty() && ($photo = $product->photos->first()))
                                                        <img class="product__items--img product__primary--img"
                                                            src="{{ $photo->photo_url }}"
                                                            alt="{{ $product->product_name }}">
                                                        <img class="product__items--img product__secondary--img"
                                                            src="{{ $photo->photo_url }}"
                                                            alt="{{ $product->product_name }}">
                                                    @else
                                                        <img class="product__items--img product__primary--img"
                                                            src="{{ asset('frontend/img/padi-1.png') }}"
                                                            alt="{{ $product->product_name }}">
                                                        <img class="product__items--img product__secondary--img"
                                                            src="{{ asset('frontend/img/padi-1.png') }}"
                                                            alt="{{ $product->product_name }}">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="product__items--content product__items2--content text-center">
                                                <a class="add__to--cart__btn">Lihat Detail Produk</a>
                                                <h3 class="product__items--content__title h4">
                                                    <a href="{{ route('products.show', $product->id) }}">
                                                        @if (strlen($product->product_name) > 25)
                                                            {{ substr($product->product_name, 0, 25) . '...' }}
                                                        @else
                                                            {{ $product->product_name }}
                                                        @endif
                                                    </a>
                                                </h3>
                                                <div class="product__items--price">
                                                    <span class="current__price">Rp
                                                        {{ number_format($product->price, 0, ',', '.') }}</span>
                                                </div>
                                                <span class="">Stock: {{ $product->stock }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div id="peternakan" class="tab_pane">
                        <div class="product__section--inner product__section--style3__inner">
                            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                                @foreach ($peternakanProducts as $product)
                                    <div class="col mb-30">
                                        <div class="product__items product__items2">
                                            <div class="product__items--thumbnail">
                                                <a class="product__items--link"
                                                    href="{{ route('products.show', $product->id) }}">
                                                    @if ($product->photos->isNotEmpty() && ($photo = $product->photos->first()))
                                                        <img class="product__items--img product__primary--img"
                                                            src="{{ $photo->photo_url }}"
                                                            alt="{{ $product->product_name }}">
                                                        <img class="product__items--img product__secondary--img"
                                                            src="{{ $photo->photo_url }}"
                                                            alt="{{ $product->product_name }}">
                                                    @else
                                                        <img class="product__items--img product__primary--img"
                                                            src="{{ asset('frontend/img/padi-1.png') }}"
                                                            alt="{{ $product->product_name }}">
                                                        <img class="product__items--img product__secondary--img"
                                                            src="{{ asset('frontend/img/padi-1.png') }}"
                                                            alt="{{ $product->product_name }}">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="product__items--content product__items2--content text-center">
                                                <a class="add__to--cart__btn">Lihat Detail Produk</a>
                                                <h3 class="product__items--content__title h4">
                                                    <a href="{{ route('products.show', $product->id) }}">
                                                        @if (strlen($product->product_name) > 25)
                                                            {{ substr($product->product_name, 0, 25) . '...' }}
                                                        @else
                                                            {{ $product->product_name }}
                                                        @endif
                                                    </a>
                                                </h3>
                                                <div class="product__items--price">
                                                    <span class="current__price">Rp
                                                        {{ number_format($product->price, 0, ',', '.') }}</span>
                                                </div>
                                                <span class="">Stock: {{ $product->stock }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div id="perikanan" class="tab_pane">
                        <div class="product__section--inner product__section--style3__inner">
                            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                                @foreach ($perikananProducts as $product)
                                    <div class="col mb-30">
                                        <div class="product__items product__items2">
                                            <div class="product__items--thumbnail">
                                                <a class="product__items--link"
                                                    href="{{ route('products.show', $product->id) }}">
                                                    @if ($product->photos->isNotEmpty() && ($photo = $product->photos->first()))
                                                        <img class="product__items--img product__primary--img"
                                                            src="{{ $photo->photo_url }}"
                                                            alt="{{ $product->product_name }}">
                                                        <img class="product__items--img product__secondary--img"
                                                            src="{{ $photo->photo_url }}"
                                                            alt="{{ $product->product_name }}">
                                                    @else
                                                        <img class="product__items--img product__primary--img"
                                                            src="{{ asset('frontend/img/padi-1.png') }}"
                                                            alt="{{ $product->product_name }}">
                                                        <img class="product__items--img product__secondary--img"
                                                            src="{{ asset('frontend/img/padi-1.png') }}"
                                                            alt="{{ $product->product_name }}">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="product__items--content product__items2--content text-center">
                                                <a class="add__to--cart__btn">Lihat Detail Produk</a>
                                                <h3 class="product__items--content__title h4">
                                                    <a href="{{ route('products.show', $product->id) }}">
                                                        @if (strlen($product->product_name) > 25)
                                                            {{ substr($product->product_name, 0, 25) . '...' }}
                                                        @else
                                                            {{ $product->product_name }}
                                                        @endif
                                                    </a>
                                                </h3>
                                                <div class="product__items--price">
                                                    <span class="current__price">Rp
                                                        {{ number_format($product->price, 0, ',', '.') }}</span>
                                                </div>
                                                <span class="">Stock: {{ $product->stock }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End product section -->

        <!-- Start product section -->
        <section class="product__section product__section--style3 section--padding pt-0">
            <div class="container product3__section--container">
                <div class="section__heading text-center mb-40">
                    {{-- <span class="section__heading--subtitle">Recently added our store</span> --}}
                    <h2 class="section__heading--maintitle">Produk Yang Baru Di Tambahkan</h2>
                </div>
                <div
                    class="product__section--inner product3__section--inner__padding product__section--style3__inner product__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        @foreach ($latestProducts as $product)
                            <div class="swiper-slide">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link"
                                            href="{{ route('products.show', $product->id) }}">
                                            @if ($product->photos->isNotEmpty() && ($photo = $product->photos->first()))
                                                <img class="product__items--img product__primary--img"
                                                    src="{{ $photo->photo_url }}" alt="{{ $product->product_name }}">
                                                <img class="product__items--img product__secondary--img"
                                                    src="{{ $photo->photo_url }}" alt="{{ $product->product_name }}">
                                            @else
                                                <img class="product__items--img product__primary--img"
                                                    src="{{ asset('frontend/img/padi-1.png') }}"
                                                    alt="{{ $product->product_name }}">
                                                <img class="product__items--img product__secondary--img"
                                                    src="{{ asset('frontend/img/padi-1.png') }}"
                                                    alt="{{ $product->product_name }}">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn">Lihat Detail Produk</a>
                                        <h3 class="product__items--content__title h4">
                                            <a href="{{ route('products.show', $product->id) }}">
                                                @if (strlen($product->product_name) > 25)
                                                    {{ substr($product->product_name, 0, 25) . '...' }}
                                                @else
                                                    {{ $product->product_name }}
                                                @endif
                                            </a>
                                        </h3>
                                        <div class="product__items--price">
                                            <span class="current__price">Rp
                                                {{ number_format($product->price, 0, ',', '.') }}</span>
                                        </div>
                                        <span class="">Stock: {{ $product->stock }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- End product section -->


        <!-- End shipping section -->
    @endsection
