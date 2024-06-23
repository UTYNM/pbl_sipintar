@extends('template.client')
@section('content')
    <!-- Start checkout page area -->
    <div class="checkout__page--area">
        <div class="container">
            <div class="checkout__page--inner d-flex">
                <div class="main checkout__mian" style="width: 100%;padding: 0 0 0 0;">
                    <main class="main__content_wrapper section--padding pt-0">
                        <div class="section__shipping--address">
                            <div class="section__header mb-25">
                                <h2 class="section__header--title h3">Jual Produk</h2>
                            </div>
                            <div class="section__shipping--address__content">
                                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 mb-12">
                                            <div class="checkout__input--list ">
                                                <label for="product_name">
                                                    <input class="form control checkout__input--field border-radius-5"
                                                        placeholder="Nama Produk" id="product_name" name="product_name"
                                                        required type="text">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 mb-12">
                                            <div class="checkout__input--list">
                                                <label for="price">
                                                    <input class=" form control checkout__input--field border-radius-5"
                                                        placeholder="Harga" id="price" name="price" required
                                                        type="number">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Stok"
                                                        id="stock" name="stock" required type="number">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-12">
                                            <div class="checkout__input--list checkout__input--select select">
                                                <label class="checkout__select--label" for="category_id">Kategori</label>
                                                <select class="checkout__input--select__field border-radius-5"
                                                    id="category_id" name="category_id" required>
                                                    <option value="">-- Pilih Kategori --</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->category_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-12">
                                            <div class="checkout__input--list checkout__input--select select">
                                                <label class="checkout__select--label" for="category_type_id">Sub
                                                    Kategori</label>
                                                <select class="checkout__input--select__field border-radius-5"
                                                    id="category_type_id" name="category_type_id" required>
                                                    <option value="">-- Pilih Sub Kategori --</option>
                                                    <!-- Subcategories will be populated here dynamically -->
                                                </select>
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-4 mb-12">
                                            <div class="checkout__input--list checkout__input--select select">
                                                <label class="checkout__select--label" for="category_type_id">Tipe Kategori</label>
                                                <select class="checkout__input--select__field border-radius-5"
                                                    id="category_type_id" name="category_type_id" required>
                                                    <option value="">-- Pilih Tipe Kategori --</option>
                                                    <!-- Options akan diisi secara dinamis menggunakan JavaScript -->
                                                </select>
                                            </div>
                                        </div> --}}
                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list">
                                                <textarea class="form control contact__form--textarea" id="description" name="description"
                                                    placeholder="Deskripsi Produk"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list">
                                                <label class="contact__form--label" for="photos">Upload Gambar<span
                                                        class="contact__form--label__star">*</span></label>
                                                <input class="checkout__input--field border-radius-5"
                                                    style="padding: 1rem; height: 5.5rem;" placeholder="Gambar"
                                                    type="file" id="photos" name="photos[]" multiple accept="image/*"
                                                    maxlength="5">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkout__content--step__footer d-flex align-items-center"
                                        style="padding-bottom: 2rem;">
                                        <button type="submit"
                                            class="continue__shipping--btn col-12 btn border-radius-5">Konfirmasi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <!-- End checkout page area -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#category_id').change(function() {
                var categoryId = $(this).val();
                if (categoryId) {
                    $.ajax({
                        url: '/get-category-types/' + categoryId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#category_type_id').empty();
                            $('#category_type_id').append(
                                '<option value="">-- Pilih Sub Kategori --</option>');
                            $.each(data, function(key, value) {
                                $('#category_type_id').append('<option value="' + value
                                    .id + '">' + value.type_name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#category_type_id').empty();
                    $('#category_type_id').append('<option value="">-- Pilih Sub Kategori --</option>');
                }
            });
        });
    </script>
@endsection
