@extends('template.client')
@section('content')
    <!-- Start edit profile page area -->
    <div class="edit__profile--area">
        <div class="container">
            <div class="edit__profile--inner">
                <div class="main edit__main" style="width: 100%;padding: 0 0 0 0;">
                    <main class="main__content_wrapper section--padding pt-0">
                        <div class="section__edit--profile">
                            <div class="section__header mb-25">
                                <h2 class="section__header--title h3">Edit Profil</h2>
                            </div>
                            <div class="section__edit--profile__content">
                                <form action="{{ route('profile.update', auth()->user()->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-lg-6 mb-12">
                                            <div class="edit__input--list">
                                                <label for="name">Nama</label>
                                                <input class="form-control edit__input--field border-radius-5"
                                                    id="name" name="name" type="text"
                                                    value="{{ auth()->user()->name }}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-12">
                                            <div class="edit__input--list">
                                                <label for="phone_number">Nomor Handphone</label>
                                                <input class="form-control edit__input--field border-radius-5"
                                                    id="phone_number" name="phone_number" type="text"
                                                    value="{{ auth()->user()->phone_number }}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-12">
                                            <div class="edit__input--list">
                                                <label for="address">Alamat</label>
                                                <textarea class="form-control edit__input--field border-radius-5"
                                                    id="address" name="address" rows="3"
                                                    required>{{ auth()->user()->address }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-12">
                                            <div class="edit__input--list">
                                                <label for="district_id">Kecamatan</label>
                                                <select class="form-control edit__input--field border-radius-5"
                                                    id="district_id" name="district_id" required>
                                                    <option value="{{ auth()->user()->district->id }}">
                                                        {{ auth()->user()->district->name }}</option>
                                                    <!-- Options will be populated dynamically -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-12">
                                            <div class="edit__input--list">
                                                <label for="email">Email</label>
                                                <input class="form-control edit__input--field border-radius-5"
                                                    id="email" name="email" type="email"
                                                    value="{{ auth()->user()->email }}" required>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-12">
                                            <div class="edit__input--list">
                                                <button type="submit"
                                                    class="update__profile--btn btn border-radius-5">Simpan
                                                    Perubahan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <!-- End edit profile page area -->
@endsection
