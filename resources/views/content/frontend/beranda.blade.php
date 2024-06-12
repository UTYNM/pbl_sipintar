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
                                        <span class="slider__content4--subtitle text-white">Langsung dari Ladang ke Meja Anda</span>
                                        <h2 class="slider__content4--maintitle text-white h1">Adil untuk Petani,<br>Terjangkau untuk Konsumen</h2>
                                        <p class="slider__content4--desc text-white d-sm-none">The more you love your health, more you eat organic. No medicine can heal you better than organic food does</p>
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
                                        <span class="slider__content4--subtitle text-white">Langsung dari Peternak</span>
                                        <h2 class="slider__content4--maintitle text-white h1">Harga Bersahabat,<br>Kesejahteraan Terangkat</h2>
                                        <p class="slider__content4--desc text-white d-sm-none">The more you love your health, more you eat organic. No medicine can heal you better than organic food does</p>
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
                                        <h2 class="slider__content4--maintitle h1  text-white">Jual Langsung!<br> Keuntungan Tidak Lagi Terapung!</h2>
                                        <p class="slider__content4--desc d-sm-none  text-white">The more you love your health, more you eat organic. No medicine can heal you better than organic food does</p>
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
                {{-- <span class="section__heading--subtitle">Recently added our store</span> --}}
                <h2 class="section__heading--maintitle">Produk Populer</h2>
            </div>
            <ul class="product__tab--one product__tab--btn d-flex justify-content-center mb-35">
                <li class="product__tab--btn__list active" data-toggle="tab" data-target="#product_all">Semua Kategori</li>
                <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_fresh">Pertanian</li>
                <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_fruits">Peternakan </li>
                <li class="product__tab--btn__list" data-toggle="tab" data-target="#product_nature">Perikanan</li>
            </ul>
            <div class="tab_content">
                <div id="product_all" class="tab_pane active show">
                    <div class="product__section--inner product__section--style3__inner">
                        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                            <div class="col mb-30">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img"
                                                src="frontend/img/padi-8.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img"
                                                src="frontend/img/padi-8.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            {{-- <span class="product__badge--items sale">Sale</span> --}}
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                            Keranjang</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="product-details.html">Tomat</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">Rp 20.000/kg</span>
                                        </div>
                                        <span class="">Stock: 50kg</span>
                            
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-30">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img"
                                                src="frontend/img/bebek.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img"
                                                src="frontend/img/bebek.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                   
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                            Keranjang</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="product-details.html">Bebek</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">Rp 50.000/kg</span>
                                        </div>
                                        <span class="">Stock: 150kg</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-30">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img"
                                                src="frontend/img/padi-4.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img"
                                                src="frontend/img/padi-4.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            {{-- <span class="product__badge--items sale">Sale</span> --}}
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                            Keranjang</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="product-details.html">Buah Jeruk</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">Rp 15.000/kg</span>
                                            {{-- <span class="old__price">$59.00</span> --}}
                                        </div>
                                        <span class="">Stock: 80kg</span>
                                        {{-- <div class="product__items--rating d-flex justify-content-center align-items-center">
                                        <ul class="d-flex">
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                        <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                    </svg> 
                                                </span>
                                            </li>
                                        </ul>
                                        <span class="product__items--rating__count--number">(24)</span>
                                    </div> --}}
                                    </div>
                                </div>
                            </div>      
                            <div class="col mb-30">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img"
                                                src="frontend/img/ikan bandeng.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img"
                                                src="frontend/img/ikan bandeng.png" alt="product-img">
                                        </a>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                            Keranjang</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="product-details.html">Ikan Bandeng</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">Rp 20.000/kg</span>
                                  
                                        </div>
                                        <span class="">Stock: 50kg</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-30">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img"
                                                src="frontend/img/sapi 2.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img"
                                                src="frontend/img/sapi 2.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                            Keranjang</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="product-details.html">Sapi</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">Rp 100.000/kg</span>
                                        </div>
                                        <span class="">Stock: 500kg</span>
                       
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-30">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img"
                                                src="frontend/img/ikan nila.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img"
                                                src="frontend/img/ikan nila.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                            Keranjang</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="product-details.html">Ikan Nila</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">Rp 35.000/kg</span>
                                        </div>
                                        <span class="">Stock: 100kg</span>
                       
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-30">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="DetailProdukPertanian">
                                            <img class="product__items--img product__primary--img"
                                                src="frontend/img/ayam daging.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img"
                                                src="frontend/img/ayam daging.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                     
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                            Keranjang</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="detail_produk_pertanian">Ayam Daging</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">Rp 55.000/kg</span>
                                            
                                        </div>
                                        <span class="">Stock: 1000kg</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-30">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img"
                                                src="frontend/img/telur.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img"
                                                src="frontend/img/telur.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                            Keranjang</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="product-details.html">Telur Ayam</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">Rp 20.000/kg</span>
                                        </div>
                                        <span class="">Stock: 50kg</span>
                            
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
                <div id="product_fresh" class="tab_pane">
                    <div class="product__section--inner product__section--style3__inner">
                        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                            <div class="col mb-30">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img"
                                                src="frontend/img/padi-4.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img"
                                                src="frontend/img/padi-4.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            {{-- <span class="product__badge--items sale">Sale</span> --}}
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                            Keranjang</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="product-details.html">Buah Jeruk</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">Rp 15.000/kg</span>
                                            {{-- <span class="old__price">$59.00</span> --}}
                                        </div>
                                        <span class="">Stock: 80kg</span>
                                        {{-- <div class="product__items--rating d-flex justify-content-center align-items-center">
                                        <ul class="d-flex">
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                        <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                    </svg> 
                                                </span>
                                            </li>
                                        </ul>
                                        <span class="product__items--rating__count--number">(24)</span>
                                    </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-30">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img"
                                                src="frontend/img/padi-5.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img"
                                                src="frontend/img/padi-5.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            {{-- <span class="product__badge--items sale">Sale</span> --}}
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                            Keranjang</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="product-details.html">Jagung</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">Rp 20.000/kg</span>
                                            {{-- <span class="old__price">$59.00</span> --}}
                                        </div>
                                        <span class="">Stock: 80kg</span>
                                        {{-- <div class="product__items--rating d-flex justify-content-center align-items-center">
                                        <ul class="d-flex">
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                                <span class="product__items--rating__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                        <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                    </svg> 
                                                </span>
                                            </li>
                                        </ul>
                                        <span class="product__items--rating__count--number">(24)</span>
                                    </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-30">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img"
                                                src="frontend/img/padi-6.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img"
                                                src="frontend/img/padi-6.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                            Keranjang</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="product-details.html">Buah Mangga</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">Rp 23.000/kg</span>
                                        </div>
                                        <span class="">Stock: 30kg</span>
                       
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-30">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img"
                                                src="frontend/img/padi-7.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img"
                                                src="frontend/img/padi-7.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                 
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                            Keranjang</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="product-details.html">Semangka</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">Rp 15.000/kg</span>
     
                                        </div>
                                        <span class="">Stock: 80kg</span>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product_fruits" class="tab_pane">
                    <div class="product__section--inner product__section--style3__inner">
                        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                            <div class="col mb-30">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img"
                                                src="frontend/img/ayam kampung.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img"
                                                src="frontend/img/ayam kampung.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                           
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                            Keranjang</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="product-details.html">Ayam Kampung</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">Rp 45.000/kg</span>
                                  
                                        </div>
                                        <span class="">Stock: 200kg</span>
                               
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-30">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img"
                                                src="frontend/img/bebek.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img"
                                                src="frontend/img/bebek.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                   
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                            Keranjang</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="product-details.html">Bebek</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">Rp 50.000/kg</span>
                                        </div>
                                        <span class="">Stock: 150kg</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-30">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img"
                                                src="frontend/img/kambing.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img"
                                                src="frontend/img/kambing.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            {{-- <span class="product__badge--items sale">Sale</span> --}}
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                            Keranjang</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="product-details.html">Kambing</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">Rp 95.000/kg</span>
                                        </div>
                                        <span class="">Stock: 250kg</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-30">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img"
                                                src="frontend/img/kerbau 1.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img"
                                                src="frontend/img/kerbau 1.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            {{-- <span class="product__badge--items sale">Sale</span> --}}
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                            Keranjang</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="product-details.html">Kerbau</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">Rp 130.000/kg</span>
                                        </div>
                                        <span class="">Stock: 800kg</span>
                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product_nature" class="tab_pane">
                    <div class="product__section--inner product__section--style3__inner">
                        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                            <div class="col mb-30">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img"
                                                src="frontend/img/ikan bandeng.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img"
                                                src="frontend/img/ikan bandeng.png" alt="product-img">
                                        </a>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                            Keranjang</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="product-details.html">Ikan Bandeng</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">Rp 20.000/kg</span>
                                  
                                        </div>
                                        <span class="">Stock: 50kg</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-30">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img"
                                                src="frontend/img/ikan gurami.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img"
                                                src="frontend/img/ikan gurami.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                            Keranjang</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="product-details.html">Ikan Gurame</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">Rp 35.000/kg</span>
                                        </div>
                                        <span class="">Stock: 150kg</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-30">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img"
                                                src="frontend/img/ikan kakap.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img"
                                                src="frontend/img/ikan kakap.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            {{-- <span class="product__badge--items sale">Sale</span> --}}
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                            Keranjang</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="product-details.html">Ikan Kakap</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">Rp 45.000/kg</span>
                                        </div>
                                        <span class="">Stock: 100kg</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-30">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="product-details.html">
                                            <img class="product__items--img product__primary--img"
                                                src="frontend/img/ikan lele.png" alt="product-img">
                                            <img class="product__items--img product__secondary--img"
                                                src="frontend/img/ikan lele.png" alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            {{-- <span class="product__badge--items sale">Sale</span> --}}
                                        </div>
                                        <ul class="product__items--action">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="wishlist.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" data-open="modal1"
                                                    href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path
                                                            d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-miterlimit="10"
                                                            stroke-width="32" d="M338.29 338.29L448 448" />
                                                    </svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn" href="compare.html">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512">
                                                        <path fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32"
                                                            d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                        <path
                                                            d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                            fill="none" stroke="currentColor"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>
                                                    <span class="visually-hidden">Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__items--content product__items2--content text-center">
                                        <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                            Keranjang</a>
                                        <h3 class="product__items--content__title h4"><a
                                                href="product-details.html">Ikan Lele</a></h3>
                                        <div class="product__items--price">
                                            <span class="current__price">Rp 35.000/kg</span>
                                        </div>
                                        <span class="">Stock: 40kg</span>
                            
                                    </div>
                                </div>
                            </div>
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
            <div class="product__section--inner product3__section--inner__padding product__section--style3__inner product__swiper--activation swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product__items product__items2">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="product-details.html">
                                    <img class="product__items--img product__primary--img"
                                        src="frontend/img/padi-2.png" alt="product-img">
                                    <img class="product__items--img product__secondary--img"
                                        src="frontend/img/padi-2.png" alt="product-img">
                                </a>
                                <div class="product__badge">
                                   
                                </div>
                                <ul class="product__items--action">
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="wishlist.html">
                                            <svg class="product__items--action__btn--svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path
                                                    d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                    fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="32" />
                                            </svg>
                                            <span class="visually-hidden">Wishlist</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" data-open="modal1"
                                            href="javascript:void(0)">
                                            <svg class="product__items--action__btn--svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path
                                                    d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                    fill="none" stroke="currentColor"
                                                    stroke-miterlimit="10" stroke-width="32" />
                                                <path fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-miterlimit="10"
                                                    stroke-width="32" d="M338.29 338.29L448 448" />
                                            </svg>
                                            <span class="visually-hidden">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="compare.html">
                                            <svg class="product__items--action__btn--svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="32"
                                                    d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                <path
                                                    d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                    fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="32" />
                                            </svg>
                                            <span class="visually-hidden">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__items--content product__items2--content text-center">
                                <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                    Keranjang</a>
                                <h3 class="product__items--content__title h4"><a
                                        href="product-details.html">Cabe Keriting</a></h3>
                                <div class="product__items--price">
                                    <span class="current__price">Rp 35.000/kg</span>
                          
                                </div>
                                <span class="">Stock: 50kg</span>
                       
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product__items product__items2">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="DetailProdukPertanian">
                                    <img class="product__items--img product__primary--img"
                                        src="frontend/img/padi-1.png" alt="product-img">
                                    <img class="product__items--img product__secondary--img"
                                        src="frontend/img/padi-1.png" alt="product-img">
                                </a>
                                <div class="product__badge">
                             
                                </div>
                                <ul class="product__items--action">
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="wishlist.html">
                                            <svg class="product__items--action__btn--svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path
                                                    d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                    fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="32" />
                                            </svg>
                                            <span class="visually-hidden">Wishlist</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" data-open="modal1"
                                            href="javascript:void(0)">
                                            <svg class="product__items--action__btn--svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path
                                                    d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                    fill="none" stroke="currentColor"
                                                    stroke-miterlimit="10" stroke-width="32" />
                                                <path fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-miterlimit="10"
                                                    stroke-width="32" d="M338.29 338.29L448 448" />
                                            </svg>
                                            <span class="visually-hidden">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="compare.html">
                                            <svg class="product__items--action__btn--svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="32"
                                                    d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                <path
                                                    d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                    fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="32" />
                                            </svg>
                                            <span class="visually-hidden">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__items--content product__items2--content text-center">
                                <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                    Keranjang</a>
                                <h3 class="product__items--content__title h4"><a
                                        href="detail_produk_pertanian">Buah Naga</a></h3>
                                <div class="product__items--price">
                                    <span class="current__price">Rp 20.000/kg</span>
                                    
                                </div>
                                <span class="">Stock: 1000kg</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product__items product__items2">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="product-details.html">
                                    <img class="product__items--img product__primary--img"
                                        src="frontend/img/ayam kampung.png" alt="product-img">
                                    <img class="product__items--img product__secondary--img"
                                        src="frontend/img/ayam kampung.png" alt="product-img">
                                </a>
                                <div class="product__badge">
                                   
                                </div>
                                <ul class="product__items--action">
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="wishlist.html">
                                            <svg class="product__items--action__btn--svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path
                                                    d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                    fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="32" />
                                            </svg>
                                            <span class="visually-hidden">Wishlist</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" data-open="modal1"
                                            href="javascript:void(0)">
                                            <svg class="product__items--action__btn--svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path
                                                    d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                    fill="none" stroke="currentColor"
                                                    stroke-miterlimit="10" stroke-width="32" />
                                                <path fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-miterlimit="10"
                                                    stroke-width="32" d="M338.29 338.29L448 448" />
                                            </svg>
                                            <span class="visually-hidden">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="compare.html">
                                            <svg class="product__items--action__btn--svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="32"
                                                    d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                <path
                                                    d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                    fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="32" />
                                            </svg>
                                            <span class="visually-hidden">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__items--content product__items2--content text-center">
                                <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                    Keranjang</a>
                                <h3 class="product__items--content__title h4"><a
                                        href="product-details.html">Ayam Kampung</a></h3>
                                <div class="product__items--price">
                                    <span class="current__price">Rp 45.000/kg</span>
                          
                                </div>
                                <span class="">Stock: 200kg</span>
                       
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product__items product__items2">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="DetailProdukPertanian">
                                    <img class="product__items--img product__primary--img"
                                        src="frontend/img/ayam daging.png" alt="product-img">
                                    <img class="product__items--img product__secondary--img"
                                        src="frontend/img/ayam daging.png" alt="product-img">
                                </a>
                                <div class="product__badge">
                             
                                </div>
                                <ul class="product__items--action">
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="wishlist.html">
                                            <svg class="product__items--action__btn--svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path
                                                    d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                    fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="32" />
                                            </svg>
                                            <span class="visually-hidden">Wishlist</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" data-open="modal1"
                                            href="javascript:void(0)">
                                            <svg class="product__items--action__btn--svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path
                                                    d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                    fill="none" stroke="currentColor"
                                                    stroke-miterlimit="10" stroke-width="32" />
                                                <path fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-miterlimit="10"
                                                    stroke-width="32" d="M338.29 338.29L448 448" />
                                            </svg>
                                            <span class="visually-hidden">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="compare.html">
                                            <svg class="product__items--action__btn--svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="32"
                                                    d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                <path
                                                    d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                    fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="32" />
                                            </svg>
                                            <span class="visually-hidden">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__items--content product__items2--content text-center">
                                <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                    Keranjang</a>
                                <h3 class="product__items--content__title h4"><a
                                        href="detail_produk_pertanian">Ayam Daging</a></h3>
                                <div class="product__items--price">
                                    <span class="current__price">Rp 55.000/kg</span>
                                    
                                </div>
                                <span class="">Stock: 1000kg</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product__items product__items2">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="DetailProdukPertanian">
                                    <img class="product__items--img product__primary--img"
                                        src="frontend/img/ikan gembung.png" alt="product-img">
                                    <img class="product__items--img product__secondary--img"
                                        src="frontend/img/ikan gembung.png" alt="product-img">
                                </a>
                                <div class="product__badge">
                                </div>
                                <ul class="product__items--action">
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="wishlist.html">
                                            <svg class="product__items--action__btn--svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path
                                                    d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                    fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="32" />
                                            </svg>
                                            <span class="visually-hidden">Wishlist</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" data-open="modal1"
                                            href="javascript:void(0)">
                                            <svg class="product__items--action__btn--svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path
                                                    d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                    fill="none" stroke="currentColor"
                                                    stroke-miterlimit="10" stroke-width="32" />
                                                <path fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-miterlimit="10"
                                                    stroke-width="32" d="M338.29 338.29L448 448" />
                                            </svg>
                                            <span class="visually-hidden">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="compare.html">
                                            <svg class="product__items--action__btn--svg"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="32"
                                                    d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256" />
                                                <path
                                                    d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208"
                                                    fill="none" stroke="currentColor"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="32" />
                                            </svg>
                                            <span class="visually-hidden">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__items--content product__items2--content text-center">
                                <a class="add__to--cart__btn" href="cart.html">+ Tambah Ke
                                    Keranjang</a>
                                <h3 class="product__items--content__title h4"><a
                                        href="detail_produk_pertanian">Ikan Gembung</a></h3>
                                <div class="product__items--price">
                                    <span class="current__price">Rp 40.000/kg</span>
                                    
                                </div>
                                <span class="">Stock: 50kg</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper__nav--btn swiper-button-next"></div>
                <div class="swiper__nav--btn swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <!-- End product section -->


    <!-- End shipping section -->
    @endsection