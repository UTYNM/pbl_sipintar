@extends('template.client')
@section('content')
    <section class="my__account--section section--padding">
        <div class="container">
            {{-- <p class="account__welcome--text">Hello, Admin welcome to your dashboard!</p> --}}
            <div class="my__account--section__inner border-radius-10 d-flex">
                <div class="account__left--sidebar">
                    <h2 class="account__content--title h3 mb-20">Dashboard Akun</h2>
                    <ul class="product__tab--one">
                        <li class="product__details--tab__list active" data-toggle="tab" data-target="#profil">Profil Akun</li>
                        <li class="product__details--tab__list" data-toggle="tab" data-target="#katalog">Katalog</li>
                    </ul>
                </div>
                <div class="product__details--tab__inner border-radius-10">
                    <div class="tab_content">
                        <div id="profil" class="tab_pane active show">
                            <div class="product__tab--content">
                                <div class="product__tab--content__step mb-30">
                                    <h2 class="product__tab--content__title h5 mb-10">Username</h2>
                                    <p class="product__tab--content__desc">{{ auth()->user()->name }}</p>
                                    <h2 class="product__tab--content__title h5 mb-10">Nomor Handphone</h2>
                                    <p class="product__tab--content__desc">{{ auth()->user()->phone_number }}</p>
                                    <h2 class="product__tab--content__title h5 mb-10">Alamat</h2>
                                    <p class="product__tab--content__desc">{{ auth()->user()->address }}</p>
                                    <h2 class="product__tab--content__title h5 mb-10">Kecamatan</h2>
                                    <p class="product__tab--content__desc">{{ auth()->user()->district->name }}</p>                                    
                                    <h2 class="product__tab--content__title h5 mb-10">Email</h2>
                                    <p class="product__tab--content__desc">{{ auth()->user()->email }}</p>
                                    <h2 class="product__tab--content__title h5 mb-10">Edit Akun</h2>
                                    <a class="wishlist__cart--btn btn" href="#">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div id="katalog" class="tab_pane">
                            <div class="product__tab--content">
                                <div class="product__tab--content__step mb-30">
                                    <h2 class="product__tab--content__title h5 mb-10">Produk</h2>
                                    <div class="container">
                                        <div class="cart__section--inner">
                                            <div class="cart__table">
                                                <table class="cart__table--inner">
                                                    <thead class="cart__table--head">
                                                        <tr class="cart__table--head__items">
                                                            <th class="cart__table--head__list">Nama Produk</th>
                                                            <th class="cart__table--head__list">Harga</th>
                                                            <th class="cart__table--head__list">Stok</th>
                                                            <th class="cart__table--head__list">Kategori</th>
                                                            <th class="cart__table--head__list">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="cart__table--body">
                                                        @foreach($products as $product)
                                                            <tr class="cart__table--body__items">
                                                                <td class="cart__table--body__list">
                                                                    <div class="cart__product d-flex align-items-center">
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
                                                                    <span class="in__stock text__secondary">{{ $product->category->category_name         }}</span>
                                                                </td>
                                                                <td class="cart__table--body__list text-right">
                                                                    <!-- Tombol Edit dengan ikon -->
                                                                    <a class="wishlist__cart--btn btn" href="{{ route('products.update', $product->id) }}">
                                                                        <i class="fas fa-edit"></i>
                                                                    </a>
                                                                
                                                                    <!-- Form untuk Tombol Hapus dengan ikon -->
                                                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    @endsection