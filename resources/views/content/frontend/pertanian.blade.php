@extends('template.client')
@section('content')
    {{-- <!-- Start breadcrumb section -->
<section class="breadcrumb__section breadcrumb__bg">
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <div class="breadcrumb__content text-center">
                    <h1 class="breadcrumb__content--title text-white mb-25">Hasil Pertanian</h1>
                    <ul class="breadcrumb__content--menu d-flex justify-content-center">
                        <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a></li>
                        <li class="breadcrumb__content--menu__items"><span class="text-white">Shop Left Sidebar</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    <!-- End breadcrumb section -->

      <!-- Start offcanvas filter sidebar -->
      <div class="offcanvas__filter--sidebar widget__area">
        <button type="button" class="offcanvas__filter--close" data-offcanvas>
            <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"></path></svg> <span class="offcanvas__filter--close__text">Close</span>
        </button>
        <div class="offcanvas__filter--sidebar__inner">
            <div class="single__widget widget__bg">
                <h2 class="widget__title h3">Kategori Hasil Pertanian</h2>
                <ul class="widget__form--check">
                    <li class="widget__form--check__list">
                        <label class="widget__form--check__label" for="check1">Tanaman Pangan</label>
                        <input class="widget__form--check__input" id="check1" type="checkbox">
                        <span class="widget__form--checkmark"></span>
                    </li>
                    <li class="widget__form--check__list">
                        <label class="widget__form--check__label" for="check2">Sayur - Sayuran</label>
                        <input class="widget__form--check__input" id="check2" type="checkbox">
                        <span class="widget__form--checkmark"></span>
                    </li>
                    <li class="widget__form--check__list">
                        <label class="widget__form--check__label" for="check3">Buah - Buahan</label>
                        <input class="widget__form--check__input" id="check3" type="checkbox">
                        <span class="widget__form--checkmark"></span>
                    </li>
                    <li class="widget__form--check__list">
                        <label class="widget__form--check__label" for="check4">Tanaman Perkebunan</label>
                        <input class="widget__form--check__input" id="check4" type="checkbox">
                        <span class="widget__form--checkmark"></span>
                    </li>
                    <li class="widget__form--check__list">
                        <label class="widget__form--check__label" for="check5">Rempah - Rempahan</label>
                        <input class="widget__form--check__input" id="check5" type="checkbox">
                        <span class="widget__form--checkmark"></span>
                    </li>
                </ul>
            </div>
            <div class="single__widget price__filter widget__bg">
                <h2 class="widget__title h3">Harga</h2>
                <form class="price__filter--form" action="#">
                    <div class="price__filter--form__inner mb-15 d-flex align-items-center">
                        <div class="price__filter--group">
                            <label class="price__filter--label" for="Filter-Price-GTE2">Minimal</label>
                            <div class="price__filter--input border-radius-5 d-flex align-items-center">
                                <span class="price__filter--currency">Rp</span>
                                <input class="price__filter--input__field border-0" name="filter.v.price.gte"
                                    id="Filter-Price-GTE2" type="number" placeholder="0" min="0"
                                    max="250.00">
                            </div>
                        </div>
                        <div class="price__divider">
                            <span>-</span>
                        </div>
                        <div class="price__filter--group">
                            <label class="price__filter--label" for="Filter-Price-LTE2">Maksimal</label>
                            <div class="price__filter--input border-radius-5 d-flex align-items-center">
                                <span class="price__filter--currency">Rp</span>
                                <input class="price__filter--input__field border-0" name="filter.v.price.lte"
                                    id="Filter-Price-LTE2" type="number" min="0"
                                    placeholder="100.000" max="250.00">
                            </div>
                        </div>
                    </div>
                    <button class="btn price__filter--btn" type="submit">Filter</button>
                </form>
            </div>
            <div class="single__widget widget__bg">
                <h2 class="widget__title h3">Lokasi</h2>
                <ul class="widget__tagcloud">
                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Air
                            Upas</a></li>
                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                            href="shop.html">Benua Kayong</a></li>
                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                            href="shop.html">Delta Pawan</a></li>
                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                            href="shop.html">Hulu Sungai</a></li>
                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                            href="shop.html">Jelai Hulu</a></li>
                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                            href="shop.html">Kendawangan</a></li>
                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                            href="shop.html">Manis Mata</a></li>
                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                            href="shop.html">Marau</a></li>
                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                            href="shop.html">Matan Hilir Selatan</a></li>
                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                            href="shop.html">Matan Hilir Utara</a></li>
                    <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                            href="shop.html">Muara Pawan</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End offcanvas filter sidebar -->

    <!-- Start shop section -->
    <section class="shop__section section--padding">
        <div class="container-fluid">
            <div class="shop__header bg__gray--color d-flex align-items-center justify-content-between mb-30">
                <button class="widget__filter--btn d-flex d-lg-none align-items-center" data-offcanvas>
                    <svg class="widget__filter--btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="28" d="M368 128h80M64 128h240M368 384h80M64 384h240M208 256h240M64 256h80" />
                        <circle cx="336" cy="128" r="28" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="28" />
                        <circle cx="176" cy="256" r="28" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="28" />
                        <circle cx="336" cy="384" r="28" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="28" />
                    </svg>
                    <span class="widget__filter--btn__text">Filter</span>
                </button>
                <div class="product__view--mode d-flex align-items-center">
                    <div class="product__view--mode__list product__short--by align-items-center d-lg-flex d-none ">
                        <label class="product__view--label">Lihat :</label>
                        <div class="select shop__header--select">
                            <select class="product__view--select">
                                <option selected value="1">8</option>
                                <option value="2">16</option>
                                <option value="3">42</option>
                                <option value="4">57 </option>
                                <option value="5">60 </option>
                            </select>
                        </div>
                    </div>
                    <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
                        <label class="product__view--label">Urutkan :</label>
                        <div class="select shop__header--select">
                            <select class="product__view--select">
                                <option selected value="1">Terbaru</option>
                                <option value="2">Terlama</option>
                            </select>
                        </div>

                    </div>
                    <div class="product__view--mode__list">
                        <div class="product__tab--one product__grid--column__buttons d-flex justify-content-center">
                            <button class="product__grid--column__buttons--icons active" aria-label="grid btn"
                                data-toggle="tab" data-target="#product_grid">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 9 9">
                                    <g transform="translate(-1360 -479)">
                                        <rect id="Rectangle_5725" data-name="Rectangle 5725" width="4" height="4"
                                            transform="translate(1360 479)" fill="currentColor" />
                                        <rect id="Rectangle_5727" data-name="Rectangle 5727" width="4" height="4"
                                            transform="translate(1360 484)" fill="currentColor" />
                                        <rect id="Rectangle_5726" data-name="Rectangle 5726" width="4" height="4"
                                            transform="translate(1365 479)" fill="currentColor" />
                                        <rect id="Rectangle_5728" data-name="Rectangle 5728" width="4" height="4"
                                            transform="translate(1365 484)" fill="currentColor" />
                                    </g>
                                </svg>
                            </button>
                            <button class="product__grid--column__buttons--icons" aria-label="list btn" data-toggle="tab"
                                data-target="#product_list">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 13 8">
                                    <g id="Group_14700" data-name="Group 14700" transform="translate(-1376 -478)">
                                        <g transform="translate(12 -2)">
                                            <g id="Group_1326" data-name="Group 1326">
                                                <rect id="Rectangle_5729" data-name="Rectangle 5729" width="3"
                                                    height="2" transform="translate(1364 483)" fill="currentColor" />
                                                <rect id="Rectangle_5730" data-name="Rectangle 5730" width="9"
                                                    height="2" transform="translate(1368 483)" fill="currentColor" />
                                            </g>
                                            <g id="Group_1328" data-name="Group 1328" transform="translate(0 -3)">
                                                <rect id="Rectangle_5729-2" data-name="Rectangle 5729" width="3"
                                                    height="2" transform="translate(1364 483)" fill="currentColor" />
                                                <rect id="Rectangle_5730-2" data-name="Rectangle 5730" width="9"
                                                    height="2" transform="translate(1368 483)" fill="currentColor" />
                                            </g>
                                            <g id="Group_1327" data-name="Group 1327" transform="translate(0 -1)">
                                                <rect id="Rectangle_5731" data-name="Rectangle 5731" width="3"
                                                    height="2" transform="translate(1364 487)" fill="currentColor" />
                                                <rect id="Rectangle_5732" data-name="Rectangle 5732" width="9"
                                                    height="2" transform="translate(1368 487)" fill="currentColor" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="product__view--mode__list product__view--search d-xl-block d-none ">
                        <form class="product__view--search__form" action="#">
                            <label>
                                <input class="product__view--search__input border-0" placeholder="Cari Hasil Pertanian"
                                    type="text">
                            </label>
                            <button class="product__view--search__btn" aria-label="search btn" type="submit">
                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"
                                    width="22.51" height="20.443" viewBox="0 0 512 512">
                                    <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
                <p class="product__showing--count">Menampilkan 1 - 8 dari 20 Produk</p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="shop__sidebar--widget widget__area d-none d-lg-block">
                        <div class="single__widget widget__bg">
                            <h2 class="widget__title h3">Kategori Hasil Pertanian</h2>
                            <ul class="widget__form--check">
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check1">Tanaman Pangan</label>
                                    <input class="widget__form--check__input" id="check1" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check2">Sayur - Sayuran</label>
                                    <input class="widget__form--check__input" id="check2" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check3">Buah - Buahan</label>
                                    <input class="widget__form--check__input" id="check3" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check4">Tanaman Perkebunan</label>
                                    <input class="widget__form--check__input" id="check4" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                                <li class="widget__form--check__list">
                                    <label class="widget__form--check__label" for="check5">Rempah - Rempahan</label>
                                    <input class="widget__form--check__input" id="check5" type="checkbox">
                                    <span class="widget__form--checkmark"></span>
                                </li>
                            </ul>
                        </div>
                        <div class="single__widget price__filter widget__bg">
                            <h2 class="widget__title h3">Harga</h2>
                            <form class="price__filter--form" action="#">
                                <div class="price__filter--form__inner mb-15 d-flex align-items-center">
                                    <div class="price__filter--group">
                                        <label class="price__filter--label" for="Filter-Price-GTE2">Minimal</label>
                                        <div class="price__filter--input border-radius-5 d-flex align-items-center">
                                            <span class="price__filter--currency">Rp</span>
                                            <input class="price__filter--input__field border-0" name="filter.v.price.gte"
                                                id="Filter-Price-GTE2" type="number" placeholder="0" min="0"
                                                max="250.00">
                                        </div>
                                    </div>
                                    <div class="price__divider">
                                        <span>-</span>
                                    </div>
                                    <div class="price__filter--group">
                                        <label class="price__filter--label" for="Filter-Price-LTE2">Maksimal</label>
                                        <div class="price__filter--input border-radius-5 d-flex align-items-center">
                                            <span class="price__filter--currency">Rp</span>
                                            <input class="price__filter--input__field border-0" name="filter.v.price.lte"
                                                id="Filter-Price-LTE2" type="number" min="0"
                                                placeholder="100.000" max="250.00">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn price__filter--btn" type="submit">Filter</button>
                            </form>
                        </div>
                        <div class="single__widget widget__bg">
                            <h2 class="widget__title h3">Lokasi</h2>
                            <ul class="widget__tagcloud">
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Air
                                        Upas</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                                        href="shop.html">Benua Kayong</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                                        href="shop.html">Delta Pawan</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                                        href="shop.html">Hulu Sungai</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                                        href="shop.html">Jelai Hulu</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                                        href="shop.html">Kendawangan</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                                        href="shop.html">Manis Mata</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                                        href="shop.html">Marau</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                                        href="shop.html">Matan Hilir Selatan</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                                        href="shop.html">Matan Hilir Utara</a></li>
                                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link"
                                        href="shop.html">Muara Pawan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="shop__product--wrapper">
                        <div class="tab_content">
                            <div id="product_grid" class="tab_pane active show">
                                <div class="product__section--inner product__section--style3__inner">
                                    <div
                                        class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-3 row-cols-2 mb--n30">
                                        <div class="col mb-30">
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
                                        <div class="col mb-30">
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
                                        <div class="col mb-30">
                                            <div class="product__items product__items2">
                                                <div class="product__items--thumbnail">
                                                    <a class="product__items--link" href="product-details.html">
                                                        <img class="product__items--img product__primary--img"
                                                            src="frontend/img/padi-3.png" alt="product-img">
                                                        <img class="product__items--img product__secondary--img"
                                                            src="frontend/img/padi-3.png" alt="product-img">
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
                                                            href="product-details.html">Cabe Rawit</a></h3>
                                                    <div class="product__items--price">
                                                        <span class="current__price">Rp 30.000/kg</span>
                                                    </div>
                                                    <span class="">Stock: 70kg</span>
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
                                    </div>
                                </div>
                            </div>
                            <div id="product_list" class="tab_pane">
                                <div class="product__section--inner product__section--style3__inner">
                                    <div class="row row-cols-1 mb--n30">
                                        <div class="col mb-30">
                                            <div class="product__items product__list--items d-flex">
                                                <div class="product__items--thumbnail product__list--items__thumbnail">
                                                    <a class="product__items--link" href="product-details.html">
                                                        <img class="product__items--img product__primary--img"
                                                            src="assets/img/product/product7.png" alt="product-img">
                                                        <img class="product__items--img product__secondary--img"
                                                            src="assets/img/product/product8.png" alt="product-img">
                                                    </a>
                                                    <div class="product__badge">
                                                        <span class="product__badge--items sale">Sale</span>
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
                                                <div class="product__list--items__content">
                                                    <h3 class="product__list--items__content--title h4 mb-10"><a
                                                            href="product-details.html">Vegetables Juices</a></h3>
                                                    <div class="product__items--price mb-10">
                                                        <span class="current__price">$38.00</span>
                                                        <span class="old__price">$40.00</span>
                                                    </div>
                                                    <div
                                                        class="product__items--rating mb-15 d-flex align-items-center mb-10">
                                                        <ul class="d-flex">
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105"
                                                                        height="9.732" viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105"
                                                                        height="9.732" viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105"
                                                                        height="9.732" viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105"
                                                                        height="9.732" viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.105"
                                                                        height="9.732" viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="#c7c5c2" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <span class="product__items--rating__count--number">(24)</span>
                                                    </div>
                                                    <p class="product__list--items__content--desc mb-20">Lorem, ipsum dolor
                                                        sit amet consectetur adipisicing elit. Quia voluptas dolore
                                                        doloribus architecto sequi corporis deleniti officia culpa dolor
                                                        esse consectetur eligendi, natus at rem ab quae amet molestiae quod
                                                        voluptates, illo exercitationem numquam ipsa. Est fuga ex ipsum
                                                        alias ipsa quibusdam magni harum labore voluptate.</p>
                                                    <a class="btn add__to--cart__btn2" href="cart.html">+ Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-30">
                                            <div class="product__items product__list--items d-flex">
                                                <div class="product__items--thumbnail product__list--items__thumbnail">
                                                    <a class="product__items--link" href="product-details.html">
                                                        <img class="product__items--img product__primary--img"
                                                            src="assets/img/product/product1.png" alt="product-img">
                                                        <img class="product__items--img product__secondary--img"
                                                            src="assets/img/product/product2.png" alt="product-img">
                                                    </a>
                                                    <div class="product__badge">
                                                        <span class="product__badge--items sale">Sale</span>
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
                                                <div class="product__list--items__content">
                                                    <h3 class="product__list--items__content--title h4 mb-10"><a
                                                            href="product-details.html">Red-tomato-isolated</a></h3>
                                                    <div class="product__items--price mb-10">
                                                        <span class="current__price">$35.00</span>
                                                        <span class="old__price">$42.00</span>
                                                    </div>
                                                    <div
                                                        class="product__items--rating mb-15 d-flex align-items-center mb-10">
                                                        <ul class="d-flex">
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="#c7c5c2" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <span class="product__items--rating__count--number">(24)</span>
                                                    </div>
                                                    <p class="product__list--items__content--desc mb-20">Lorem, ipsum
                                                        dolor sit amet consectetur adipisicing elit. Quia voluptas dolore
                                                        doloribus architecto sequi corporis deleniti officia culpa dolor
                                                        esse consectetur eligendi, natus at rem ab quae amet molestiae quod
                                                        voluptates, illo exercitationem numquam ipsa. Est fuga ex ipsum
                                                        alias ipsa quibusdam magni harum labore voluptate.</p>
                                                    <a class="btn add__to--cart__btn2" href="cart.html">+ Add to
                                                        cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-30">
                                            <div class="product__items product__list--items d-flex">
                                                <div class="product__items--thumbnail product__list--items__thumbnail">
                                                    <a class="product__items--link" href="product-details.html">
                                                        <img class="product__items--img product__primary--img"
                                                            src="assets/img/product/product3.png" alt="product-img">
                                                        <img class="product__items--img product__secondary--img"
                                                            src="assets/img/product/product4.png" alt="product-img">
                                                    </a>
                                                    <div class="product__badge">
                                                        <span class="product__badge--items sale">Sale</span>
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
                                                <div class="product__list--items__content">
                                                    <h3 class="product__list--items__content--title h4 mb-10"><a
                                                            href="product-details.html">Fresh-whole-fish</a></h3>
                                                    <div class="product__items--price mb-10">
                                                        <span class="current__price">$32.00</span>
                                                        <span class="old__price">$44.00</span>
                                                    </div>
                                                    <div
                                                        class="product__items--rating mb-15 d-flex align-items-center mb-10">
                                                        <ul class="d-flex">
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="#c7c5c2" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <span class="product__items--rating__count--number">(24)</span>
                                                    </div>
                                                    <p class="product__list--items__content--desc mb-20">Lorem, ipsum
                                                        dolor sit amet consectetur adipisicing elit. Quia voluptas dolore
                                                        doloribus architecto sequi corporis deleniti officia culpa dolor
                                                        esse consectetur eligendi, natus at rem ab quae amet molestiae quod
                                                        voluptates, illo exercitationem numquam ipsa. Est fuga ex ipsum
                                                        alias ipsa quibusdam magni harum labore voluptate.</p>
                                                    <a class="btn add__to--cart__btn2" href="cart.html">+ Add to
                                                        cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-30">
                                            <div class="product__items product__list--items d-flex">
                                                <div class="product__items--thumbnail product__list--items__thumbnail">
                                                    <a class="product__items--link" href="product-details.html">
                                                        <img class="product__items--img product__primary--img"
                                                            src="assets/img/product/product5.png" alt="product-img">
                                                        <img class="product__items--img product__secondary--img"
                                                            src="assets/img/product/product6.png" alt="product-img">
                                                    </a>
                                                    <div class="product__badge">
                                                        <span class="product__badge--items sale">Sale</span>
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
                                                <div class="product__list--items__content">
                                                    <h3 class="product__list--items__content--title h4 mb-10"><a
                                                            href="product-details.html">Raw-onions-surface</a></h3>
                                                    <div class="product__items--price mb-10">
                                                        <span class="current__price">$38.00</span>
                                                        <span class="old__price">$40.00</span>
                                                    </div>
                                                    <div
                                                        class="product__items--rating mb-15 d-flex align-items-center mb-10">
                                                        <ul class="d-flex">
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="#c7c5c2" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <span class="product__items--rating__count--number">(24)</span>
                                                    </div>
                                                    <p class="product__list--items__content--desc mb-20">Lorem, ipsum
                                                        dolor sit amet consectetur adipisicing elit. Quia voluptas dolore
                                                        doloribus architecto sequi corporis deleniti officia culpa dolor
                                                        esse consectetur eligendi, natus at rem ab quae amet molestiae quod
                                                        voluptates, illo exercitationem numquam ipsa. Est fuga ex ipsum
                                                        alias ipsa quibusdam magni harum labore voluptate.</p>
                                                    <a class="btn add__to--cart__btn2" href="cart.html">+ Add to
                                                        cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-30">
                                            <div class="product__items product__list--items d-flex">
                                                <div class="product__items--thumbnail product__list--items__thumbnail">
                                                    <a class="product__items--link" href="product-details.html">
                                                        <img class="product__items--img product__primary--img"
                                                            src="assets/img/product/product7.png" alt="product-img">
                                                        <img class="product__items--img product__secondary--img"
                                                            src="assets/img/product/product8.png" alt="product-img">
                                                    </a>
                                                    <div class="product__badge">
                                                        <span class="product__badge--items sale">Sale</span>
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
                                                <div class="product__list--items__content">
                                                    <h3 class="product__list--items__content--title h4 mb-10"><a
                                                            href="product-details.html">Fresh-whole-fish</a></h3>
                                                    <div class="product__items--price mb-10">
                                                        <span class="current__price">$38.00</span>
                                                        <span class="old__price">$40.00</span>
                                                    </div>
                                                    <div
                                                        class="product__items--rating mb-15 d-flex align-items-center mb-10">
                                                        <ul class="d-flex">
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="#c7c5c2" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <span class="product__items--rating__count--number">(24)</span>
                                                    </div>
                                                    <p class="product__list--items__content--desc mb-20">Lorem, ipsum
                                                        dolor sit amet consectetur adipisicing elit. Quia voluptas dolore
                                                        doloribus architecto sequi corporis deleniti officia culpa dolor
                                                        esse consectetur eligendi, natus at rem ab quae amet molestiae quod
                                                        voluptates, illo exercitationem numquam ipsa. Est fuga ex ipsum
                                                        alias ipsa quibusdam magni harum labore voluptate.</p>
                                                    <a class="btn add__to--cart__btn2" href="cart.html">+ Add to
                                                        cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-30">
                                            <div class="product__items product__list--items d-flex">
                                                <div class="product__items--thumbnail product__list--items__thumbnail">
                                                    <a class="product__items--link" href="product-details.html">
                                                        <img class="product__items--img product__primary--img"
                                                            src="assets/img/product/product9.png" alt="product-img">
                                                        <img class="product__items--img product__secondary--img"
                                                            src="assets/img/product/product1.png" alt="product-img">
                                                    </a>
                                                    <div class="product__badge">
                                                        <span class="product__badge--items sale">Sale</span>
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
                                                <div class="product__list--items__content">
                                                    <h3 class="product__list--items__content--title h4 mb-10"><a
                                                            href="product-details.html">Vegetables Juices</a></h3>
                                                    <div class="product__items--price mb-10">
                                                        <span class="current__price">$38.00</span>
                                                        <span class="old__price">$40.00</span>
                                                    </div>
                                                    <div
                                                        class="product__items--rating mb-15 d-flex align-items-center mb-10">
                                                        <ul class="d-flex">
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                            <li class="product__items--rating__list">
                                                                <span class="product__items--rating__icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="10.105" height="9.732"
                                                                        viewBox="0 0 10.105 9.732">
                                                                        <path data-name="star - Copy"
                                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                                            transform="translate(0 -0.018)"
                                                                            fill="#c7c5c2" />
                                                                    </svg>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                        <span class="product__items--rating__count--number">(24)</span>
                                                    </div>
                                                    <p class="product__list--items__content--desc mb-20">Lorem, ipsum
                                                        dolor sit amet consectetur adipisicing elit. Quia voluptas dolore
                                                        doloribus architecto sequi corporis deleniti officia culpa dolor
                                                        esse consectetur eligendi, natus at rem ab quae amet molestiae quod
                                                        voluptates, illo exercitationem numquam ipsa. Est fuga ex ipsum
                                                        alias ipsa quibusdam magni harum labore voluptate.</p>
                                                    <a class="btn add__to--cart__btn2" href="cart.html">+ Add to
                                                        cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination__area bg__gray--color">
                            <nav class="pagination justify-content-center">
                                <ul class="pagination__wrapper d-flex align-items-center justify-content-center">
                                    <li class="pagination__list">
                                        <a href="shop.html" class="pagination__item--arrow  link ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443"
                                                viewBox="0 0 512 512">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="48"
                                                    d="M244 400L100 256l144-144M120 256h292" />
                                            </svg>
                                            <span class="visually-hidden">page left arrow</span>
                                        </a>
                                    <li>
                                    <li class="pagination__list"><span
                                            class="pagination__item pagination__item--current">1</span></li>
                                    <li class="pagination__list"><a href="shop.html"
                                            class="pagination__item link">2</a></li>
                                    <li class="pagination__list"><a href="shop.html"
                                            class="pagination__item link">3</a></li>
                                    <li class="pagination__list"><a href="shop.html"
                                            class="pagination__item link">4</a></li>
                                    <li class="pagination__list">
                                        <a href="shop.html" class="pagination__item--arrow  link ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443"
                                                viewBox="0 0 512 512">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="48"
                                                    d="M268 112l144 144-144 144M392 256H100" />
                                            </svg>
                                            <span class="visually-hidden">page right arrow</span>
                                        </a>
                                    <li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End shop section -->
@endsection
