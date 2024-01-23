<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/navigasiHomePage.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM Serif Display">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost">
    <title>Home Page</title>
</head>
<body>
        @if (session('berhasilMasuk'))
            <script>
                alert("Login atau masuk berhasil!");
            </script>
        @endif
<div id="homepage">
    @include('bagian.navigasiAuth')
    <div class="wrapper">
        <div class="slides">
            <span id="slide-1"></span>
            <span id="slide-2"></span>
            <span id="slide-3"></span>
            <span id="slide-4"></span>
            <span id="slide-5"></span>
            <span id="slide-6"></span>
            <span id="slide-7"></span>
            <div class="gambar">
                <img src="{{ asset('assets/img/Rectangle 18.png') }}" alt="">
                <img src="{{ asset('assets/img/Rectangle 18.png') }}" alt="">
                <img src="{{ asset('assets/img/Rectangle 18.png') }}" alt="">
                <img src="{{ asset('assets/img/Rectangle 18.png') }}" alt="">
                <img src="{{ asset('assets/img/Rectangle 18.png') }}" alt="">
                <img src="{{ asset('assets/img/Rectangle 18.png') }}" alt="">
                <img src="{{ asset('assets/img/Rectangle 18.png') }}" alt="">
            </div>
            <div class="lombok">Lombok, Indonesia</div>
        </div>
        <div class="navigasi">
            <a href="#slide-1">1</a>
            <a href="#slide-2">2</a>
            <a href="#slide-3">3</a>
            <a href="#slide-4">4</a>
            <a href="#slide-5">5</a>
            <a href="#slide-6">6</a>
            <a href="#slide-7">7</a>
        </div>
    </div>
    <br><br>
    <div class="nusantaraindonesia"><p>Nusantara Indonesia</p></div>
    <div class="keindahanalam"><p>keindahan alam dan kekayaan budaya</p></div><br><br>
    <div class="text">
        <div class="text1"><p>Nusantara Indonesia adalah wilayah yang memukau, terdiri dari lebih dari 17.000 pulau yang membentang di antara dua benua besar, Asia dan Australia, serta dua samudra yang luas, Pasifik dan Hindia. Keberagaman geografisnya memberikan pemandangan yang luar biasa, dari gunung-gunung megah, hutan-hutan tropis yang lebat, pantai-pantai pasir putih yang menakjubkan, hingga terumbu karang indah di bawah lautnya.</p></div>
        <div class="text2"><p>Selain kekayaan alamnya yang menakjubkan, Nusantara Indonesia juga mempesona dengan keanekaragaman budayanya yang kaya. Dari Sabang hingga Merauke, setiap daerah memiliki warisan budaya yang unik, mulai dari adat istiadat, tarian, musik, kerajinan, bahasa, hingga kuliner yang lezat dan beragam.</p></div>
        <div class="text3"><p>Kehidupan sehari-hari di Nusantara Indonesia tercermin dalam keramahan penduduknya yang ramah serta semangat gotong royong yang kuat. Berbagai kepercayaan, agama, dan suku bangsa hidup berdampingan, menciptakan mosaik sosial yang indah.</p></div>
        <div class="text4"><p>Nusantara Indonesia adalah tempat di mana keindahan alam dan kekayaan budaya bersatu, menawarkan pengalaman yang tak terlupakan bagi para pelancong yang ingin menjelajahi keajaiban alam, mendalami sejarah, menikmati keanekaragaman kuliner, dan merasakan keramahan orang-orangnya yang hangat. Ini adalah negara yang tak hanya mempesona mata, tetapi juga merentangkan kekayaan pengalaman bagi jiwa yang haus akan petualangan dan pengetahuan.</p></div>
        </div><br><br><br><br>
        <div class="wisatanusantara"><p>Wisata Nusantara</p></div>
        <div class="p1"><p>Dari tradisi adat yang kuno hingga kehidupan modern yang berirama, dari keunikan kuliner hingga keanekaragaman tarian dan musik, Nusantara adalah laboratorium budaya yang mengagumkan.</p></div>
    <div class="rectangle">
        <div class="img1">
            <img src="{{ asset('assets/img/Rectangle 4.png') }}" alt="">
        </div>
        <div class="img2">
            <img src="{{ asset('assets/img/Rectangle 5.png') }}" alt="">
        </div>
        <div class="img3">
            <img src="{{ asset('assets/img/Rectangle 7.png') }}" alt="">
        </div>
    </div>
    <div class="subcontent1">
        <p>Morotai, Maluku Utara</p>
        <a href="https://www.figma.com/file/kdBaRhoVqJa4Nbny6ynCYj/Desain?node-id=66%3A237&mode=dev">
            <button type="button" onclick="handleButtonClick()" style="border: none;">
                <img src="{{ asset('assets/img/_.svg') }}" alt="Button">
            </button>
        </a>
    </div>
    <div class="subcontent2">
        <p>Raja Ampat, Papua barat</p>
        <a href="https://www.figma.com/file/kdBaRhoVqJa4Nbny6ynCYj/Desain?node-id=66%3A237&mode=dev">
            <button type="button" onclick="handleButtonClick()" style="border: none;">
                <img src="{{ asset('assets/img/_.svg') }}" alt="Button">
            </button>
        </a>
    </div>
    <div class="subcontent3">
        <p>Kawah Putih, Jawa Barat</p>
        <a href="https://www.figma.com/file/kdBaRhoVqJa4Nbny6ynCYj/Desain?node-id=66%3A237&mode=dev">
            <button type="button" onclick="handleButtonClick()" style="border: none;">
                <img src="{{ asset('assets/img/_.svg') }}" alt="Button">
            </button>
        </a>
    </div>
    {{-- Rectangle1 --}}
    <div class="rectangle1">
        <div class="img4">
            <img src="{{ asset('assets/img/Rectangle 19.png') }}" alt="">
        </div>
        <div class="img5">
            <img src="{{ asset('assets/img/Rectangle 20.png') }}" alt="">
        </div>
        <div class="img6">
            <img src="{{ asset('assets/img/Rectangle 21.png') }}" alt="">
        </div>
    </div>
    {{-- subconten --}}
    <div class="subcontent4">
        <p>Savana Bromo, Jawa Timur</p>
        <a href="https://www.figma.com/file/kdBaRhoVqJa4Nbny6ynCYj/Desain?node-id=66%3A237&mode=dev">
            <button type="button" onclick="handleButtonClick()" style="border: none;">
                <img src="{{ asset('assets/img/_.svg') }}" alt="Button">
            </button>
        </a>
    </div>
    <div class="subcontent5">
        <p>Candi Borobudur, Jawa Tengah</p>
        <a href="https://www.figma.com/file/kdBaRhoVqJa4Nbny6ynCYj/Desain?node-id=66%3A237&mode=dev">
            <button type="button" onclick="handleButtonClick()" style="border: none;">
                <img src="{{ asset('assets/img/_.svg') }}" alt="Button">
            </button>
        </a>
    </div>
    <div class="subcontent6">
        <p>Semeru, Jawa Timur</p>
        <a href="https://www.figma.com/file/kdBaRhoVqJa4Nbny6ynCYj/Desain?node-id=66%3A237&mode=dev">
            <button type="button" onclick="handleButtonClick()" style="border: none;">
                <img src="{{ asset('assets/img/_.svg') }}" alt="Button">
            </button>
        </a>
    </div>
    <div class="blog">
        <div class="blog1"><p>Blog</p></div>
        <div class="text"><p>Dari pantai-pantai tropis yang memukau hingga pegunungan yang menakjubkan, kami akan membawa Anda melalui perjalanan visual dan naratif yang memukau, mengungkapkan keindahan panorama alamnya yang menakjubkan, dari pantai-pantai mempesona hingga gunung-gung megah yang memikat. Kami juga akan memperkenalkan Anda pada kekayaan budaya Indonesia, dari tradisi yang kuno hingga keunikan kuliner yang lezat.</p></div>
    </div>
    {{-- Blog1 --}}
    <div id="rumahKonten">
        <div class="kotakKonten">
            <div class="gambarKonten">
                <img src="{{ asset('assets/img/Photo.png') }}" alt="">
            </div>
            <div class="tempat1">
                Papua
            </div>
            <div class="teksKonten">
                Kesederhanaan yang Megah.
            </div>
            <div class="kontenBawah">
                <div class="tanggal">26 December,2022 </div>
                <div class="tombolKonten"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="52" height="53" viewBox="0 0 52 53" fill="none">
                    <circle cx="26" cy="26.267" r="26" fill="#D8A876"/>
                    <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" fill="#D8A876"/>
                    <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg></a></div>
            </div>
        </div>
        <div class="kotakKonten">
            <div class="gambarKonten">
                <img src="{{ asset('assets/img/Photo (1).png') }}" alt="">
            </div>
            <div class="tempat1">
                Papua
            </div>
            <div class="teksKonten">
                Kesederhanaan yang Megah.
            </div>
            <div class="kontenBawah">
                <div class="tanggal">26 December,2022 </div>
                <div class="tombolKonten"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="52" height="53" viewBox="0 0 52 53" fill="none">
                    <circle cx="26" cy="26.267" r="26" fill="#D8A876"/>
                    <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" fill="#D8A876"/>
                    <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg></a></div>
            </div>
        </div>
        <div class="kotakKonten">
            <div class="gambarKonten">
                <img src="{{ asset('assets/img/Photo (2).png') }}" alt="">
            </div>
            <div class="tempat">
                Papua
            </div>
            <div class="teksKonten">
                Kesederhanaan yang Megah.
            </div>
            <div class="kontenBawah">
                <div class="tanggal">26 December,2022 </div>
                <div class="tombolKonten"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="52" height="53" viewBox="0 0 52 53" fill="none">
                    <circle cx="26" cy="26.267" r="26" fill="#D8A876"/>
                    <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" fill="#D8A876"/>
                    <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg></a></div>
            </div>
        </div>
    </div>
    @include('bagian.footer')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>