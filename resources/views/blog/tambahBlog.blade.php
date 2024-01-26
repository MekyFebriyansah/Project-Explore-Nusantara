<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/tambahblog.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/banerHeader.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/navigasi.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM Serif Display">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost">
    <title>Tambah Blog</title>
</head>
<body>
    <div id="tambahblog">
        @include('bagian.navigasiAuth')
        @include('bagian.banerHeaderBlog')
        <div class="tulisantambahBlog" style="margin-top: 4.19rem">
            Tambah Blog
        </div>
        <form action="{{ url('/menambahBlog') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="bordertambahimageBlog">
                <img id="previewImage" src="" alt="">
                <input type="file" name="gambar_blog" accept="image/*" onchange="previewImage(this)">
                {{-- <button class="tulisantambahkanimage">
                    Tambahkan Gambar
                </button> --}}
            </div>
            <div class="tambahjudulBlog">
                <div class="tulisanjudulBlog">
                    Judul Blog
                </div>
                <div class="inputjudulBlog">
                    <input type="text" name="judul_blog" placeholder="Tuliskan Disini">
                </div>                
                <div class="tulisandaerahBlog">
                    Daerah
                </div>
                <div class="inputdaerahBlog">
                    <select name="tempat_blog">
                        <option value="" disabled selected>Pilih Alamat</option>
                        @foreach($provinsiOptions as $provinsi)
                            <option value="{{ $provinsi }}">{{ $provinsi }}</option>
                        @endforeach
                    </select>
                </div>
                <<div class="tulisangmapsBlog">
                    Masukkan Link G-Maps
                </div>
                <div class="inputgmapsBlog">
                    <input type="text" name="link_gmaps_blog" placeholder="Copy Disini">
                </div>
                <div class="tulisantentangBlog">
                    Tentang
                </div>
                <div class="inputtentangBlog">
                    <select name="tentang_blog">
                        <option value="" disabled selected>Pilih Tentang</option>
                        @foreach($tentangOptions as $tentang)
                            <option value="{{ $tentang }}">{{ $tentang }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="tulisandeskripsiBlog">
                    Deskripsi Blog
                </div>
                <div class="inputdeskripsiBlog">
                    <input type="text" name="deskripsi_blog" placeholder="Tuliskan Detailnya Disini">
                </div>
            </div>
            <button class="tulisantambahkan" type="submit">
                Tambahkan  ->
            </button>
        </form>
        @include('bagian.footer')
    </div>

    <script>
        function previewImage(input) {
            var preview = document.getElementById('previewImage');
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
</html>
