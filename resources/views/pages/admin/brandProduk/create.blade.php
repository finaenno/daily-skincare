@extends('layouts.admin')

@section('title')
    Menambahkan Brand Produk
@endsection

@section('section-title')
<h2>Menambahkan Brand Produk</h2>
@endsection

@section('content')
            <form action="{{route('brandProduk.store')}}" method="POST">
                @csrf
                @method('POST')
                <div class="form-group mt-3">
                    <label for="name">Brand Produk</label>
                    <input type="text" class="form-control" name="title_brand_produk" id="title_brand_produk" required>
                </div>
                <br>
                <div class="text-center"><button type="submit">Simpan</button></div>

        </div>
@endsection

