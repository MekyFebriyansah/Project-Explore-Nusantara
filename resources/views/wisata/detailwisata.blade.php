<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/detailWisata.css') }}" />
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
        <div class="kotakDatadetailBlog">
            <div class="nilaiKotakDatadetailBlog">15</div>
            <div class="deskripsiKotakDatadetailBlog">bulan yang</div>
            <div class="deskripsiKotakDatadetailBlog">lalu</div>
        <div class="kotakdetailBlog">
            <div class="tanggaldetailBlog">26 Desember 2022</div>
            <div class="juduldetailBlog">Keindahan Magis Tari Kecak: Suara, Gerakan, dan Kekuatan Bali yang Memukau
                <div class="teksjuduldetailBlog">
                    Di atas latar senja pulau Bali yang memesona, Tari Kecak menjadi bagian tak terpisahkan dari pesona budaya yang kaya. Dengan gerakan-gerakan yang mengagumkan dan harmoni suara yang kuat, pertunjukan ini memberikan pengalaman yang luar biasa bagi setiap penonton yang hadir.
                    <br><br>
                    Tarian ini bukan sekadar pertunjukan, tetapi juga cerita epik yang hidup dari zaman kuno, khususnya cerita Ramayana. Dengan menggunakan nyanyian dan gerakan tangan para penari, Kecak menjadi simbol kekuatan, perjuangan, dan kemenangan dari cerita klasik ini. Satu hal yang menakjubkan dari Tari Kecak adalah suara yang tercipta dari puluhan bahkan ratusan penari yang bersama-sama menghasilkan harmoni vokal yang menggetarkan hati. Tanpa menggunakan alat musik, suara yang dihasilkan menciptakan aura magis yang memenuhi ruang pertunjukan.
                    <br><br>
                    Kehadiran Tari Kecak adalah bentuk nyata dari semangat kebersamaan dan gotong royong masyarakat Bali. Melalui tarian ini, mereka menyatukan kekuatan dan semangat untuk melestarikan warisan budaya yang begitu berharga. Tari Kecak bukan hanya sekadar pertunjukan tari, tetapi juga sebuah perayaan dari warisan budaya Bali yang mempesona. Dengan pesona yang memikat dan pesan moral yang mendalam, Tari Kecak mempersembahkan keindahan dan kekuatan budaya Bali yang tak ternilai.
                </div>
            </div>
        </div>
        </div>
        <div class="gambardetailBlog">
            <img src="{{ asset('assets/img/Rectangle 34.png') }}" alt="">
        </div>
        @include('bagian.footer')
    </div>
</body>
</html>