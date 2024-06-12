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
                                    <p class="product__tab--content__desc">Amat Yanto</p>
                                    <h2 class="product__tab--content__title h5 mb-10">Nomor Whatsapp</h2>
                                    <p class="product__tab--content__desc">0895-1234-5678</p>
                                    <h2 class="product__tab--content__title h5 mb-10">Alamat</h2>
                                    <p class="product__tab--content__desc">Jl. Cempaka Putih, Benua Kayong, Ketapang</p>
                                    <a class="wishlist__cart--btn btn" href="cart.html">Edit</a>
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
                                                                    <a class="wishlist__cart--btn btn" href="{{ route('products.update', $product->id) }}">Edit</a>
                                                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="wishlist__cart--btn btn">Hapus</button>
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
    
    {{-- <div class="account__wrapper">
        <div class="account__content">
            <h2 class="account__content--title h3 mb-20">Orders History</h2>
            <div class="account__table--area">
                <table class="account__table">
                    <thead class="account__table--header">
                        <tr class="account__table--header__child">
                            <th class="account__table--header__child--items">Order</th>
                            <th class="account__table--header__child--items">Date</th>
                            <th class="account__table--header__child--items">Payment Status</th>
                            <th class="account__table--header__child--items">Fulfillment Status</th>
                            <th class="account__table--header__child--items">Total</th>	 	 	 	
                        </tr>
                    </thead>
                    <tbody class="account__table--body mobile__none">
                        <tr class="account__table--body__child">
                            <td class="account__table--body__child--items">#2014</td>
                            <td class="account__table--body__child--items">November 24, 2022</td>
                            <td class="account__table--body__child--items">Paid</td>
                            <td class="account__table--body__child--items">Unfulfilled</td>
                            <td class="account__table--body__child--items">$40.00 USD</td>
                        </tr>
                        <tr class="account__table--body__child">
                            <td class="account__table--body__child--items">#2024</td>
                            <td class="account__table--body__child--items">November 24, 2022</td>
                            <td class="account__table--body__child--items">Paid</td>
                            <td class="account__table--body__child--items">Fulfilled</td>
                            <td class="account__table--body__child--items">$44.00 USD</td>
                        </tr>
                        <tr class="account__table--body__child">
                            <td class="account__table--body__child--items">#2164</td>
                            <td class="account__table--body__child--items">November 24, 2022</td>
                            <td class="account__table--body__child--items">Paid</td>
                            <td class="account__table--body__child--items">Unfulfilled</td>
                            <td class="account__table--body__child--items">$36.00 USD</td>
                        </tr>
                        <tr class="account__table--body__child">
                            <td class="account__table--body__child--items">#2345</td>
                            <td class="account__table--body__child--items">November 24, 2022</td>
                            <td class="account__table--body__child--items">Paid</td>
                            <td class="account__table--body__child--items">Unfulfilled</td>
                            <td class="account__table--body__child--items">$87.00 USD</td>
                        </tr>
                        <tr class="account__table--body__child">
                            <td class="account__table--body__child--items">#1244</td>
                            <td class="account__table--body__child--items">November 24, 2022</td>
                            <td class="account__table--body__child--items">Paid</td>
                            <td class="account__table--body__child--items">Fulfilled</td>
                            <td class="account__table--body__child--items">$66.00 USD</td>
                        </tr>
                        <tr class="account__table--body__child">
                            <td class="account__table--body__child--items">#3455</td>
                            <td class="account__table--body__child--items">November 24, 2022</td>
                            <td class="account__table--body__child--items">Paid</td>
                            <td class="account__table--body__child--items">Fulfilled</td>
                            <td class="account__table--body__child--items">$55.00 USD</td>
                        </tr>
                        <tr class="account__table--body__child">
                            <td class="account__table--body__child--items">#4566</td>
                            <td class="account__table--body__child--items">November 24, 2022</td>
                            <td class="account__table--body__child--items">Paid</td>
                            <td class="account__table--body__child--items">Unfulfilled</td>
                            <td class="account__table--body__child--items">$87.00 USD</td>
                        </tr>
                    </tbody>
                    <tbody class="account__table--body mobile__block">
                        <tr class="account__table--body__child">
                            <td class="account__table--body__child--items">
                                <strong>Order</strong>
                                <span>#2014</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Date</strong>
                                <span>November 24, 2022</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Payment Status</strong>
                                <span>Paid</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Fulfillment Status</strong>
                                <span>Unfulfilled</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Total</strong>
                                <span>$40.00 USD</span>
                            </td>
                        </tr>
                        <tr class="account__table--body__child">
                            <td class="account__table--body__child--items">
                                <strong>Order</strong>
                                <span>#2014</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Date</strong>
                                <span>November 24, 2022</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Payment Status</strong>
                                <span>Paid</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Fulfillment Status</strong>
                                <span>Unfulfilled</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Total</strong>
                                <span>$40.00 USD</span>
                            </td>
                        </tr>
                        <tr class="account__table--body__child">
                            <td class="account__table--body__child--items">
                                <strong>Order</strong>
                                <span>#2014</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Date</strong>
                                <span>November 24, 2022</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Payment Status</strong>
                                <span>Paid</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Fulfillment Status</strong>
                                <span>Unfulfilled</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Total</strong>
                                <span>$40.00 USD</span>
                            </td>
                        </tr>
                        <tr class="account__table--body__child">
                            <td class="account__table--body__child--items">
                                <strong>Order</strong>
                                <span>#2014</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Date</strong>
                                <span>November 24, 2022</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Payment Status</strong>
                                <span>Paid</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Fulfillment Status</strong>
                                <span>Unfulfilled</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Total</strong>
                                <span>$40.00 USD</span>
                            </td>
                        </tr>
                        <tr class="account__table--body__child">
                            <td class="account__table--body__child--items">
                                <strong>Order</strong>
                                <span>#2014</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Date</strong>
                                <span>November 24, 2022</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Payment Status</strong>
                                <span>Paid</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Fulfillment Status</strong>
                                <span>Unfulfilled</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Total</strong>
                                <span>$40.00 USD</span>
                            </td>
                        </tr>
                        <tr class="account__table--body__child">
                            <td class="account__table--body__child--items">
                                <strong>Order</strong>
                                <span>#2014</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Date</strong>
                                <span>November 24, 2022</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Payment Status</strong>
                                <span>Paid</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Fulfillment Status</strong>
                                <span>Unfulfilled</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Total</strong>
                                <span>$40.00 USD</span>
                            </td>
                        </tr>
                        <tr class="account__table--body__child">
                            <td class="account__table--body__child--items">
                                <strong>Order</strong>
                                <span>#2014</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Date</strong>
                                <span>November 24, 2022</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Payment Status</strong>
                                <span>Paid</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Fulfillment Status</strong>
                                <span>Unfulfilled</span>
                            </td>
                            <td class="account__table--body__child--items">
                                <strong>Total</strong>
                                <span>$40.00 USD</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}