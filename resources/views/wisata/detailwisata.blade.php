<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/detailWisata.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/banerHeader.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/navigasi.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM Serif Display">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost">
    <title>Detail Wisata</title>
</head>
<body>
    <div id="detailBlog">
        @include('bagian.navigasiAuth')
        @include('bagian.banerHeaderWisata')
        <div class="kotakDatadetailBlog">
            <div class="nilaiKotakDatadetailBlog">{{ $wisata->created_at->diffForHumans() }}</div>
            <div class="nilaiKotakDatadetailBlog">{{ $wisata->lihat_wisata }} Kali dikunjungi</div>
        <div class="kotakdetailBlog">
            <div class="tanggaldetailBlog">{{ $wisata->created_at->format('d F Y') }}</div>
            <div class="tanggaldetailBlog">
            @if ($wisata->profil)
                {{ $wisata->profil->nama }}
            @else
                Penulis tidak ditemukan
            @endif
            </div>
            <div class="juduldetailBlog">{{ $wisata->judul_wisata }}
                <div class="teksjuduldetailBlog">
                    {{ $wisata->deskripsi_wisata }}
                </div>
            </div>
        </div>
        </div>
        <div class="gambardetailBlog">
            <img src="{{ asset($wisata->gambar_wisata1) }}" alt="">
        </div>
        @include('bagian.footer')
    </div>
</body>
</html>