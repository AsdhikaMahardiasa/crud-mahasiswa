CREATE DATABASE crud_mahasiswa;
USE crud_mahasiswa;

CREATE TABLE mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nim VARCHAR(20) NOT NULL UNIQUE,
    prodi VARCHAR(50) NOT NULL,
    angkatan INT NOT NULL,
    status ENUM('aktif','nonaktif') NOT NULL DEFAULT 'aktif'
);