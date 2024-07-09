@extends('template.client')
@section('content')
    <!-- cart section start -->
    <section class="cart__section section--padding">
        <div class="container">
            <div class="cart__section--inner">
                <form action="#"> 
                    <h2 class="cart__title mb-40">Dashboard Produk</h2>
                    <div class="cart__table">
                        <table class="cart__table--inner">
                            <thead class="cart__table--header">
                                <tr class="cart__table--header__items">
                                    <th class="cart__table--header__list">Nama</th>
                                    <th class="cart__table--header__list">Harga</th>
                                    <th class="cart__table--header__list">Stok</th>
                                    <th class="cart__table--header__list">Kategori</th>
                                    <th class="cart__table--header__list text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="cart__table--body">
                                @foreach($products as $product)
                                    <tr class="cart__table--body__items">
                                        <td class="cart__table--body__list">
                                            <div class="cart__product d-flex align-items-center">
                                                <div class="cart__thumbnail">
                                                    @if($product->photos->isNotEmpty())
                                                        <a href="{{ route('products.show', $product->id) }}">
                                                            <img class="border-radius-5" src="{{ $product->photos->first()->photo_url }}" alt="{{ $product->product_name }}" style="width: 50px; height: auto;">
                                                        </a>
                                                    @else
                                                        <a href="{{ route('products.show', $product->id) }}">
                                                            <img class="border-radius-5" src="path/to/default/image.png" alt="default-product" style="width: 50px; height: auto;">
                                                        </a>
                                                    @endif
                                                </div>
                                                <div class="cart__content">
                                                    <h3 class="cart__content--title h4">
                                                        <a href="{{ route('products.show', $product->id) }}">
                                                            {{ $product->product_name }}
                                                        </a>
                                                    </h3>
                                                    <span class="cart__content--variant">Stok: {{ $product->stock }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart__table--body__list">
                                            <span class="cart__price">Rp {{ number_format($product->price, 0, ',', '.') }}/kg</span>
                                        </td>
                                        <td class="cart__table--body__list">
                                            <span class="in__stock text__secondary">{{ $product->stock }}</span>
                                        </td>
                                        <td class="cart__table--body__list">
                                            <span class="in__stock text__secondary">{{ $product->category->category_name }}</span>
                                        </td>
                                        <td class="cart__table--body__list text-right">
                                            <!-- Tombol Edit dengan ikon -->
                                            <a class="wishlist__cart--btn btn" href="{{ route('products.edit', $product->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            
                                            <!-- Form untuk Tombol Hapus dengan ikon -->
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="wishlist__cart--btn btn">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table> 
                    </div> 
                </form> 
            </div>
        </div>     
    </section>
    <!-- cart section end -->
@endsection
