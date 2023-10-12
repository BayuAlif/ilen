<!DOCTYPE html>
<html>
<head>
    <title>Halaman Home</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }

        .bg-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("BG HOME PAGE.png");
            background-size: cover;
            z-index: -1;
        }

        .content {
            margin: 20px;
            padding: 20px;
        }

        .kotak-utama {
            position: relative;
            width: 1058px;
            height: 150px;
            flex-shrink: 0;
            border-radius: 10px;
            border: 2px solid #ff0000;
            background-color: white;
            padding: 10px;
            text-align: left;
            font-size: 18px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            margin-top: 40px;
            font-family: "Century Gothic";
        }

        .kotak-utama p {
            margin: 4px 0;
            line-height: 1.5;
        }

        .kotak-utama p.teks-ukuran-pertama {
            font-size: 20px;
        }

        .kotak-utama p.teks-ukuran-kedua {
            font-size: 30px;
        }

        .kotak-utama p.teks-ukuran-ketiga {
            font-size: 20px;
        }

        .kotak-utama p.teks-ukuran-keempat {
            font-size: 20px;
            color: #A5A545;
        }

        .kotak-kedua {
            position: relative;
            width: 215px;
            height: 85px;
            flex-shrink: 0;
            border-radius: 10px;
            border: 2px solid #ffffff;
            background-color: #ffffff;
            padding: 10px;
            text-align: center;
            font-size: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
            margin-left: 55px;
            cursor: pointer;
        }

        .kotak-kedua a {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 10px; /* Tambahkan padding untuk memperbesar daerah klik */
        }

        .kotak-kedua p {
            margin: 4px 0;
            line-height: 1.5;
        }

        .kotak-ketiga {
            width: 215px;
            height: 85px;
            flex-shrink: 0;
            border-radius: 10px;
            border: 2px solid #ffffff;
            background-color: #ffffff;
            padding: 10px;
            text-align: center;
            font-size: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }

        .kotak-ketiga p {
            margin: 4px 0;
            line-height: 1.5;
        }

        .kotak-ketiga {
            margin-left: 410px;
            margin-top: -106px;
        }

        .kotak-keempat {
            width: 215px;
            height: 85px;
            flex-shrink: 0;
            border-radius: 10px;
            border: 2px solid #ffffff;
            background-color: #ffffff;
            padding: 10px;
            text-align: center;
            font-size: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }

        .kotak-keempat p {
            margin: 4px 0;
            line-height: 1.5;
        }

        .kotak-keempat {
            margin-left: 770px;
            margin-top: -106px;
        }

        .kotak-kelima {
            width: 215px;
            height: 85px;
            flex-shrink: 0;
            border-radius: 10px;
            border: 2px solid #ffffff;
            background-color: #ffffff;
            padding: 10px;
            text-align: center;
            font-size: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
            margin-left: 225px;
        }

        .kotak-kelima p {
            margin: 4px 0;
            line-height: 1.5;
        }

        .kotak-keenam {
            width: 215px;
            height: 85px;
            flex-shrink: 0;
            border-radius: 10px;
            border: 2px solid #ffffff;
            background-color: #ffffff;
            padding: 10px;
            text-align: center;
            font-size: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            margin-top: -108px;
            margin-left: 590px;
        }

        .kotak-keenam p {
            margin: 4px 0;
            line-height: 1.5;
        }

        .container {
            display: flex;
        }

        /* Pusatkan gambar di dalam setiap kotak */
        .kotak-kedua img,
        .kotak-ketiga img,
        .kotak-keempat img,
        .kotak-kelima img,
        .kotak-keenam img {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
            margin: auto;
            display: block;
        }

        .kotak-ketiga img,
        .kotak-keempat img,
        .kotak-kelima img {
            margin-top: 15px;
        }

        .kotak-kelima img {
            margin-top: 25px;
        }

        .kotak-keenam img {
            margin-top: 30px;
        }

        .kotak-kedua img {
            margin-top: 9px;
            margin-left: 50px;
            position: absolute;
            border-radius: 8px;
        }

        .element-pertama img{
            margin-top: -330px;
            margin-left: -225px;
            width: 90px;
            height: 685px;
            transform: rotate(-0.18deg);
            flex-shrink: 0;
        }

        .orang-duduk img{
        position: absolute;
        top: 390px;
        right: 5px;
        width: 277.37px;
        height: 314.982px;
        flex-shrink: 0;

        }

        .kotak-kanan img{
        position: absolute;
        top:520px;
        right: 5px;
        width: 238.589px;
        height: 183.023px;
        flex-shrink: 0;
        z-index: -1;
        }
        .teks-tambahan {
            position: absolute;
            bottom: 0; /* Taruh di bagian bawah */
            left: 50%; /* Pusatkan secara horizontal */
            transform: translateX(-50%); /* Pusatkan secara horizontal */
            text-align: center; /* Pusatkan teks secara horizontal */
            font-size: 10px;
            font-family: Arial;
        }

        .teks-kedua {
            position: absolute;
            bottom: 0; /* Taruh di bagian bawah */
            left: 50%; /* Pusatkan secara horizontal */
            transform: translateX(-50%); /* Pusatkan secara horizontal */
            text-align: center; /* Pusatkan teks secara horizontal */
            font-size: 12px;
            font-weight: 700px;
            font-family: Arial;
            margin-bottom: 15px;
        }

        .dacita-kedua {
            position: absolute;
            bottom: 0; /* Taruh di bagian bawah */
            left: 50%; /* Pusatkan secara horizontal */
            transform: translateX(-50%); /* Pusatkan secara horizontal */
            text-align: center; /* Pusatkan teks secara horizontal */
            font-size: 12px;
            font-weight: 700px;
            width: 90px;
            height: 15.882px;
            flex-shrink: 0;
            font-family: Arial;
            margin-bottom: 48px;
            margin-left: 20px;
        }

        .gambar-dacita {
            position: absolute;
            bottom: 0; /* Taruh di bagian bawah */
            left: 50%; /* Pusatkan secara horizontal */
            transform: translateX(-50%); /* Pusatkan secara horizontal */
            text-align: center; /* Pusatkan teks secara horizontal */
            font-size: 12px;
            font-weight: 700px;
            font-family: Arial;
            width: 51px;
            height: 29.017px;
            flex-shrink: 0;
            margin-bottom: 40px;
            margin-left: -55px;
        }

        .dark-mode-switch {
            position: fixed;
            top: 20px;
            right: 20px;
            display: flex;
            align-items: center;
            color: #888;
        }

        .dark-mode-switch input[type="checkbox"] {
            display: none;
        }

        .slider {
            position: relative;
            width: 40px;
            height: 20px;
            border-radius: 20px;
            background-color: #ccc;
            margin-left: 10px;
        }

        .slider:before {
            content: "";
            position: absolute;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background-color: #fff;
            top: 1px;
            left: 1px;
            transition: 0.2s;
        }

        input[type="checkbox"]:checked + .slider {
            background-color: #2196F3; /* Warna background saat dark mode aktif */
        }

        input[type="checkbox"]:checked + .slider:before {
            transform: translateX(20px);
        }

        /* Tambahkan aturan CSS untuk dark mode */
        body.dark-mode {
            background-color: #1a1a1a;
            color: #fff;
        }

        body.dark-mode .bg-image {
            background-image: url("BG HOME PAGE DARK MODE.png");
        }

        .kotak-utama.dark-mode {
            background-color: #1a1a1a;
            color: #fff;
            border-color: #fff;
            box-shadow: 0 2px 4px rgba(255, 255, 255, 0.2);
        }

        .kotak-utama.dark-mode p {
            color: #fff;
        }

        .kotak-kedua.dark-mode {
            background-color: #1a1a1a;
            color: #fff;
            border-color: #fff;
            box-shadow: 0 2px 4px rgba(255, 255, 255, 0.2);
        }

        .kotak-kedua.dark-mode a {
            background-color: #1a1a1a;
        }

        .kotak-kedua.dark-mode p {
            color: #fff;
        }

        .kotak-ketiga.dark-mode {
            background-color: #1a1a1a;
            color: #fff;
            border-color: #fff;
            box-shadow: 0 2px 4px rgba(255, 255, 255, 0.2);
        }

        .kotak-ketiga.dark-mode p {
            color: #fff;
        }

        .kotak-keempat.dark-mode {
            background-color: #1a1a1a;
            color: #fff;
            border-color: #fff;
            box-shadow: 0 2px 4px rgba(255, 255, 255, 0.2);
        }

        .kotak-keempat.dark-mode p {
            color: #fff;
        }

        .kotak-kelima.dark-mode {
            background-color: #1a1a1a;
            color: #fff;
            border-color: #fff;
            box-shadow: 0 2px 4px rgba(255, 255, 255, 0.2);
        }

        .kotak-kelima.dark-mode p {
            color: #fff;
        }

        .kotak-keenam.dark-mode {
            background-color: #1a1a1a;
            color: #fff;
            border-color: #fff;
            box-shadow: 0 2px 4px rgba(255, 255, 255, 0.2);
        }

        .kotak-keenam.dark-mode p {
            color: #fff;
        }
    /* Dark Mode */
    /* Dark Mode */
        body.dark-mode {
            color: #000; /* Warna teks saat dark mode aktif (hitam) */
        }

        body.dark-mode .kotak-utama {
            color: #000; /* Warna teks pada kotak utama saat dark mode aktif (hitam) */
        }

        body.dark-mode .kotak-kedua {
            color: #000; /* Warna teks pada kotak kedua saat dark mode aktif (hitam) */
        }

        body.dark-mode .kotak-ketiga {
            color: #000; /* Warna teks pada kotak ketiga saat dark mode aktif (hitam) */
        }

        body.dark-mode .kotak-keempat {
            color: #000; /* Warna teks pada kotak keempat saat dark mode aktif (hitam) */
        }

        body.dark-mode .kotak-kelima {
            color: #000; /* Warna teks pada kotak kelima saat dark mode aktif (hitam) */
        }

        body.dark-mode .kotak-keenam {
            color: #000; /* Warna teks pada kotak keenam saat dark mode aktif (hitam) */
        }

        body.dark-mode .teks-tambahan p,
        body.dark-mode .teks-kedua p {
            color: #fff; /* Warna teks "Dalam aplikasi" saat dark mode aktif (putih) */
        }

        /* Aturan CSS untuk dark mode */
        body.dark-mode .kotak-utama {
            background-color: #121212; /* Ganti dengan warna biru dongker yang diinginkan */
            color: #fff; /* Ganti dengan warna teks yang sesuai agar tetap terbaca dengan baik */
            border-color: #fff; /* Ganti dengan warna border yang sesuai */
            box-shadow: 0 2px 4px rgba(255, 255, 255, 0.2);
        }

        .akun {
        position: fixed;
        top: -40px;
        right: 20px;
        border-radius: 8px;
        padding: 4px;
        margin: 50px;
        font-size: 14px;
        color: #000;
        cursor: pointer;
        }

        .logo-akun {
        width: 30px;
        height: 30px;
        }

        .akun a {
        display: block;
        width: 100%;
        height: 100%;
        }

        body.dark-mode .akun {
            background-color: #1a1a1a;
            color: #fff; /* Warna teks (logo dan teks "Logout") saat dark mode aktif (putih) */
        }

        body.dark-mode .akun .logo-akun {
            filter: invert(1); /* Membalikkan warna logo menjadi putih saat dark mode aktif */
        }


    </style>
