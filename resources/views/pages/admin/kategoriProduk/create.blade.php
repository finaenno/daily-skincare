{{-- @extends('layout.admin') --}}
{{-- @extends() --}}
{{-- 
@section('konten') --}}

<h1>Menambahkan Kategori Produk</h1>

<form action="{{route('kategoriProduk.store')}}" method="POST">
    @csrf
    @method('POST')
    <div class="form-group mt-3">
        <label for="name">Kategori Produk</label>
        <input type="text" class="form-control" name="title_kategori_produk" id="title_kategori_produk" required>
    </div>
    <div class="text-center"><button type="submit">Simpan</button></div>
</form>
{{-- 
@endsection --}}
