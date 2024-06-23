@extends('template.client')

@section('content')
    <!-- Start offcanvas filter sidebar -->
    <div class="offcanvas__filter--sidebar widget__area">
        <button type="button" class="offcanvas__filter--close" data-offcanvas>
            <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                    d="M368 368L144 144M368 144L144 368"></path>
            </svg> <span class="offcanvas__filter--close__text">Close</span>
        </button>
        <div class="offcanvas__filter--sidebar__inner">
            <div class="single__widget widget__bg">
                <h2 class="widget__title h3">Category Type Name</h2>
                <ul class="widget__form--check">
                    <form id="categoryTypeForm" action="{{ route('products.filterByCategoryType') }}" method="GET">
                        @foreach ($categoryTypes as $categoryType)
                            <li class="widget__form--check__list">
                                <label class="widget__form--check__label" for="categoryType{{ $categoryType->id }}">
                                    {{ $categoryType->type_name }}
                                </label>
                                <input class="widget__form--check__input category-type-checkbox"
                                    id="categoryType{{ $categoryType->id }}" name="category_types[]" type="checkbox"
                                    value="{{ $categoryType->id }}">
                                <span class="widget__form--checkmark"></span>
                            </li>
                        @endforeach
                    </form>
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
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                        stroke-width="32" d="M338.29 338.29L448 448" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
                <p class="product__showing--count">Menampilkan {{ $products->firstItem() }} - {{ $products->lastItem() }}
                    dari {{ $products->total() }} Produk</p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="shop__sidebar--widget widget__area d-none d-lg-block">
                        <div class="single__widget widget__bg">
                            <h2 class="widget__title h3">Category Type Name</h2>
                            <ul class="widget__form--check">
                                <form id="categoryTypeForm" action="{{ route('products.filterByCategoryType') }}" method="GET">                                    @foreach ($categoryTypes as $categoryType)
                                    <li class="widget__form--check__list">
                                        <label class="widget__form--check__label" for="categoryType{{ $categoryType->id }}">
                                            {{ $categoryType->type_name }}
                                        </label>
                                        <input class="widget__form--check__input category-type-checkbox" id="categoryType{{ $categoryType->id }}" name="category_types[]" type="checkbox" value="{{ $categoryType->id }}">
                                        <span class="widget__form--checkmark"></span>
                                    </li>
                                    @endforeach
                                    <button type="submit" class="btn btn-primary mt-3">Filter</button>
                                </form>
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
                                        @foreach ($products as $product)
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
                                                    <div
                                                        class="product__items--content product__items2--content text-center">
                                                        <a class="add__to--cart__btn">+ Tambah Ke Keranjang</a>
                                                        <h3 class="product__items--content__title h4"><a
                                                                href="{{ route('products.show', $product->id) }}">{{ $product->product_name }}</a>
                                                        </h3>
                                                        <div class="product__items--price">
                                                            <span class="current__price">Rp
                                                                {{ number_format($product->price, 0, ',', '.') }}/kg</span>
                                                            <!-- Tambahkan harga produk -->
                                                        </div>
                                                        <span class="">Stock: {{ $product->stock }}kg</span>
                                                        <!-- Tambahkan stok produk -->
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination__area bg__gray--color">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End shop section -->
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.category-type-checkbox').change(function() {
                $('#categoryTypeForm').submit();
            });
        });
    </script>
@endsection
