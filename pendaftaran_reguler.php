<?php

class PendaftaranReguler extends Pendaftaran {
    protected $pilihan_prodi;
    protected $lokasi_kampus;

    public function __construct($data) {
        parent::__construct($data);
        $this->pilihan_prodi = $data['pilihan_prodi'];
        $this->lokasi_kampus = $data['lokasi_kampus'];
    }

    public function hitungTotalBiaya() {
        return $this->biaya_pendaftaran_dasar;
    }

    public function tampilkanInfoJalur() {
        return "Jalur Reguler: Prodi {$this->pilihan_prodi} di {$this->lokasi_kampus}";
    }

    public static function getDaftarReguler($db) {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Reguler'";
        return $db->conn->query($query);
    }
}

?>