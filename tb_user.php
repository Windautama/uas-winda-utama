<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbuas"; // Ganti dengan nama database Anda

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Inisialisasi variabel untuk menyimpan pesan
$success_message = "";
$error_message = "";

// Proses penyimpanan data ketika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $nama_lengkap = trim($_POST['nama_lengkap']);
    $tgl_lahir = trim($_POST['tgl_lahir']);

    // Validasi sederhana
    if (empty($username) || empty($nama_lengkap) || empty($tgl_lahir)) {
        $error_message = "Semua kolom wajib diisi!";
    } else {
        // Query untuk menyimpan data
        $sql = "INSERT INTO pengguna (username, nama_lengkap, tgl_lahir, tgl_dibuat, tgl_diubah) 
                VALUES (?, ?, ?, NOW(), NOW())";

        // Menggunakan prepared statement untuk keamanan
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $username, $nama_lengkap, $tgl_lahir);

        if (mysqli_stmt_execute($stmt)) {
            $success_message = "Pengguna baru berhasil ditambahkan!";
        } else {
            $error_message = "Terjadi kesalahan: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    }
}

// Tutup koneksi database
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
            background-color: #f4f4f9;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="date"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        
        .message {
            margin-top: 10px;
            text-align: center;
            font-weight: bold;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
        .back-link {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
        }
        .back-link:hover {
            color: #388E3C;
        }
        .btn {
            padding: 10px 275px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Pengguna Baru</h1>
        <!-- Pesan berhasil atau gagal -->
        <?php if (!empty($success_message)): ?>
            <div class="message success"><?php echo htmlspecialchars($success_message); ?></div>
        <?php elseif (!empty($error_message)): ?>
            <div class="message error"><?php echo htmlspecialchars($error_message); ?></div>
        <?php endif; ?>

        <!-- Form input data pengguna -->
        <form method="POST" action="">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username" required>

            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap" required>

            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" id="tgl_lahir" name="tgl_lahir" required>

            <!-- Tombol Submit -->
                <a href="tb_laporan.php"class="btn">SIMPAN</a>
            </button>
            
            </button>
        </form>
        <!-- Tombol kembali ke halaman utama -->
        <a class="back-link" href="index.php">← Kembali ke Data Pengguna</a>
    </div>
</body>
</html>