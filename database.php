<?php

class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db   = "DB_SIMULASI_PBO_TI1C_AHMADMUBAROK";
    public $conn;

    public function __construct() {
        // Membuat koneksi
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);

        // Cek koneksi
        if ($this->conn->connect_error) {
            die();
        } else {
            // Pesan ini akan muncul saat objek dibuat
            echo "";
        }
    }
}

// PENTING: Baris di bawah ini yang memicu constructor untuk berjalan
$db = new Database();

?>