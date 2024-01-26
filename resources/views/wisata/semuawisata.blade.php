<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/semuawisata.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/banerHeader.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/navigasi.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM Serif Display">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost">
    <title>Semua Wisata</title>
</head>
<body>
    <div id="semuawisata">
       @include('bagian.navigasiAuth')
       @include('bagian.banerHeaderWisata')
        <div class="tekssemuawisata">
            Indonesia, negeri dengan lebih dari 17.000 pulau, memikat jiwa setiap pelancong dengan pesona alamnya yang memukau. Dari ujung Sabang hingga Merauke, setiap destinasi menawarkan keindahan yang tak terlukiskan. Selamat datang di Indonesia, negeri yang tak hanya menawarkan destinasi  wisata, tetapi juga perjalanan ke dalam kekayaan alam, budaya, dan kehangatan hati yang menjadikan setiap kunjungan sebagai petualangan sejati.
        </div>
        <div class="teksdiataspencarian">
            "Indonesia: Mosaik Keajaiban Wisata yang Tak Terlukiskan"
            <br><br>
            <div class="teksdiataspencarian1">Mulai Petualangan Kamu Disini</div>
        </div>
        <div id="rumahKonten">
            @foreach ($wisatas as $wisata )
                <div class="kotakKonten">
                    <div class="gambarKonten">
                        <img src="{{ $wisata->gambar_wisata1 }}" alt="Wisata Image">
                    </div>
                    <div class="tempat">
                        {{ $wisata->tempat_wisata }}
                    </div>
                    <div class="kontenBawah">
                        <div class="tombolKonten"><a href="{{ url('/detailwisata', ['id' => $wisata->id_wisata]) }}">
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