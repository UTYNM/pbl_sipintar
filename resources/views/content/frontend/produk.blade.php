@extends('template.client')

@section('content')
<div class="container">
    <h1>{{ $product->product_name }}</h1>
    <p>Category: {{ $product->category->category_name }}</p>
    <p>Description: {{ $product->description }}</p>
    <p>Price: ${{ $product->price }}</p>
    <p>Stock: {{ $product->stock }}</p>
    <h3>Photos</h3>
    <div>
        @foreach($product->photos as $photo)
            <img src="{{ $photo->photo_url }}" alt="Product Photo" style="width: 200px;">
        @endforeach
    </div>
</div>
@endsection
