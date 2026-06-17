<?php
require_once 'database.php';

// --- LOGIKA KELAS (Disederhanakan untuk satu file) ---
abstract class Pendaftaran {
    protected $id_pendaftaran, $nama_calon, $asal_sekolah, $nilai_ujian, $biaya_pendaftaran_dasar;
    public function __construct($data) {
        $this->id_pendaftaran = $data['id_pendaftaran'];
        $this->nama_calon = $data['nama_calon'];
        $this->asal_sekolah = $data['asal_sekolah'];
        $this->nilai_ujian = $data['nilai_ujian'];
        $this->biaya_pendaftaran_dasar = $data['biaya_pendaftaran_dasar'];
    }
    abstract public function hitungTotalBiaya();
    abstract public function tampilkanInfoJalur();
}

class PendaftaranReguler extends Pendaftaran {
    public function hitungTotalBiaya() { return $this->biaya_pendaftaran_dasar; }
    public function tampilkanInfoJalur() { return "Reguler"; }
    public static function getDaftarReguler($db) { return $db->conn->query("SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Reguler'"); }
}

class PendaftaranPrestasi extends Pendaftaran {
    public function hitungTotalBiaya() { return $this->biaya_pendaftaran_dasar - 50000; }
    public function tampilkanInfoJalur() { return "Prestasi"; }
    public static function getDaftarPrestasi($db) { return $db->conn->query("SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Prestasi'"); }
}

class PendaftaranKedinasan extends Pendaftaran {
    public function hitungTotalBiaya() { return $this->biaya_pendaftaran_dasar * 1.25; }
    public function tampilkanInfoJalur() { return "Kedinasan"; }
    public static function getDaftarKedinasan($db) { return $db->conn->query("SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Kedinasan'"); }
}

$db = new Database();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; color: #333; }
        
        /* Judul dengan Gradient Warna */
        .gradient-title {
            background: linear-gradient(90deg, #1e3c72, #2a5298);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 900;
        }

        .card { border-radius: 20px; overflow: hidden; border: none; box-shadow: 0 15px 35px rgba(0,0,0,0.08); }
        .card-header { padding: 1.5rem; border: none; color: white; font-weight: 700; }
        
        /* Warna Header Card */
        .bg-reguler-header { background: #3498db; }
        .bg-prestasi-header { background: #f39c12; }
        .bg-kedinasan-header { background: #e74c3c; }

        .table thead { background-color: #f1f3f5; }
        .badge-jalur { border-radius: 8px; padding: 6px 12px; font-size: 0.85rem; }
    </style>
</head>
<body class="py-5">
<div class="container">
    <header class="text-center mb-5">
        <h1 class="gradient-title display-4">DASHBOARD PENDAFTARAN MABA</h1>
        <p class="text-secondary lead">Sistem Informasi Seleksi Mahasiswa Berbasis OOP</p>
    </header>

    <?php 
    function renderCard($judul, $data, $kelasObj, $warnaHeader) {
        echo "<div class='card mb-5'>
                <div class='card-header $warnaHeader'><h5>$judul</h5></div>
                <div class='table-responsive'>
                <table class='table table-hover align-middle mb-0'>
                    <thead class='text-muted'><tr><th>Nama Calon</th><th>Asal Sekolah</th><th>Status</th><th>Total Biaya</th></tr></thead>
                    <tbody>";
        while ($row = $data->fetch_assoc()) {
            $obj = new $kelasObj($row);
            echo "<tr>
                    <td class='fw-bold'>{$row['nama_calon']}</td>
                    <td>{$row['asal_sekolah']}</td>
                    <td><span class='badge bg-light text-dark border'>{$obj->tampilkanInfoJalur()}</span></td>
                    <td class='text-primary fw-bold'>Rp " . number_format($obj->hitungTotalBiaya(), 0, ',', '.') . "</td>
                  </tr>";
        }
        echo "</tbody></table></div></div>";
    }

    renderCard("Jalur Reguler", PendaftaranReguler::getDaftarReguler($db), 'PendaftaranReguler', 'bg-reguler-header');
    renderCard("Jalur Prestasi", PendaftaranPrestasi::getDaftarPrestasi($db), 'PendaftaranPrestasi', 'bg-prestasi-header');
    renderCard("Jalur Kedinasan", PendaftaranKedinasan::getDaftarKedinasan($db), 'PendaftaranKedinasan', 'bg-kedinasan-header');
    ?>
</div>
</body>
</html>