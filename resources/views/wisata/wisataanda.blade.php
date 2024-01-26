<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/blogAnda.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/banerHeader.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/navigasi.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM Serif Display">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost">
    <title>Wisata Anda</title>
</head>
<body>
    <div id="BlogAnda">
        @include('bagian.navigasiAuth')
        @include('bagian.banerHeaderWisata')
        <div class="tulisanBlogAnda">
            Wisata Anda
        </div>
        @if (session('succes'))
            <script>
                alert("Wisata berhasil ditambahkan!");
            </script>
        @endif
    @foreach ($wisatas as $wisata)
        <div class="gambarBlogAnda">
            <div class="nomorBlogAnda">
                {{ $loop-> index + 1}}
            </div>
                <img src="{{ asset($wisata->gambar_wisata1) }}" alt="" class="fotoBlog" style="border-radius: 0rem 0rem 25rem 0rem;">
            <div class="teksBlogAnda">
                <div class="sedangproses">
                    Telah Di Posting
                </div>
                <div class="isiteksBlogAnda">
                    {{ $wisata->judul_wisata }}
                </div>
                <div class="isiteksBlogAnda1">
                    {{ $wisata->deskripsi_wisata }}
                </div>
                <a href="{{ url('/detailwisata', ['id' => $wisata->id_wisata]) }}">
                    <div class="tombolSelengkapnya">
                        Selengkapnya
                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 8.43517L14.7232 8.29832M9.61818 1.91113L16.1412 8.43412L9.48677 15.0885" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                            </svg>   
                    </div>
                </a>
                </div>
            </div>
        @endforeach
        <div class="tambahBlogAnda">
            <a href="{{ url('/tambahWisata') }}">
            Tambah Wisata
            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.5 8.43517L15.2232 8.29832M10.1182 1.91113L16.6412 8.43412L9.98677 15.0885" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                </svg> 
            </a>           
        </div>
        @include('bagian.footer')
    </div>
</body>
</html>