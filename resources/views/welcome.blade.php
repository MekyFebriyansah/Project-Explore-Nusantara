<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/welcome1.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM Serif Display">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost">
  <body>
    <div id="welcomePage">
      @include('bagian.navigasi')
      @if(session('suksesKeluar'))
          <script>
              alert("Logout atau keluar berhasil!");
          </script>
      @endif
      <div id="gambarPageAtas">
        <div class="judulGambarPageAtas">WONDERFUL INDONESIA</div>
        <div class="judulGambarPageBawah">Temukan surga dunia dialam indonesia</div>
        <a href="" style="text-decoration: none"><div class="tombolPageAtas">Jelajahi Sekarang <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
          <path d="M1 8.43536L14.7232 8.29851M9.61818 1.91132L16.1412 8.4343L9.48677 15.0887" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
        </svg></div></a>
      </div>
      <div id="tengahIyaBenar">
        <div class="judulTengahIyaBenar">NUSANTARA</div>
        <div class="deskripsiTengahIyaBenar">Jelajahi, nikmati, dan hidupi keindahan dalam petualangan di Indonesia yang baru dan penuh warna.</div>
      </div>
      <div id="kontenHomePage">
        <div class="kotakKonten">
          <div class="kotakKontenKiri"><img src="{{ asset('assets/img/konten1.png') }}" alt=""></div>
          <div class="kotakKontenKanan">
            <div class="nomorKontenHome">01</div>
            <div class="judulKonten">Wakatobi, Sulawesi</div>
            <div class="deskripsiKonten">Surga tersembunyi di Timur Indonesia yang menakjubkan. Air laut yang jernih memperlihatkan kekayaan terumbu karang yang memikat hati, menyuguhkan panorama bawah laut yang memukau.</div>
          </div>
        </div>
        <div class="kotakKonten">
          <div class="kotakKontenKanan">
            <div class="nomorKontenHome1">02</div>
            <div class="judulKonten1">Raja Ampat, Papua Barat</div>
            <div class="deskripsiKonten1">Permata karang yang mengagumkan di Indonesia. Di antara pulau-pulau terpencil, tersembunyi kekayaan alam yang menakjubkan. Di darat, hamparan pantai pasir putih serta hutan hijau menawarkan keindahan alam yang memesona.</div>
          </div>
          <div class="kotakKontenKiri1"><img src="{{ asset('assets/img/konten2.png') }}" alt=""></div>
        </div>
      </div>
      <div id="artikelDanTentangKami">
        <div class="judulArtikel">Artikel & Tentang Kami</div>
        <div class="deskripsiArtikel"><br>Indonesia, tanah yang memikat dengan sejuta keindahan. Dari ujung barat hingga timur, negara ini menghadirkan ragam pesona alam yang memukau. Gunung menjulang tinggi, hutan hujan yang lebat, pantai-pantai berpasir putih, dan terumbu karang yang mempesona di bawah lautnya. Keberagaman budaya dari Sabang sampai Merauke menawarkan warisan berharga, dari tradisi hingga kuliner yang memikat lidah. Kehangatan sambutan orang-orangnya menjadi cermin keramahan. Keindahan alamnya yang tiada tara, kaya akan flora dan fauna, serta kekayaan budaya membuat Indonesia menjadi destinasi yang tak terlupakan bagi para pelancong yang ingin menjelajahi keajaiban dunia ini. <br><br><br> Kami adalah sekelompok pemuda dan pemudi yang membara dengan semangat untuk menghadirkan keindahan Indonesia ke mata dunia. Dengan cinta yang mendalam pada warisan alam dan budaya yang luar biasa, kami bersatu dalam satu misi: mengenalkan keajaiban Wisata Indonesia kepada dunia.<br><br><br>Kami percaya bahwa Indonesia memiliki kekayaan tak ternilai, mulai dari keindahan alam yang menakjubkan hingga keragaman budaya yang memikat hati. Melalui platform kami, kami berupaya untuk memperkenalkan destinasi wisata yang menakjubkan, menggambarkan keindahan alamnya yang memesona, serta memperkenalkan keanekaragaman budayanya yang kaya dan unik. Dengan semangat kreativitas dan inovasi, kami merangkul teknologi dan media sosial untuk menginspirasi para pelancong, baik lokal maupun mancanegara, agar menjelajahi keindahan Indonesia. Kami berkomitmen untuk menyajikan informasi yang akurat, menggugah rasa ingin tahu, serta memberikan panduan yang bermanfaat bagi mereka yang ingin menjelajahi setiap sudut negeri ini.
          <br><br><br>Kami adalah para pembawa visi, para pemimpi yang berharap untuk membuat setiap perjalanan menjadi pengalaman tak terlupakan. Bersama-sama, kami ingin berbagi pesona Indonesia, membangun pengalaman yang membawa kekaguman akan keindahan alamnya, kehangatan sambutan masyarakatnya, serta kekayaan budayanya yang luar biasa. Bergabunglah dengan kami dalam perjalanan menakjubkan untuk menjelajahi sejuta keindahan Wisata Indonesia.  
        </div>
      </div>
      <div id="dataWelcome">
        <div class="kotakDataWelcome">
          <div class="nilaiKotakDataWelcome">1</div>
          <div class="deskripsiKotakDataWelcome">Negara</div>
        </div>
        <hr>
        <div class="kotakDataWelcome">
          <div class="nilaiKotakDataWelcome">1074</div>
          <div class="deskripsiKotakDataWelcome">Dikunjungi Hari Ini</div>
        </div>
        <hr>
        <div class="kotakDataWelcome">
          <div class="nilaiKotakDataWelcome">38</div>
          <div class="deskripsiKotakDataWelcome">Provinsi</div>
        </div>
        <hr>
        <div class="kotakDataWelcome">
          <div class="nilaiKotakDataWelcome">56</div>
          <div class="deskripsiKotakDataWelcome">Wisata Terdata</div>
        </div>
      </div>
      @include('bagian.footer')
    </div>
  </body>
</html>
 