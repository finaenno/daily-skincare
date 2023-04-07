@extends('layouts.admin')

@section('title')
    Daftar Produk
@endsection

@section('section-title')
    <h2>Daftar Produk</h2>
@endsection

@section('content')
{{-- 
<h1>Daftar Produk</h1> --}}
@foreach ($itemProduk as $item)
    <h3>{{$loop->iteration}}. {{$item->nama_produk}}</h3>
    <h4>{{$item->deskripsi_produk}}</h4>
    <h4>{{$item->harga_produk}}</h4>
    <form action="{{route('itemProduk.destroy', $item->id_produk)}}" method="POST">
      @csrf
      @method('DELETE')
      <button class="bi bi-trash" type="submit" style="border: none; background:none;">HAPUS</button>
  </form>
  <form action="{{route('itemProduk.edit', $item->id_produk)}}" method="GET">
      @csrf
      @method('GET')
      <button class="ri-edit-2-line" type="submit" style="border: none; background:none;">EDIT</button>
  </form>
@endforeach

<br>
<br>
<div class="text-center"><button type="submit"><a href="/itemProduk/create">(+) Produk</a></button></div>

@endsection