<?php
// Konfigurasi Database
$host = "localhost"; // Nama host
$user = "root"; // Username database
$password = ""; // Password database
$database = "cvgina"; // Nama database
// Membuat koneksi ke database
$conn = new mysqli($host, $user, $password, $database);
// Cek koneksi
if ($conn->connect_error) {
die("Koneksi gagal: " . $conn->connect_error);
}
// Query untuk mengambil data dari tabel
$sql = "SELECT id, nama, jenis_kelamin, alamat, deskripsi, foto FROM users";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Portfolio</title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
rel="stylesheet">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-left">
            <span class="brand"> 2203010200 GinaNadiatulJannah K22</span>
        </div>
        <div class="navbar-right">
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#project">Project</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#hire" class="hire-btn">Hire Me</a></li>
            </ul>
        </div>
    </nav>
</body>
</html><!-- Hero Section -->
<section class="hero-section">
<div class="container">
<div class="row align-items-center">
<!-- Hero Text -->
<?php while ($row = $result->fetch_assoc()): ?>
<div class="col-md-6 hero-content">
<h1><span>I’m</span> <br> <?= $row['nama'] ?></h1>
<!-- Tampilkan Deskripsi -->
<p class="my-3">
<?= $row['deskripsi'] ?>
</p>
<a href="#" class="btn btn-custom">Download CV</a>
</div>
<!-- Hero Image -->
<div class="col-md-6 text-center hero-image">
<img src="./assets/images/<?= $row['foto'] ?>" alt="Foto" width="100">
</div>
</div>
</div>
<?php endwhile; ?>
</section>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$conn = new mysqli('localhost', 'root', '', 'cvgina');

$result = $conn->query("SELECT * FROM educations");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Education List</title>
</head>
<body>
    <h1>Education</h1>
    <table>
        <tr>
            <th>No.</th>
            <th>Pendidikan</th>
            <th>Tahun</th>
            <th>Nama Sekolah / Kampus</th>
        </tr>
        <?php $no = 1; while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['pendidikan']; ?></td>
            <td><?= $row['tahun']; ?></td>
            <td><?= $row['sekolah']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
<head>
    <title>Project</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    <div class="container">
        <h1>PROJECT</h1>
        <div class="project-list">
            <?php
            // Data proyek
            $projects = [
                [
                    "title" => "Pagelaran Seni Tari",
                    "description" => "Dalam rangka memenuhi tugas mata kuliah Seni Budaya, saya menonton kreasi pentas seni tari yang ditampilkan dengan indah dan memukau.",
                    "link" => "#",
                ],
                [
                    "title" => "Pagelaran Seni Tari",
                    "description" => "Dalam rangka memenuhi tugas mata kuliah Seni Budaya, saya menonton kreasi pentas seni tari yang ditampilkan dengan indah dan memukau.",
                    "link" => "#",
                ],
            ];

            // Loop data proyek
            foreach ($projects as $project) {
                echo "
                <div class='project-card'>
                    <div class='image-placeholder'></div>
                    <h3>{$project['title']}</h3>
                    <p>{$project['description']}</p>
                    <a href='{$project['link']}'>Link</a>
                </div>
                ";
            }
            ?>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    <footer class="contact-section">
        <div class="contact-content">
            <h2>Contact</h2>
            <p><strong>Address:</strong><br>
                Jl. Bojong Kaum Gg H. Sodikin<br>
                Tasikmalaya, Jawa Barat.
            </p>
            <div class="social-icons">
                <a href="#"><i class="icon">🌐</i> Instagram</a>
                <a href="#"><i class="icon">🌐</i> Facebook</a>
                <a href="#"><i class="icon">🌐</i> Twitter</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2024 Your Website. All rights reserved.</p>
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
            </div>
        </div>
    </footer>
</body>
</html>