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
                                <h2 class="section__header--title h3">Tambah Produk</h2>
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

                                        <div id="thumbnail-container" class="thumbnail-container"></div>
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
                        url: '/pangan-ketapang/get-category-types/' + categoryId,
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
        let selectedFiles = []; // Array to store selected files

        document.getElementById('photos').addEventListener('change', function(event) {
            const files = event.target.files;
            const thumbnailContainer = document.getElementById('thumbnail-container');
            thumbnailContainer.innerHTML = ''; // Clear existing thumbnails
            selectedFiles = []; // Clear selectedFiles array

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const reader = new FileReader();

                reader.onload = function(e) {
                    const thumbnail = document.createElement('div');
                    thumbnail.classList.add('thumbnail-item');
                    thumbnail.innerHTML = `
                <div class="thumbnail-image">
                    <img src="${e.target.result}" alt="Thumbnail">
                </div>
            `;
                    thumbnailContainer.appendChild(thumbnail);
                };

                reader.readAsDataURL(file);
                selectedFiles.push(file); // Add file to selectedFiles array
            }
        });
    </script>

    <style>
        .thumbnail-container {
            display: flex;
            overflow-x: auto;
            /* Mengaktifkan pengguliran horizontal jika melebihi lebar */
            gap: 10px;
            /* Jarak antara setiap thumbnail */
            padding: 10px 15px;
            /* Padding atas dan bawah */
        }

        .thumbnail-item {
            flex: 0 0 auto;
            /* Thumbnail tidak fleksibel, tetap ukuran tetap */
            width: 100px;
            /* Lebar thumbnail */
            height: 100px;
            /* Tinggi thumbnail */
            overflow: hidden;
            /* Gambar tidak keluar dari thumbnail */
            position: relative;
            /* Untuk menempatkan tombol hapus jika diperlukan */
            border: 1px solid #ccc;
            /* Garis pinggir thumbnail */
        }

        .thumbnail-item .thumbnail-image {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            /* Pusatkan gambar secara horizontal */
            align-items: center;
            /* Pusatkan gambar secara vertikal */
        }

        .thumbnail-item img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
            /* Sesuaikan gambar ke dalam thumbnail */
        }
    </style>
@endsection
