<ul>
    {{-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li> --}}
    <li class="dropdown"><a href="#"><span>Category</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
        @foreach($kategoriProduk as $item)
          <li><a class="nav-link scrollto" href="#">{{$item->title_kategori_produk}}</a></li>
        @endforeach
      </ul>
    </li>
    <li class="dropdown"><a href="#"><span>Brand</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
        @foreach($brandProduk as $item)
        <li><a class="nav-link scrollto" href="#">{{$item->title_brand_produk}}</a></li>
        @endforeach
      </ul>
    </li>
    <li><a class="nav-link scrollto" href="#">Testimoni</a></li>
    <li class="dropdown"><a href="#"><span>Edit</span> <i class="bi bi-chevron-down"> </i></a>
      <ul>
        <li><a class="nav-link scrollto" href="/kategoriProduk/create">(+) Kategori Baru</a></li>
        <li><a class="nav-link scrollto" href="/brandProduk/create">(+) Brand Baru</a></li>
      </ul>
    </li>
    
  </ul>