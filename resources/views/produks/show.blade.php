<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Template1 Produk</title>
  </head>
  <body>

    {{-- nabar --}}
    @include('layouts.navbar')
    {{-- /navbar --}}

{{-- content --}}
<div class="section">
    <div class="container">
        {{-- row 1 --}}
        <div class="row mt-5 justify-content-center">
        {{-- row 1 --}}
            <h2>Detail Produk</h2>
        </div>
        {{-- row 2 --}}
        <div class="row mt-5">

            
            <div class="col-4 mt-3">
                <div class="card" style="width: 18rem;">
                    <img src="https://i.pinimg.com/564x/56/07/75/560775bf4b822d858e11c1324da8d79f.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$produks->nama_produk}}</h5>
                        <p class="card-text">Jumlah Produk : {{$produks->jumlah}}</p>
                        <p class="card-text">Tanggal Produksi : {{$produks->tanggal_produksi}}</p>
                        <p class="card-text">Merek Produk : {{$produks->merek->nama_merek}}</p>
                        <a href="/produk" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
            
        </div>
        {{-- row 2 --}}
    </div>
</div>
{{-- /content --}}

    {{-- footer --}}
    @include('layouts.footer')
    {{-- /footer --}}
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>