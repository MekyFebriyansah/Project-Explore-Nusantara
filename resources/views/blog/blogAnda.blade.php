<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/blogAnda.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/navigasi.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/banerHeader.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM Serif Display">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost">
    <title>Blog Anda</title>
</head>
<body>
    <div id="BlogAnda">
        @include('bagian.navigasiAuth')
        @include('bagian.banerHeaderBlog')
        <div class="tulisanBlogAnda">
            Blog Anda
        </div>
        @if (session('succes'))
            <script>
                alert("Blog berhasil ditambahkan!");
            </script>
        @endif
    @foreach ($blogs as $blog )
        <div class="gambarBlogAnda">
            <div class="nomorBlogAnda">
               {{ $loop-> index + 1 }}
            </div>
            <div class="fotoBlog">
                <img src="{{ asset($blog->gambar_blog1) }}" alt="">
            </div>
            <div class="teksBlogAnda">
                <div class="sedangproses">
                    Telah Di Posting
                </div>
                <div class="isiteksBlogAnda">
                    {{ $blog->judul_blog }}
                </div>
                <div class="isiteksBlogAnda3">
                    {{ $blog->deskripsi_blog }}
                </div>
                <a href="{{ url('/detailBlog', ['id' => $blog->id_blog]) }}">
                    <div class="tombolSelengkapnya">
                        Selengkapnya
                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 8.43517L14.7232 8.29832M9.61818 1.91113L16.1412 8.43412L9.48677 15.0885" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                            </svg>   
                    </div>
                    </a>
            </div>
        </div>
        <br><br>
    @endforeach
    <a href="{{ url('/tambahBlog') }}">    
    <div class="tambahBlogAnda"> 
            Tambah Blog
            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.5 8.43517L15.2232 8.29832M10.1182 1.91113L16.6412 8.43412L9.98677 15.0885" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
                </svg>   
        </div>
    </a> 
        @include('bagian.footer')
    </div>
</body>
</html>