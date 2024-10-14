<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="styles.css"> <"css/a.html">
</head>

<body>

    <div id="halaman">
        <nav class="navbar">
            <ul>
                <li><a href="#">Menu-1</a></li>
                <li><a href="#">Menu-2</a></li>
                <li><a href="#">Menu-3</a></li>
                <li>
                    <a href="#">Menu-4</a>
                    <ul>
                        <li><a href="#">Submenu-1</a></li>
                        <li><a href="#">Submenu-2</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

</body>
</html>


        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #4CAF50;
            text-align: center;
        }
        h2 {
            color: #333;
        }
        p {
            margin: 15px 0;
        }
    </style>
</head>
<body>

  
    <h1>PERPUSTAKAAN IAIN FATTAHUL MULUK PAPUA</h1>
    <h2>Selamat Datang Di Perpustakaan Iyen Ovita Marpaung!</h2>
    <p>Perkenalkan nama saya Iyen Ovita Marpaung, NIM 222201011, Program Studi D3 Perpustakaan, Mata Kuliah Pemrograman Web. Ini merupakan homepage perpustakaan pertama saya.</p>

    <hr/>

    <h1>PERPUSTAKAAN IAIN FATTAHUL MULUK PAPUA</h1>
    <h2>Selamat Datang Di Perpustakaan Iyen Ovita Marpaung!</h2>
    <p>Perkenalkan nama saya Iyen Ovita Marpaung, NIM 222201011, Program Studi D3 Perpustakaan, Mata Kuliah Pemrograman Web. Ini merupakan homepage perpustakaan pertama saya.</p>

    <div class="dropdown">
        <button class="mainmenubtn">Main Menu</button>
        <div class="dropdown-child">
            <a href="http://www.yourdomain.com/page1.html">Sub Menu 1</a>
            <a href="http://www.yourdomain.com/page2.html">Sub Menu 2</a>
            <a href="http://www.yourdomain.com/page3.html">Sub Menu 3</a>
            <a href="http://www.yourdomain.com/page4.html">Sub Menu 4</a>
            <a href="http://www.yourdomain.com/page5.html">Sub Menu 5</a>
        </div>
    
    <h2>Berikut ini gambar dari Perpustakaan IAIN Fattahul Muluk Papua</h2>
    <img src="https://belajargiat.id/wp-content/uploads/2019/08/profil-iain-papua-1024x576.jpg" alt="Perpustakaan IAIN Fattahul Muluk Papua">

    <h2>Video Profil Perpustakaan IAIN Fattahul Muluk Papua</h2>
    <iframe 
        width="560" 
        height="315" 
        src="https://www.youtube.com/embed/on_OgiR0iVk" 
        title="YouTube video player" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen> </iframe>


    <h1>Inong Dang Ho Na Sala</h1>
    <audio controls>
        <source src="path/to/your/audio/InongDangHoNaSalaOsenHutasoit.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>


<h2>Formulir Perpustakaan iain fattahul muluk papua</h2>
    
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

</body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Bahan Buku</title>
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
</body>
<body>
<h2>Formulir Pemesanan Buku</h2>
    
    <form action="#" method="post">
        <table>
            <tr>
                <th>Nama</th>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <th>Nomor Anggota Perpustakaan</th>
                <td><input type="text" name="nomor anggota perpustakaan" required></td>
            </tr>
            <tr>
                <th>Tanggal Pemesanan</th>
                <td><textarea name="Tanggal Pemesanan" rows="3" required></textarea></td>
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
                <th>Penulis Buku</th>
                <td><input type="text" name="Penulis Buku" required></td>
            </tr>
            <tr>
                <th>No ISBN</th>
               <td><input type="text" name="no isbn" required></td>
            </tr>
             <tr>
                <th>Judul Buku Yang Dipesan</th>
                <td><input type="text" name="judul buku yang dipesan" required></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Submit">
    </form>
<!DOCTYPE html>
        <h1> Pengertian HTML dan CSS </h1>
        <p>HTML adalah bahasa markup standar yang digunakan untuk membuat struktur dan konten halaman web. Dalam HTML, pengembang web mendefinisikan elemen-elemen seperti teks, gambar, tautan, formulir, dan elemen lainnya yang membentuk tampilan halaman web. HTML menggunakan tag-tag untuk menandai elemen-elemen ini sehingga peramban web tahu cara menampilkan mereka.</p>
    
        <p>CSS adalah bahasa stylesheet yang digunakan untuk mengontrol tata letak dan tampilan halaman web. Dengan CSS, Anda dapat mengatur warna, ukuran, spasi, jenis font, dan banyak properti tata letak lainnya untuk elemen-elemen HTML. Penggunaan CSS memungkinkan pemisahan antara struktur dan tata letak, sehingga HTML dapat fokus pada struktur konten, sementara CSS mengontrol cara konten tersebut ditampilkan.</p>
    </body>
    </html>
</body>
<h2>Formulir Perpanjangan peminjaman buku </h2>
    
    <form action="#" method="post">
        <table>
            <tr>
                <th>Nama</th>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <th>Nomor Anggota Perpustakaan</th>
                <td><input type="text" name="nomor anggota perpustakaan" required></td>
            </tr>
            <tr>
                <th>Tanggal Pemesanan</th>
                <td><textarea name="Tanggal Peminjamanan" rows="3" required></textarea></td>
            </tr>
          
            <tr>
                <th>Email</th>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <th>No Telepon</th>
                <td><input type="text" name="no telepon" required></td>
            </tr>
           
            <tr>
                <th>No ISBN</th>
                <td><input type="text" name="no isbn" required></td>
            </tr>
             <tr>
                <th>Tanggal Perpanjangan Buku</th>
                <td><input type="date" name="Tanggal perpanjangan buku" required></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Submit">
    </form>
        <h1> Pengertian HTML dan CSS </h1>
        <p>HTML adalah bahasa markup standar yang digunakan untuk membuat struktur dan konten halaman web. Dalam HTML, pengembang web mendefinisikan elemen-elemen seperti teks, gambar, tautan, formulir, dan elemen lainnya yang membentuk tampilan halaman web. HTML menggunakan tag-tag untuk menandai elemen-elemen ini sehingga peramban web tahu cara menampilkan mereka.</p>
    
        <p>CSS adalah bahasa stylesheet yang digunakan untuk mengontrol tata letak dan tampilan halaman web. Dengan CSS, Anda dapat mengatur warna, ukuran, spasi, jenis font, dan banyak properti tata letak lainnya untuk elemen-elemen HTML. Penggunaan CSS memungkinkan pemisahan antara struktur dan tata letak, sehingga HTML dapat fokus pada struktur konten, sementara CSS mengontrol cara konten tersebut ditampilkan.</p>


</html>
