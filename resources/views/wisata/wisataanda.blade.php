<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/blogAnda.css') }}" />
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
        <div class="tulisanBlogAnda">
            Wisata Anda
        </div>
        <div class="gambarBlogAnda">
            <div class="nomorBlogAnda">02</div>
                <img src="{{ asset('assets/img/wisataanda.png') }}" alt="" class="fotoBlog" style="border-radius: 0rem 0rem 25rem 0rem;">
            <div class="teksBlogAnda">
                <div class="sedangproses">
                    Telah Di Posting
                </div>
                <div class="isiteksBlogAnda">
                    Naga Purba yang Mengagumkan.
                </div>
                <div class="isiteksBlogAnda1">
                    Pulau Komodo, menjadi bagian dari Taman Nasional Komodo, adalah sebuah permata yang menyimpan keunikan dan keindahan alam yang memukau. Dengan kehadiran naga purba, serta lanskap yang mempesona, pulau ini menjadi destinasi yang luar biasa. Pulau Komodo adalah perjalanan ke alam yang masih murni dan keajaiban prasejarah. Di sini, petualangan bukan hanya tentang menemui naga purba, tetapi juga merasakan keindahan yang alami, menantang, dan mendalam. Selamat datang di Pulau Komodo, tempat di mana eksotisme liar bertemu keajaiban alam. Pulau Komodo dikenal sebagai rumah bagi Komodo, kadal raksasa yang merupakan spesies terbesar di dunia. Berinteraksi langsung dengan naga purba ini menjadi pengalaman tak terlupakan, sementara pulau-pulau sekitarnya menawarkan pemandangan alam yang memesona.
                    <button class="tombolSelengkapnya">
                        Selengkapnya
                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 8.43517L14.7232 8.29832M9.61818 1.91113L16.1412 8.43412L9.48677 15.0885" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                            </svg>   
                    </button>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br> 
        <div class="gambarBlogAnda">
            <div class="nomorBlogAnda">01</div>
            <img src="{{ asset('assets/img/wisataannda2.png') }}" alt="" class="fotoBlog" style="border-radius: 0rem 0rem 25rem 0rem;">
            <div class="teksBlogAnda">
                <div class="sedangproses">
                    Telah Di Posting
                </div>
                <div class="isiteksBlogAnda">
                    Kehangatan Pasir Putih dan Pesona yang
                    <br>Memikat.
                </div>
                <div class="isiteksBlogAnda1">
                    Pulau Laut Laguna, sebuah surga tersembunyi di perairan Indonesia, memikat hati dengan pesona keindahan alamnya yang luar biasa. Terletak di antara pulau-pulau yang eksotis, pulau ini menghadirkan pengalaman wisata yang menggairahkan. antai pasir putih yang melingkupi Pulau Laut Laguna adalah undangan untuk bersantai dan menikmati kehangatan sinar matahari. Dengan air laut yang jernih dan langit yang biru, setiap sudut pulau menjadi pelukan bagi para pelancong. Selamat datang di Pulau Laut Laguna, di mana keindahan alam, air laut yang mempesona, dan keanekaragaman pulau-pulau di sekitarnya menciptakan pengalaman liburan yang sempurna di tengah keindahan alam Indonesia yang memesona.
                    <button class="tombolSelengkapnya">
                        Selengkapnya
                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 8.43517L14.7232 8.29832M9.61818 1.91113L16.1412 8.43412L9.48677 15.0885" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                            </svg>   
                    </button>
                </div>
            </div>
        </div>
        <div class="tambahBlogAnda">
            <a href="{{ url('/tambahwisata') }}">
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