@extends('template.client')
@section('content')
   <!-- Start checkout page area -->
   <div class="checkout__page--area">
    <div class="container">
        <div class="checkout__page--inner d-flex">
            <div class="main checkout__mian" style="width: 100%;padding: 0 0 0 0;">
                <main class="main__content_wrapper section--padding pt-0">
                    <form action="#">
                        {{-- <div class="checkout__content--step section__contact--information">
                            <div class="section__header checkout__section--header d-flex align-items-center justify-content-between mb-25">
                                <h2 class="section__header--title h3">Contact information</h2>
                                <p class="layout__flex--item">
                                    Already have an account?
                                    <a class="layout__flex--item__link" href="login.html">Log in</a>  
                                </p>
                            </div>
                            <div class="customer__information">
                                <div class="checkout__email--phone mb-12">
                                    <label>
                                        <input class="checkout__input--field border-radius-5" placeholder="Email or mobile phone mumber"  type="text">
                                    </label>
                                </div>
                                <div class="checkout__checkbox">
                                    <input class="checkout__checkbox--input" id="check1" type="checkbox">
                                    <span class="checkout__checkbox--checkmark"></span>
                                    <label class="checkout__checkbox--label" for="check1">
                                        Email me with news and offers</label>
                                </div>
                            </div>
                        </div> --}}
                        <div class="checkout__content--step section__shipping--address">
                            <div class="section__header mb-25">
                                <h2 class="section__header--title h3">Jual Produk</h2>
                            </div>
                            <div class="section__shipping--address__content">
                                <div class="row">
                                    <div class="col-lg-12 mb-12">
                                        <div class="checkout__input--list ">
                                            <label>
                                                <input class="checkout__input--field border-radius-5" placeholder="Nama Produk"  type="text">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 mb-12">
                                        <div class="checkout__input--list">
                                            <label>
                                                <input class="checkout__input--field border-radius-5" placeholder="Harga"  type="text">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 mb-12">
                                        <div class="checkout__input--list checkout__input--select select">
                                            <label class="checkout__select--label" for="country">Satuan Harga</label>
                                            <select class="checkout__input--select__field border-radius-5" id="country">
                                                <option value="1">Gram</option>
                                                <option value="2">Kilogram</option>
                                                <option value="3">Ekor</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 mb-12">
                                        <div class="checkout__input--list">
                                            <label>
                                                <input class="checkout__input--field border-radius-5" placeholder="Stok"  type="text">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 mb-12">
                                        <div class="checkout__input--list checkout__input--select select">
                                            <label class="checkout__select--label" for="country">Satuan Stok</label>
                                            <select class="checkout__input--select__field border-radius-5" id="country">
                                                <option value="1">Gram</option>
                                                <option value="2">Kilogram</option>
                                                <option value="3">Ekor</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-12">
                                        <div class="checkout__input--list checkout__input--select select">
                                            <label class="checkout__select--label" for="country">Kategori</label>
                                            <select class="checkout__input--select__field border-radius-5" id="country">
                                                <option value="1">Pertanian</option>
                                                <option value="2">Peternakan</option>
                                                <option value="3">Perikanan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-12">
                                        <div class="checkout__input--list">
                                            {{-- <label class="contact__form--label" for="input5">Deskripsi<span class="contact__form--label__star">*</span>
                                            </label> --}}
                                            <textarea class="contact__form--textarea" name="message" id="input5" placeholder="Deskripsi Produk"></textarea>
    
                                        </div>
                                    </div>
                                    <div class="col-12 mb-12">
                                        <div class="checkout__input--list">
                                            <label>
                                                <label class="contact__form--label" for="input5">Upload Gambar<span class="contact__form--label__star">*</span>
                                                </label>
                                                <input class="checkout__input--field border-radius-5" style="
                                                padding: 1rem; height: 5.5rem;
                                            " placeholder="Gambar"  type="file">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <table class="cart__table--inner">
                                    <tbody class="cart__table--body">
                                        <tr class="cart__table--body__items">
                                            <td class="cart__table--body__list">
                                                <div class="product__image two  d-flex align-items-center">
                                                    <div class="product__thumbnail border-radius-5">
                                                        <a href="product-details.html"><img class="border-radius-5" src="frontend/img/naga.png" alt="cart-product"></a>
                                                      
                                                    </div>
                                                    <div class="product__description">
                                                        <h3 class="product__description--name h4"><a href="product-details.html">IMG2390343_239239.jpg</a></h3>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <span class="cart__price text-danger">Hapus</span>
                                            </td>
                                        </tr>
                                        <tr class="cart__table--body__items">
                                            <td class="cart__table--body__list">
                                                <div class="product__image two  d-flex align-items-center">
                                                    <div class="product__thumbnail border-radius-5">
                                                        <a href="product-details.html"><img class="border-radius-5" src="frontend/img/naga-1.png" alt="cart-product"></a>
                                                      
                                                    </div>
                                                    <div class="product__description">
                                                        <h3 class="product__description--name h4"><a href="product-details.html">IMG2390343_239239.jpg</a></h3>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <span class="cart__price text-danger">Hapus</span>
                                            </td>
                                        </tr>
                                        <tr class="cart__table--body__items">
                                            <td class="cart__table--body__list">
                                                <div class="product__image two  d-flex align-items-center">
                                                    <div class="product__thumbnail border-radius-5">
                                                        <a href="product-details.html"><img class="border-radius-5" src="frontend/img/naga-2.png" alt="cart-product"></a>
                                                      
                                                    </div>
                                                    <div class="product__description">
                                                        <h3 class="product__description--name h4"><a href="product-details.html">IMG2390343_239239.jpg</a></h3>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <span class="cart__price text-danger">Hapus</span>
                                            </td>
                                        </tr>
                                        <tr class="cart__table--body__items">
                                            <td class="cart__table--body__list">
                                                <div class="product__image two  d-flex align-items-center">
                                                    <div class="product__thumbnail border-radius-5">
                                                        <a href="product-details.html"><img class="border-radius-5" src="frontend/img/naga-3.png" alt="cart-product"></a>
                                                      
                                                    </div>
                                                    <div class="product__description">
                                                        <h3 class="product__description--name h4"><a href="product-details.html">IMG2390343_239239.jpg</a></h3>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <span class="cart__price text-danger">Hapus</span>
                                            </td>
                                        </tr>
                                        <tr class="cart__table--body__items">
                                            <td class="cart__table--body__list">
                                                <div class="product__image two  d-flex align-items-center">
                                                    <div class="product__thumbnail border-radius-5">
                                                        <a href="product-details.html"><img class="border-radius-5" src="frontend/img/naga-4.png" alt="cart-product"></a>
                                                      
                                                    </div>
                                                    <div class="product__description">
                                                        <h3 class="product__description--name h4"><a href="product-details.html">IMG2390343_239239.jpg</a></h3>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <span class="cart__price text-danger">Hapus</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table> 
                                {{-- <div class="checkout__checkbox">
                                    <input class="checkout__checkbox--input" id="check2" type="checkbox">
                                    <span class="checkout__checkbox--checkmark"></span>
                                    <label class="checkout__checkbox--label" for="check2">
                                        Save this information for next time</label>
                                </div> --}}
                            </div>
                        </div>
                        <div class="checkout__content--step__footer d-flex align-items-center" style="
                        padding-bottom: 2rem;
                    ">
                            <a class="continue__shipping--btn col-12 btn border-radius-5" href="checkout-2.html">Konfirmasi</a>
                            {{-- <a class="previous__link--content" href="cart.html">Return to cart</a> --}}
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div>
</div>
<!-- End checkout page area -->
@endsection