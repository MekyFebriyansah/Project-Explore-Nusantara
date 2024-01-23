<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="{{ asset('assets/css/daftarMasuk.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/welcome1.css') }}" />
    <link href='https://fonts.googleapis.com/css?family=DM Serif Display' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>
<body onload="notifikasiMuncul()">
    <div id="frameDaftar">
        @include('bagian.navigasi')
        <div id="masuknyaFrame">
            <div id="logoMasukDaftar">
                <img src="{{ asset('assets/img/daftarmasuk.png') }}" alt="logo Masuk Daftar">
            </div>
            <div id="kotakDaftar">
                <div class="judulMasuk">Daftar</div>
                @if (session('daftarSama'))
                    <script>
                        alert('Email sudah terdaftar. Silakan gunakan email lain atau masuk.')
                    </script>
                @endif

                <div class="tombolFbdanGoogle">
                    <button>Masuk Melalui Google</button>
                    <button>Masuk Melalui Facebook</button>
                </div>
                <div class="atau">
                    Atau
                    <hr>
                </div>
                <div class="inputanDaftar">
                    <form action="{{ url('/daftar') }}" method="post">
                        @csrf
                        <input type="email" placeholder="Email" name="email" required>
                        <input type="password" placeholder="Password" name="password" required>
                        <input type="password" placeholder="Ulangi Password" name="password_confirmation" required>
                        <button type="submit" name="daftar">Daftar</button>
                        <div class="sudahMemilikiAkun">Sudah memiliki akun? <a href="{{ url('/masuk') }}">Masuk</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
