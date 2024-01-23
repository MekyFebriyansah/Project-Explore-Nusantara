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
    <title>Blog Anda</title>
</head>
<body>
    <div id="BlogAnda">
        @include('bagian.navigasiAuth')
        <div class="tulisanBlogAnda">
            Blog Anda
        </div>
        <div class="gambarBlogAnda">
            <div class="nomorBlogAnda">02</div>
                <img src="{{ asset('assets/img/gambarBlogAnda1.png') }}" alt="" class="fotoBlog">
            <div class="teksBlogAnda">
                <div class="sedangproses">
                    sedang proses
                </div>
                <div class="isiteksBlogAnda">
                    Keanggunan yang Abadi di Puncak 
                    <br>Gunung yang Indah.
                </div>
                <div class="isiteksBlogAnda1">
                    Di ketinggian puncak gunung yang menawan, terhampar keindahan yang tak terlukiskan. Di antara batu-batu runcing dan serbuan angin sejuk, tumbuhlah bunga Edelweis dengan keanggunannya yang memikat hati. Dengan kelopak putih murni yang tak tersentuh, Edelweis memancarkan aura keabadian di tengah keserbaadaban lingkungan yang keras......
                </div>
                <div class="tombolSelengkapnya">
                    Selengkapnya
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 8.43517L14.7232 8.29832M9.61818 1.91113L16.1412 8.43412L9.48677 15.0885" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                        </svg>   
                </div>
            </div>
        </div> 
        <div class="gambarBlogAnda">
            <div class="nomorBlogAnda">01</div>
            <img src="{{ asset('assets/img/gambarBlogAnda.png') }}" alt="" class="fotoBlog">
            <div class="teksBlogAnda">
                <div class="sedangproses">
                    sedang proses
                </div>
                <div class="isiteksBlogAnda">
                    Berselancar di Surga Ombak Bali: 
                    <br>Pengalaman yang Memikat di Laut 
                    yang Indah
                </div>
                <div class="isiteksBlogAnda1">
                    Di ketinggian puncak gunung yang menawan, terhampar keindahan yang tak terlukiskan. Di antara batu-batu runcing dan serbuan angin sejuk, tumbuhlah bunga Edelweis dengan keanggunannya yang memikat hati. Dengan kelopak putih murni yang tak tersentuh, Edelweis memancarkan aura keabadian di tengah keserbaadaban lingkungan yang keras......
                </div>
                <div class="tombolSelengkapnya">
                    Selengkapnya
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 8.43517L14.7232 8.29832M9.61818 1.91113L16.1412 8.43412L9.48677 15.0885" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                        </svg>   
                </div>
            </div>
        </div>
        <div class="tambahBlogAnda">
            <a href="{{ url('/tambahBlog') }}">
            Tambah Blog
            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.5 8.43517L15.2232 8.29832M10.1182 1.91113L16.6412 8.43412L9.98677 15.0885" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                </svg> 
            </a>           
        </div>
        @include('bagian.footer')
    </div>
</body>
</html>