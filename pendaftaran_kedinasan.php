<?php

class PendaftaranKedinasan extends Pendaftaran {
    protected $sk_ikatan_dinas;
    protected $instansi_sponsor;

    public function __construct($data) {
        parent::__construct($data);
        $this->sk_ikatan_dinas = $data['sk_ikatan_dinas'];
        $this->instansi_sponsor = $data['instansi_sponsor'];
    }

    public function hitungTotalBiaya() {
        return $this->biaya_pendaftaran_dasar * 1.25;
    }

    public function tampilkanInfoJalur() {
        return "Jalur Kedinasan (Biaya administrasi kemitraan 25%)";
    }
    public static function getDaftarKedinasan($db) {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Kedinasan'";
        return $db->conn->query($query);
    }
}

?>