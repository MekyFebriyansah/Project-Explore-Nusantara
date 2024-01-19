<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="{{asset('assets/css/daftarMasuk.css')}}">
    <link href='https://fonts.googleapis.com/css?family=DM Serif Display' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>
<body>
    <div id="frameDaftar">
        <div id="masuknyaFrame">
            <div id="logoMasukDaftar">
                <img src="{{ asset('assets/img/daftarmasuk.png') }}" alt="logo Masuk Daftar">
            </div>
            <div id="kotakDaftar">
                <div class="judulMasuk">Daftar</div>
                <div class="tombolFbdanGoogle">
                    <button>Masuk Melalui Google</button>
                    <button>Masuk Melalui Facebook</button>
                </div>
                <div class="atau">
                    Atau
                    <hr>
                </div>
                <div class="inputanDaftar">
                    <form action="{{ route('daftar.post') }}" method="post" id="formPendfataran">
                        @csrf
                        <input type="email" placeholder="Email" name="email" required>
                        <input type="password" placeholder="Password" name="password" required>
                        <input type="password" placeholder="Ulangi Password" name="konfirmasiPassword" required>
                        <button type="submit" name="daftar">Buat Akun</button>
                        <div class="sudahMemilikiAkun">Sudah memiliki akun? <a href="{{ url('/masuk') }}">Masuk</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>