<?php
// Konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "dbuas";

// Membuat koneksi ke database
$conn = mysqli_connect($host, $user, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(https://media.istockphoto.com/id/1215285369/id/vektor/spanduk-kursus-online-dengan-gaya-datar-dengan-ruang-kerja-laptop-buku-lampu-dan-kopi.jpg?s=1024x1024&w=is&k=20&c=VcJcnunUeHmEHItaeLs1AEPQGK6lCEayPsjyRsLRPD4=); /* Ganti dengan URL/path gambar latar */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #333;
        }
        .form-container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.9); /* Transparansi formulir */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        h2 {
            text-align: center;
            color: #4CAF50;
        }
        label {
            display: block;
            margin-bottom: 8px;
            margin-top: 15px;
            font-weight: bold;
        }
        input, textarea, button {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input:focus, textarea:focus {
            border-color: #4CAF50;
            outline: none;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Form Pendaftaran Kursus</h2>
        <form action="proses_pendaftaran.php" method="post" enctype="multipart/form-data">
            <!-- Nama -->
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>

            <!-- Email -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>

            <!-- Telepon -->
            <label for="telepon">Telepon:</label>
            <input type="text" id="telepon" name="telepon" placeholder="Masukkan nomor telepon" required>

            <!-- Alamat -->
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" rows="4" placeholder="Masukkan alamat Anda" required></textarea>

            <!-- Kursus -->
            <label for="kursus">Kursus:</label>
            <input type="text" id="kursus" name="kursus" placeholder="Masukkan nama kursus" required>

            <!-- Tanggal Daftar -->
            <label for="tgl_daftar">Tanggal Daftar:</label>
            <input type="date" id="tgl_daftar" name="tgl_daftar" required>

            <!-- Jurusan -->
            <label for="jurusan">Jurusan:</label>
            <input type="text" id="jurusan" name="jurusan" placeholder="Masukkan jurusan" required>

            <!-- Tombol Submit -->
            <a href="tb_user.php">daftar</a>
        </form>
    </div>
</body>
</html>





