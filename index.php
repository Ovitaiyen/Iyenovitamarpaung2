<?php
echo "<h1>Daftar Hari Belajar PHP</h1>";
for ($i = 1; $i <= 1000; $i++) {
    echo "<p>Ini adalah hari ke-$i belajar PHP</p>";
}
?>

<form action="hasil.php" method="post">
    <label for="bilangan1">Bilangan 1:</label>
    <input type="number" name="bilangan1" required><br>
    
    <label for="bilangan2">Bilangan 2:</label>
    <input type="number" name="bilangan2" required><br>
    
    <label for="operasi">Pilih operasi:</label>
    <select name="operasi" required>
        <option value="tambah">Penjumlahan</option>
        <option value="kurang">Pengurangan</option>
        <option value="kali">Perkalian</option>
        <option value="bagi">Pembagian</option>
    </select><br>

    <input type="submit" value="Hitung">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bilangan1 = $_POST['bilangan1'];
    $bilangan2 = $_POST['bilangan2'];
    $operasi = $_POST['operasi'];
    
    switch ($operasi) {
        case 'tambah':
            $hasil = $bilangan1 + $bilangan2;
            break;
        case 'kurang':
            $hasil = $bilangan1 - $bilangan2;
            break;
        case 'kali':
            $hasil = $bilangan1 * $bilangan2;
            break;
        case 'bagi':
            if ($bilangan2 == 0) {
                $hasil = "Tidak bisa dibagi dengan 0!";
            } else {
                $hasil = $bilangan1 / $bilangan2;
            }
            break;
    }
    echo "<h2>Hasil Perhitungan: $hasil</h2>";
}
?>


<form action="proses_login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <input type="submit" value="Login">
</form>
<?php
$username = $_POST['username'];
$password = $_POST['password'];

// Simulasi data login
$valid_username = "admin";
$valid_password = "password123";

if (empty($username) || empty($password)) {
    echo "<h2>Input tidak lengkap. Harap masukkan username dan password.</h2>";
} elseif ($username == $valid_username && $password == $valid_password) {
    echo "<h2>Login Sukses. Selamat datang, $username!</h2>";
} else {
    echo "<h2>Login Gagal. Username atau password salah.</h2>";
}
?>


