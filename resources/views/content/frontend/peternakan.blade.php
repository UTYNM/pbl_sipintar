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
                    <li class="widget__form--check__list">
                        <label class="widget__form--check__label" for="check1">Tanaman Pangan</label>
                        <input class="widget__form--check__input" id="check1" type="checkbox">
                        <span class="dget__form--checkmark"></span>
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
                            <form id="sortForm" method="GET" action="{{ route('peternakan.index') }}">
                                <!-- Preserve existing query parameters -->
                                <input type="hidden" name="search" value="{{ request('search') }}">
                                @if (is_array(request('type_name')))
                                    @foreach (request('type_name') as $typeName)
                                        <input type="hidden" name="type_name[]" value="{{ $typeName }}">
                                    @endforeach
                                @endif
                    
                                <select class="product__view--select" name="sort_order" id="sortOrder">
                                    <option value="newest" {{ $sortOrder === 'newest' ? 'selected' : '' }}>Terbaru</option>
                                    <option value="oldest" {{ $sortOrder === 'oldest' ? 'selected' : '' }}>Terlama</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    
                    

                    <div class="product__view--mode__list product__view--search d-xl-block d-none">
                        <form class="product__view--search__form" action="{{ route('peternakan.index') }}" method="GET">
                            <label>
                                <input class="product__view--search__input border-0" name="search"
                                    placeholder="Cari Hasil Pertanian" type="text" value="{{ request('search') }}">
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
                            <form id="sortForm" method="GET" action="{{ route('peternakan.index') }}">
                                <ul class="widget__form--check">
                                    @foreach ($categoryTypes as $categoryType)
                                        <li class="widget__form--check__list">
                                            <label class="widget__form--check__label" for="check{{ $categoryType->id }}">
                                                <input class="widget__form--check__input"
                                                    id="check{{ $categoryType->id }}" name="type_name[]" type="checkbox"
                                                    value="{{ $categoryType->type_name }}"
                                                    {{ in_array($categoryType->type_name, $selectedTypeNames) ? 'checked' : '' }}>
                                                {{ $categoryType->type_name }}
                                                <span class="widget__form--checkmark"></span>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </form>
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
                                                        </div>
                                                        <span class="">Stock: {{ $product->stock }}kg</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination__area bg__gray--color">
                            <nav class="pagination justify-content-center">
                                <ul class="pagination__wrapper d-flex align-items-center justify-content-center">
                                    <!-- Previous Page Link -->
                                    @if ($products->onFirstPage())
                                        <li class="pagination__list disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                            <span class="pagination__item--arrow" aria-hidden="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292" />
                                                </svg>
                                            </span>
                                        </li>
                                    @else
                                        <li class="pagination__list">
                                            <a href="{{ $products->previousPageUrl() }}" class="pagination__item--arrow link" rel="prev" aria-label="@lang('pagination.previous')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292" />
                                                </svg>
                                            </a>
                                        </li>
                                    @endif
                        
                                    <!-- Pagination Elements -->
                                    @foreach ($products->links()->elements as $element)
                                        <!-- Make three dots -->
                                        @if (is_string($element))
                                            <li class="pagination__list disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                                        @endif
                        
                                        <!-- Array Of Links -->
                                        @if (is_array($element))
                                            @foreach ($element as $page => $url)
                                                @if ($page == $products->currentPage())
                                                    <li class="pagination__list"><span class="pagination__item pagination__item--current">{{ $page }}</span></li>
                                                @else
                                                    <li class="pagination__list"><a href="{{ $url }}" class="pagination__item link">{{ $page }}</a></li>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                        
                                    <!-- Next Page Link -->
                                    @if ($products->hasMorePages())
                                        <li class="pagination__list">
                                            <a href="{{ $products->nextPageUrl() }}" class="pagination__item--arrow link" rel="next" aria-label="@lang('pagination.next')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100" />
                                                </svg>
                                            </a>
                                        </li>
                                    @else
                                        <li class="pagination__list disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                                            <span class="pagination__item--arrow" aria-hidden="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100" />
                                                </svg>
                                            </span>
                                        </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>                        
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End shop section -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.widget__form--check__input').change(function() {
                $('#filterForm').submit();
            });

            // Ensure the label click also triggers checkbox change
            $('.widget__form--check__label').click(function(event) {
                if (event.target.tagName !== 'INPUT') {
                    var checkbox = $(this).find('.widget__form--check__input');
                    checkbox.prop('checked', !checkbox.prop('checked')).change();
                }
            });

            $('.product__view--search__input').on('input', function() {
                $(this).closest('form').submit();
            });
            $('#sortOrder').change(function() {
                $('#sortForm').submit();
            });
        });
    </script>
@endsection
