<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/detailBlog.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/navigasi.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM Serif Display">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost">
    <title>Detail Blog</title>
</head>
<body>
    <div id="detailBlog">
        @include('bagian.navigasiAuth')
        <div class="kotakDatadetailBlog">
            <div class="kontenInfo">
                <div class="nilaiKotakDatadetailBlog">{{ $blog->created_at->diffForHumans() }}</div>
                <div class="nilaiKotakDatadetailBlog">
                    {{ $blog->lihat_blog }}
                </div>
            </div>
        <div class="kotakdetailBlog">
            <div class="tanggaldetailBlog">{{ $blog->created_at->format('d F Y') }}</div>
            <div class="tanggaldetailBlog">  
            @if ($blog->profil)
                {{ $blog->profil->nama }}
            @else
                Penulis tidak ditemukan
            @endif
            </div>
            <div class="juduldetailBlog">{{ $blog->judul_blog }}
                <div class="teksjuduldetailBlog">
                    {{ $blog->deskripsi_blog }}
                </div>
            </div>
        </div>
        </div>
        <div class="gambardetailBlog">
            <img src="{{ asset($blog->gambar_blog1) }}" alt="">
        </div>
        @include('bagian.footer')
    </div>
</body>
</html>