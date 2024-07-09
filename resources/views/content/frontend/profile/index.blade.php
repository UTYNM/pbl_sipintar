@extends('template.client')
@section('content')
<section class="my__account--section section--padding">
    <div class="container">
        <div class="my__account--section__inner border-radius-10 d-flex">
            <div class="account__left--sidebar">
                <h2 class="account__content--title h3 mb-20">Dashboard Akun</h2>
                <ul class="product__tab--one">
                    <li class="product__details--tab__list active" data-toggle="tab" data-target="#profil">Profil Akun</li>
                    {{-- <li class="product__details--tab__list" data-toggle="tab" data-target="#katalog">Katalog</li> --}}
                    
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button style="background-color: transparent; border: none; color: #000;" type="submit" class="product__details--tab__list">Logout</button>
                     
                    </form>
                    
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
                                <a class="wishlist__cart--btn btn" href="{{ route('profile.edit', auth()->user()->id) }}">Edit Profil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

