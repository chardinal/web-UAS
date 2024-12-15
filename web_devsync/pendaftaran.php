                  
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
    <link rel="stylesheet" href="style_pendaftaran.css">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="header-top">
            <div class="container header-content">
                <div class="logo-container">
                    <img src="img/logo baru devsync.jpg" alt="DevSync" class="logo">
                </div>
                <div class="PT">
                    <h1>DevSync</h1>
                    <p>Wujudkan Aplikasi Mobile Impian Anda dengan Fitur Unggulan</p>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">

            <!-- Registration Form -->
            <div class="main-content">
                <div class="form-container">
                    <h2>Formulir Pemesanan Aplikasi Mobile</h2>
                    <?php
                    // Perbaiki nama file koneksi
                    include 'db_conection.php';

                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        // Periksa koneksi
                        if (!$conn) {
                            die("<p>Gagal terhubung ke database. Silakan coba lagi nanti.</p>");
                        }
                        // Ambil data dan sanitasi
                        $nama = htmlspecialchars(trim($_POST['nama']));
                        $nik = htmlspecialchars(trim($_POST['nik']));
                        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
                        $telepon = htmlspecialchars(trim($_POST['telepon']));
                        $alamat = htmlspecialchars(trim($_POST['alamat']));
                        $package = htmlspecialchars(trim($_POST['package']));
                        $type = htmlspecialchars(trim($_POST['tipe']));
                        $features = htmlspecialchars(trim($_POST['features']));
                        $message = htmlspecialchars(trim($_POST['pesan']));

                   
                        // Validasi data wajib
                        if (empty($nama) || empty($nik) || empty($email) || empty($telepon) || empty($alamat) || empty($package) || empty($type) || empty($features)) {
                            echo "<p>Harap isi semua field yang bertanda *</p>";
                        } else {
                            // Gunakan prepared statement untuk keamanan
                            $stmt = $conn->prepare(
                                "INSERT INTO pemesanan (nama, nik, email, telepon, alamat, package, tipe, features, pesan)
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"
                            );
                            $stmt->bind_param(
                                "sisisssss",
                                $nama, $nik, $email, $telepon, $alamat, $package, $type, $features, $message
                            );

                            if ($stmt->execute()) {
                                echo "<p>Pesanan berhasil dibuat. Terima kasih!</p>";
                            } else {
                                echo "<p>Terjadi kesalahan: " . $stmt->error . "</p>";
                            }
                            $stmt->close();
                        }
                        $conn->close();


                    }
                    ?>
        
                    <form id="registrationForm" method="POST" action='' enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap*</label>
                            <input type="text" id="nama" name="nama" required>
                        </div>

                        <div class="form-group">
                            <label for="nik">NIK*</label>
                            <input type="text" id="nik" name="nik" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="telepon">Nomor Telepon*</label>
                            <input type="tel" id="telepon" name="telepon" required>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat Lengkap*</label>
                            <textarea id="alamat" name="alamat" rows="3" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="package">Pilih Paket:</label>
                            <select id="package" name="package" required>
                                <option value="">Pilih Paket</option>
                                <option value="basic">BASIC</option>
                                <option value="standard">STANDARD</option>
                                <option value="advanced">ADVANCED</option>
                                <option value="mighty">MIGHTY</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tipe">Tipe Aplikasi Mobile:</label>
                            <select id="tipe" name="tipe" required>
                                <option value="">Pilih Tipe Aplikasi</option>
                                <option value="pendidikan">Pendidikan</option>
                                <option value="kesehatan">Kesehatan</option>
                                <option value="travelling">Travelling</option>
                                <option value="e-commerce">E-Commerce</option>
                                <option value="sosial">Sosial</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="features">Fitur Dalam Aplikasi:</label>
                            <textarea id="features" name="features" rows="4" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="pesan">Pesan Tambahan:</label>
                            <textarea id="pesan" name="pesan" rows="4"></textarea>
                        </div>

                        <button type="submit">Daftar Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>