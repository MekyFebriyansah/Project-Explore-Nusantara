<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/profil.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/navigasi.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM Serif Display">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost">
    <title>Profil</title>
</head>
<body>
    <div id="detailBlog">
        @include('bagian.navigasiAuth')
        <div class="Profil">
            Profil
        </div>
        <div id="kontenProfil">
            <div class="gambarProfil">
                <label for="upload-input">
                    <img id="profile-image" src="{{ asset('assets/img/' . ($profil->gambar_profil ? $profil->gambar_profil : 'fotoProfil.png')) }}" alt="" style="width: 46.125rem;height: 38.625rem;border-radius: 0rem 0rem 25rem 0rem; margin-left: 5rem">
                </label>
                <input type="file" name="gambar_profil" id="upload-input" style="display: none" accept="image/*" title="Choose a profile picture" placeholder="Tidak ada gambar yang dipilih">
            </div>
            <div class="formProfil">
                <form action="{{ url('/update-profil') }}" method="POST" enctype="multipart/form-data" id="profil-form">
                    @csrf
                    <input type="text" name="nama" placeholder="Name" value="{{ $profil->nama ?? '' }}">
                    <input type="text" name="alamat" placeholder="Alamat" value="{{ $profil->alamat ?? '' }}">
                    <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" value="{{ $profil->tempat_lahir ?? '' }}">
                    <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{ $profil->tanggal_lahir ?? '' }}">
                    <input type="email" name="email" placeholder="Email" value="{{ $profil->email ?? '' }}" readonly>
                    <input type="text" name="nomor_hp" placeholder="Nomor Handphone" value="{{ $profil->nomor_hp ?? '' }}">
                    <br>
                    <button type="submit">Simpan</button>
                </form>
            </div>
        </div>
        @include('bagian.footer')
    </div>
    <script>
        const profileImage = document.getElementById('profile-image');
const uploadInput = document.getElementById('upload-input');
const form = document.getElementById('profil-form');

profileImage.addEventListener('click', () => {
    uploadInput.click();
});

uploadInput.addEventListener('change', () => {
    const file = uploadInput.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = (e) => {
            profileImage.src = e.target.result;

            if (form) {
                form.submit();
            } else {
                console.error('Form tidak ditemukan.');
            }
        };
        reader.readAsDataURL(file);
    }
});

    </script>

</body>
</html>
