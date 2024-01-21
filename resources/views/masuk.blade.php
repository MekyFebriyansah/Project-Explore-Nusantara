<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/welcome1.css') }}" />
    <link rel="stylesheet" href="{{asset('assets/css/daftarMasuk.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href='https://fonts.googleapis.com/css?family=DM Serif Display' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>
<body>
    <div id="frameMasuk">
        @include('bagian.navigasi')
        <div id="masuknyaFrame">
            <div id="logoMasukDaftar">
                <img src="{{ asset('assets/img/daftarmasuk.png') }}" alt="logo Masuk Daftar">
            </div>
            <div id="kotakMasuk">
                <div class="judulMasuk">Masuk</div>
                <div class="inputanMasuk">
                    <form action="masuk.php" method="post">
                        <input type="email" placeholder="Email" name="email" required>
                        <input type="text" placeholder="Password" name="password" required>
                        <button type="submit" name="login" value="login">Login</button>
                        <div class="tidakMemilikiAkun">Tidak mempunyai akun? <a href="{{ url('/daftar') }}">Daftar disini</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>