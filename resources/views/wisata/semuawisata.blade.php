<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/semuawisata.css') }}" />
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
        <div class="tekssemuawisata">
            Indonesia, negeri dengan lebih dari 17.000 pulau, memikat jiwa setiap pelancong dengan pesona alamnya yang memukau. Dari ujung Sabang hingga Merauke, setiap destinasi menawarkan keindahan yang tak terlukiskan. Selamat datang di Indonesia, negeri yang tak hanya menawarkan destinasi  wisata, tetapi juga perjalanan ke dalam kekayaan alam, budaya, dan kehangatan hati yang menjadikan setiap kunjungan sebagai petualangan sejati.
        </div>
        <div class="teksdiataspencarian">
            "Indonesia: Mosaik Keajaiban Wisata yang Tak Terlukiskan"
            <br><br>
            <div class="teksdiataspencarian1">Mulai Petualangan Kamu Disini</div>
        </div>
        <div class="searchsemuaBlog">
            <div class="isiPencarianKiri">
                <div class="logoGambarPencarianKiri">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                        <path d="M8.28906 2.03326V4.78326" stroke="#3D6299" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.623 2.03326V4.78326" stroke="#3D6299" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M4.16406 8.53247H19.7474" stroke="#3D6299" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20.2061 7.9916V15.7833C20.2061 18.5333 18.8311 20.3666 15.6227 20.3666H8.28939C5.08105 20.3666 3.70605 18.5333 3.70605 15.7833V7.9916C3.70605 5.2416 5.08105 3.40826 8.28939 3.40826H15.6227C18.8311 3.40826 20.2061 5.2416 20.2061 7.9916Z" stroke="#3D6299" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.9523 12.7583H11.9606" stroke="#3D6299" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8.55877 12.7583H8.567" stroke="#3D6299" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8.55877 15.5083H8.567" stroke="#3D6299" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="tulisanTanggal">
                    <div class="tulisanTanggalAtas">Lokasi <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.7488 5.42078L7.94546 9.22411C7.49629 9.67328 6.76129 9.67328 6.31212 9.22411L2.50879 5.42078" fill="white"/>
                        <path d="M11.7488 5.42078L7.94546 9.22411C7.49629 9.67328 6.76129 9.67328 6.31212 9.22411L2.50879 5.42078" stroke="#808080" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        </div>
                    <div class="tulisanTanggalBawah">Papua, Papua Barat</div>
                </div>
            </div>
            <div id="tombolPencarian">
                <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="49" height="49" viewBox="0 0 49 49" fill="none">
                    <circle cx="24.2148" cy="24.2" r="24" fill="#3D6299"/>
                    <path d="M11.7148 21.95C6.06484 21.95 1.46484 17.35 1.46484 11.7C1.46484 6.04995 6.06484 1.44995 11.7148 1.44995C17.3648 1.44995 21.9648 6.04995 21.9648 11.7C21.9648 17.35 17.3648 21.95 11.7148 21.95ZM11.7148 2.94995C6.88484 2.94995 2.96484 6.87995 2.96484 11.7C2.96484 16.52 6.88484 20.45 11.7148 20.45C16.5448 20.45 20.4648 16.52 20.4648 11.7C20.4648 6.87995 16.5448 2.94995 11.7148 2.94995Z" fill="white"/>
                    <path d="M22.2153 22.95C22.0253 22.95 21.8353 22.88 21.6853 22.73L19.6853 20.73C19.3953 20.44 19.3953 19.96 19.6853 19.67C19.9753 19.38 20.4553 19.38 20.7453 19.67L22.7453 21.67C23.0353 21.96 23.0353 22.44 22.7453 22.73C22.5953 22.88 22.4053 22.95 22.2153 22.95Z" fill="white"/>
                </svg>
                </button>
            </div>
        </div>
        <div id="rumahKonten">
                <div class="kotakKonten">
                    <div class="gambarKonten">
                        <img src="{{ asset('assets/img/pulau.jpeg') }}" alt="">
                    </div>
                    <div class="tempat">
                        Papua
                    </div>
                    <div class="kontenBawah">
                        <div class="tombolKonten"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="52" height="53" viewBox="0 0 52 53" fill="none">
                            <circle cx="26" cy="26.267" r="26" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></a></div>
                    </div>
                </div>
                <div class="kotakKonten">
                    <div class="gambarKonten">
                        <img src="{{ asset('assets/img/pantai.jpeg') }}" alt="">
                    </div>
                    <div class="tempat">
                        Papua
                    </div>
                    <div class="kontenBawah">
                        <div class="tombolKonten"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="52" height="53" viewBox="0 0 52 53" fill="none">
                            <circle cx="26" cy="26.267" r="26" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></a></div>
                    </div>
                </div>
                <div class="kotakKonten">
                    <div class="gambarKonten">
                        <img src="{{ asset('assets/img/jurang.jpeg') }}" alt="">
                    </div>
                    <div class="tempat">
                        Papua
                    </div>
                    <div class="kontenBawah">
                        <div class="tombolKonten"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="52" height="53" viewBox="0 0 52 53" fill="none">
                            <circle cx="26" cy="26.267" r="26" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></a></div>
                    </div>
                </div>
                <div class="kotakKonten">
                    <div class="gambarKonten">
                        <img src="{{ asset('assets/img/photo4wisata.jpeg') }}" alt="">
                    </div>
                    <div class="tempat">
                        Papua
                    </div>
                    <div class="kontenBawah">
                        <div class="tombolKonten"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="52" height="53" viewBox="0 0 52 53" fill="none">
                            <circle cx="26" cy="26.267" r="26" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></a></div>
                    </div>
                </div>
                <div class="kotakKonten">
                    <div class="gambarKonten">
                        <img src="{{ asset('assets/img/photo5wisata.jpeg') }}" alt="">
                    </div>
                    <div class="tempat">
                        Papua
                    </div>
                    <div class="kontenBawah">
                        <div class="tombolKonten"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="52" height="53" viewBox="0 0 52 53" fill="none">
                            <circle cx="26" cy="26.267" r="26" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></a></div>
                    </div>
                </div>
                <div class="kotakKonten">
                    <div class="gambarKonten">
                        <img src="{{ asset('assets/img/photo6wisata.jpeg') }}" alt="">
                    </div>
                    <div class="tempat">
                        Papua
                    </div>
                    <div class="kontenBawah">
                        <div class="tombolKonten"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="52" height="53" viewBox="0 0 52 53" fill="none">
                            <circle cx="26" cy="26.267" r="26" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></a></div>
                    </div>
                </div>
                <div class="kotakKonten">
                    <div class="gambarKonten">
                        <img src="{{ asset('assets/img/pulau.jpeg') }}" alt="">
                    </div>
                    <div class="tempat">
                        Papua
                    </div>
                    <div class="kontenBawah">
                        <div class="tombolKonten"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="52" height="53" viewBox="0 0 52 53" fill="none">
                            <circle cx="26" cy="26.267" r="26" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></a></div>
                    </div>
                </div>
                <div class="kotakKonten">
                    <div class="gambarKonten">
                        <img src="{{ asset('assets/img/pantai.jpeg') }}" alt="">
                    </div>
                    <div class="tempat">
                        Papua
                    </div>
                    <div class="kontenBawah">
                        <div class="tombolKonten"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="52" height="53" viewBox="0 0 52 53" fill="none">
                            <circle cx="26" cy="26.267" r="26" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></a></div>
                    </div>
                </div>
                <div class="kotakKonten">
                    <div class="gambarKonten">
                        <img src="{{ asset('assets/img/jurang.jpeg') }}" alt="">
                    </div>
                    <div class="tempat">
                        Papua
                    </div>
                    <div class="kontenBawah">
                        <div class="tombolKonten"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="52" height="53" viewBox="0 0 52 53" fill="none">
                            <circle cx="26" cy="26.267" r="26" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></a></div>
                    </div>
                </div>
                <div class="kotakKonten">
                    <div class="gambarKonten">
                        <img src="{{ asset('assets/img/photo4wisata.jpeg') }}" alt="">
                    </div>
                    <div class="tempat">
                        Papua
                    </div>
                    <div class="kontenBawah">
                        <div class="tombolKonten"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="52" height="53" viewBox="0 0 52 53" fill="none">
                            <circle cx="26" cy="26.267" r="26" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></a></div>
                    </div>
                </div>
                <div class="kotakKonten">
                    <div class="gambarKonten">
                        <img src="{{ asset('assets/img/photo5wisata.jpeg') }}" alt="">
                    </div>
                    <div class="tempat">
                        Papua
                    </div>
                    <div class="kontenBawah">
                        <div class="tombolKonten"><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="52" height="53" viewBox="0 0 52 53" fill="none">
                            <circle cx="26" cy="26.267" r="26" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" fill="#D8A876"/>
                            <path d="M23.771 32.9527L29.7139 26.267L23.771 19.5813" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></a></div>
                    </div>
                </div>
                <div class="kotakKonten">
                    <div class="gambarKonten">
                        <img src="{{ asset('assets/img/photo6wisata.jpeg') }}" alt="">
                    </div>
                    <div class="tempat">
                        Papua
                    </div>
                    <div class="kontenBawah">
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
</body>
</html>