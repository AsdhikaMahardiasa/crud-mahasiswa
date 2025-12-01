<?php
class MahasiswaRepository {

    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // CREATE
    public function create($data) {
        $sql = "INSERT INTO mahasiswa (nama, nim, prodi, angkatan, status)
                VALUES (:nama, :nim, :prodi, :angkatan, :status)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($data);
    }

     // READ ALL
    public function all() {
        $stmt = $this->pdo->query("SELECT * FROM mahasiswa ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // READ BY ID
    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM mahasiswa WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // UPDATE
    public function update($data) {
        $sql = "UPDATE mahasiswa SET 
                nama=:nama, nim=:nim, prodi=:prodi, angkatan=:angkatan, status=:status
                WHERE id=:id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($data);
    }
}