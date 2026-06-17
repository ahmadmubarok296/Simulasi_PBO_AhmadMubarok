<?php

abstract class Pendaftaran {
    // 3. Properti Terenkapsulasi (protected)
    // Sesuai dengan nama kolom pada tabel_pendaftaran
    protected $id_pendaftaran;
    protected $nama_calon;
    protected $asal_sekolah;
    protected $nilai_ujian;
    protected $biaya_pendaftaran_dasar;

    // Constructor untuk memetakan data dari database ke properti objek
    public function __construct($data) {
        $this->id_pendaftaran = $data['id_pendaftaran'];
        $this->nama_calon = $data['nama_calon'];
        $this->asal_sekolah = $data['asal_sekolah'];
        $this->nilai_ujian = $data['nilai_ujian'];
        $this->biaya_pendaftaran_dasar = $data['biaya_pendaftaran_dasar'];
    }

    // 4. Metode Abstrak (Wajib diimplementasikan oleh kelas turunan)
    abstract public function hitungTotalBiaya();
    abstract public function tampilkanInfoJalur();
}

?>