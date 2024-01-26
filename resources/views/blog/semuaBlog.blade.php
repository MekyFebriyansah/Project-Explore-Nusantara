<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/semuaBlog.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/banerHeader.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/navigasi.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM Serif Display">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow">
    <title>Semua Blog</title>
</head>
<body>
    <div id="semuaBlog">
        @include('bagian.navigasiAuth')
        @include('bagian.banerHeaderBlog')
        <div class="tekssemuaBlog">
            Dari pantai-pantai tropis yang memukau hingga pegunungan yang menakjubkan, melalui perjalanan visual dan naratif yang memukau, mengungkapkan keindahan panorama alamnya yang menakjubkan, dari pantai-pantai mempesona hingga gunung-gung megah yang memikat. Kami juga akan memperkenalkan Anda pada kekayaan budaya Indonesia, dari tradisi yang kuno hingga keunikan kuliner yang lezat.
        </div>
        <div id="rumahKonten">
            @foreach($blogs as $blog)
                <div class="kotakKonten">
                    <div class="gambarKonten">
                        <img src="{{ $blog->gambar_blog1 }}" alt="Blog Image">
                    </div>
                    <div class="tempat">
                        {{ $blog->tempat_blog }}
                    </div>
                    <div class="teksKonten">
                        {{ $blog->judul_blog }}
                    </div>
                    <div class="kontenBawah">
                        <div class="tanggal">{{ $blog->created_at->format('d F, Y') }}</div>
                        <div class="tombolKonten"><a href="{{ url('/detailBlog', ['id' => $blog->id_blog]) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="53" viewBox="0 0 52 53" fill="none">
                                <circle cx="26" cy="26.267" r="26" fill="#D8A876"/>
                                <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" fill="#D8A876"/>
                                <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
            @include('bagian.footer')
    </div>
</body>
</html>