</head>
<body>
    <div class="bg-image"></div>
    <div class="content">
        <div class="kotak-utama">
            <p class="teks-ukuran-pertama">Welcome Back!</p>
            <b><p class="teks-ukuran-kedua">{{ Auth::user()->name }}</p></b>
            <p class="teks-ukuran-ketiga">Supervisor IT Support - Business Jabotabek</p>
            <p class="teks-ukuran-keempat">Semoga Harimu Menyenangkan!</p>
            <div class="kotak-kedua">
                <a href="halaman_lain.html"></a>
                <img src="dacita 1.png" alt="Gambar 1">
            </div>
            <div class="kotak-ketiga">
                <img src="chita 1.png" alt="Gambar 2">
            </div>
            <div class="kotak-keempat">
                <img src="sibaku 1.png" alt="Gambar 3">
            </div>
            <div class="kotak-kelima">
                <img src="robo dc.png" alt="Gambar 4">
            </div>
            <div class="kotak-keenam">
                <img src="daction.png" alt="Gambar 5">
            </div>
        </div>
        <div class="element-pertama">
        <img src="element 1.png" alt="Tambahan">
        </div>
        <div class="orang-duduk">
            <img src="Orang Duduk.png" alt="Orang">
            </div>
        <div class="kotak-kanan">
            <img src="kotak bawah kanan.png" alt="kanan">
            </div>
            <div class="teks-tambahan">
                <p>Dalam aplikasi DACITA ini terdapat Data Center, Alarm Aktif, Alarm History, Sensor Temperatur, Sansor Humidity, dan Alarm Sensor</p>
            </div>
            <div class="teks-kedua">
                <b><p>Data Center Dashboard IT Area</p></b>
            </div>
            <div class="dacita-kedua">
            <img src="dacita 2.png" alt="dacita">
            </div>
            <div class="gambar-dacita">
                <img src="gambar dacita kecil.png" alt="dacita kecil">
                </div>
                <div class="akun">
                <a href="#" onclick="logoutConfirmation()">
                <img src="logo akun.png" alt="Akun" class="logo-akun">
                </a>
                </div>
    </div>
    <label class="dark-mode-switch">
        <input type="checkbox" id="darkModeToggle">
        <span class="slider"></span>
    </label>

    <script>
        // Ambil elemen checkbox yang digunakan untuk dark mode
        const darkModeToggle = document.getElementById("darkModeToggle");

        // Cek apakah dark mode pernah diaktifkan sebelumnya (gunakan local storage)
        const isDarkMode = localStorage.getItem("darkMode");

        // Jika dark mode pernah diaktifkan, atur statusnya berdasarkan local storage
        if (isDarkMode === "enabled") {
            document.body.classList.add("dark-mode");
            darkModeToggle.checked = true;
        }

        // Event listener untuk mengaktifkan atau menonaktifkan dark mode ketika tombol slider diklik
        darkModeToggle.addEventListener("click", () => {
            if (darkModeToggle.checked) {
                document.body.classList.add("dark-mode");
                // Simpan status dark mode ke local storage
                localStorage.setItem("darkMode", "enabled");
            } else {
                document.body.classList.remove("dark-mode");
                // Simpan status dark mode ke local storage
                localStorage.setItem("darkMode", "disabled");
            }
        });

        function logoutConfirmation() {
            const logout = confirm("Anda yakin ingin keluar akun?");
            if (logout) {
                // Jika pengguna menekan "OK" pada dialog konfirmasi, arahkan ke halaman login
                window.location.href = "/login";
            }
            }
        </script>
</body>
</html>
