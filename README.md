<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        .navbar {
            background-color: #333;
            position: relative;
            z-index: 999;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .navbar li {
            display: inline-block;
            position: relative; /* Untuk menempatkan submenu dengan benar */
        }

        .navbar li a {
            color: white;
            display: block;
            padding: 10px 20px;
            text-decoration: none;
        }

        .navbar ul ul {
            position: absolute;
            top: 100%;
            display: none;
            background-color: #333; /* Untuk mempertahankan gaya dropdown */
        }

        .navbar ul ul li {
            display: block;
        }

        .navbar li:hover > ul {
            display: block;
        }

        .navbar ul ul li a:hover {
            background-color: #555;
        }
    </style>
</head>

<body>

    <div id="halaman">
        <nav class="navbar"> <!-- Menambahkan kelas untuk styling -->
            <ul>
                <li><a href="#">Menu</a></li>
                <li>
                    <a href="#">dropdown</a>
                    <ul>
                        <li><a href="selamat datang.html">Submenu-1</a></li>
                        <li><a href="buku.html">Submenu-2</a></li>
                        <li><a href="table pemesanan.html">Submenu-3</a></li>
                        <li><a href="Modul52.html">Modul5-2</a></li>
                        <li><a href="Modul53.html">Modul5-3</a></li>
                        <li><a href="Modul6.html">modul6-1</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    
</body>
</html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan IAIN Fattahul Muluk Papua</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<header>
<h1>PERPUSTAKAAN IAIN FATTAHUL MULUK PAPUA</h1>
<h2>Selamat Datang Di Perpustakaan Iyen Ovita Marpaung!</h2>
<p>Perkenalkan nama saya Iyen Ovita Marpaung, NIM 222201011, Program Studi D3 Perpustakaan, Mata Kuliah Pemrograman Web. Ini merupakan homepage perpustakaan pertama saya.</p>
<p><a href="https://perpustakaan.iainfmpapua.ac.id">Website Perpustakaan Iaian Fattahul Muluk Papua</a></p>
</header>
    
<h2>Gambar Perpustakaan IAIN Fattahul Muluk Papua</h2>
<img src="https://belajargiat.id/wp-content/uploads/2019/08/profil-iain-papua-1024x576.jpg" alt="Perpustakaan IAIN Fattahul Muluk Papua" style="width:100%; height:auto;">

<h2>Video Profil Perpustakaan IAIN Fattahul Muluk Papua</h2>
<iframe 
    width="560" 
    height="315" 
    src="https://www.youtube.com/embed/on_OgiR0iVk" 
    title="YouTube video player" 
    frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
    allowfullscreen></iframe>

<h1>Inong Dang Ho Na Sala</h1>
<audio controls>
    <source src="path/to/your/audio/InongDangHoNaSalaOsenHutasoit.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

<h2>Formulir Perpustakaan IAIN Fattahul Muluk Papua</h2>
<form action="#" method="post">
    <table>
        <tr>
            <th>Nama</th>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <th>NIM</th>
            <td><input type="text" name="nim" required></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><textarea name="alamat" rows="3" required></textarea></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>
                <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
                <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
            </td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <th>No HP</th>
            <td><input type="text" name="no_hp" required></td>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <td><input type="text" name="tempat_lahir" required></td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td><input type="date" name="tanggal_lahir" required></td>
        </tr>
    </table>
    <br>
    <input type="submit" value="Submit">
</form>

<h1>Daftar Bahan Buku</h1>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Pemrograman Web Dasar</td>
            <td>Andi Saputra</td>
            <td>Media Press</td>
            <td>2020</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Pengenalan HTML dan CSS</td>
            <td>Budi Santoso</td>
            <td>Ilmu Komputer</td>
            <td>2021</td>
        </tr>
        <tr>
            <td>3</td>
            <td>JavaScript untuk Pemula</td>
            <td>Siti Rahmawati</td>
            <td>Edu Books</td>
            <td>2019</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Database dan SQL</td>
            <td>Joko Widodo</td>
            <td>Tech Press</td>
            <td>2022</td>
        </tr>
    </tbody>
</table>

<h2>Formulir Pemesanan Buku</h2>
<form action="#" method="post">
    <table>
        <tr>
            <th>Nama</th>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <th>Nomor Anggota Perpustakaan</th>
            <td><input type="text" name="nomor_anggota" required></td>
        </tr>
        <tr>
            <th>Tanggal Pemesanan</th>
            <td><input type="date" name="tanggal_pemesanan" required></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <th>No HP</th>
            <td><input type="text" name="no_hp" required></td>
        </tr>
        <tr>
            <th>Penulis Buku</th>
            <td><input type="text" name="penulis_buku" required></td>
        </tr>
        <tr>
            <th>No ISBN</th>
            <td><input type="text" name="no_isbn" required></td>
        </tr>
        <tr>
            <th>Judul Buku Yang Dipesan</th>
            <td><input type="text" name="judul_buku" required></td>
        </tr>
    </table>
    <br>
    <input type="submit" value="Submit">
</form>

<h2>Formulir Perpanjangan Peminjaman Buku</h2>
<form action="#" method="post">
    <table>
        <tr>
            <th>Nama</th>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <th>Nomor Anggota Perpustakaan</th>
            <td><input type="text" name="nomor_anggota" required></td>
        </tr>
        <tr>
            <th>Tanggal Peminjaman</th>
            <td><input type="date" name="tanggal_peminjaman" required></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <th>No Telepon</th>
            <td><input type="text" name="no_telepon" required></td>
        </tr>
        <tr>
            <th>No ISBN</th>
            <td><input type="text" name="no_isbn" required></td>
        </tr>
        <tr>
            <th>Tanggal Perpanjangan Buku</th>
            <td><input type="date" name="tanggal_perpanjangan" required></td>
        </tr>
    </table>
    <br>
    <input type="submit" value="Submit">
</form>

<h1>Pengertian HTML dan CSS</h1>
<p>HTML adalah bahasa markup standar yang digunakan untuk membuat struktur dan konten halaman web. Dalam HTML, pengembang web mendefinisikan elemen-elemen seperti teks, gambar, tautan, formulir, dan elemen lainnya yang membentuk tampilan halaman web. HTML menggunakan tag-tag untuk menandai elemen-elemen ini sehingga peramban web tahu cara menampilkan mereka.</p>

<p>CSS adalah bahasa stylesheet yang digunakan untuk mengontrol tata letak dan tampilan halaman web. Dengan CSS, Anda dapat mengatur warna, ukuran, spasi, jenis font, dan banyak properti tata letak lainnya untuk elemen


</body>
</html>
