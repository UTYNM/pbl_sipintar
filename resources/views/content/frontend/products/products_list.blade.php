@extends('template.client')

@section('content')

<section class="shop__section section--padding">
    <div class="container-fluid">
        <div class="shop__header bg__gray--color d-flex align-items-center justify-content-between mb-30">
            <!-- Konten header toko -->
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <!-- Sidebar filter kategori -->
                @include('products.sidebar')
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="shop__product--wrapper">
                    <div class="tab_content">
                        <div id="product_grid" class="tab_pane active show">
                            <div class="product__section--inner product__section--style3__inner">
                                <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-3 row-cols-2 mb--n30">
                                    @foreach($products as $product)
                                    <div class="col mb-30">
                                        <div class="product__items product__items2">
                                            <div class="product__items--thumbnail">
                                                <a class="product__items--link" href="{{ route('products.show', $product->id) }}">
                                                    @if($product->photos->isNotEmpty() && $photo = $product->photos->first())
                                                    <img class="product__items--img product__primary--img" src="{{ $photo->photo_url }}" alt="{{ $product->product_name }}">
                                                    <img class="product__items--img product__secondary--img" src="{{ $photo->photo_url }}" alt="{{ $product->product_name }}">
                                                    @else
                                                    <img class="product__items--img product__primary--img" src="{{ asset('frontend/img/padi-1.png') }}" alt="{{ $product->product_name }}">
                                                    <img class="product__items--img product__secondary--img" src="{{ asset('frontend/img/padi-1.png') }}" alt="{{ $product->product_name }}">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="product__items--content product__items2--content text-center">
                                                <a class="add__to--cart__btn">+ Tambah Ke Keranjang</a>
                                                <h3 class="product__items--content__title h4"><a href="{{ route('products.show', $product->id) }}">{{ $product->product_name }}</a></h3>
                                                <div class="product__items--price">
                                                    <span class="current__price">Rp {{ number_format($product->price, 0, ',', '.') }}/kg</span>
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
                    <div class="pagination__area bg__gray--color">
                        <!-- Pagination -->
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
