<?php

class PendaftaranPrestasi extends Pendaftaran {
    protected $jenis_prestasi;
    protected $tingkat_prestasi;

    public function __construct($data) {
        parent::__construct($data);
        $this->jenis_prestasi = $data['jenis_prestasi'];
        $this->tingkat_prestasi = $data['tingkat_prestasi'];
    }

    public function hitungTotalBiaya() {
        return $this->biaya_pendaftaran_dasar - 50000;
    }

    public function tampilkanInfoJalur() {
        return "Jalur Prestasi (Dapat potongan apresiasi)";
    }

    public static function getDaftarPrestasi($db) {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Prestasi'";
        return $db->conn->query($query);
    }
}

?>