# crud-mahasiswa
Aplikasi CRUD Mahasiswa menggunakan PHP, MySQL, PDO

1.Deskripsi Aplikasi
        Aplikasi CRUD Mahasiswa menyediakan fitur:
        - Menambah data mahasiswa
        - Melihat daftar mahasiswa
        - Mengubah data mahasiswa
        - Menghapus data mahasiswa

    Entitas yang Dipilih
        Entitas: Mahasiswa
            Atribut:
                - id — integer, primary key, auto increment  
                - nama — teks  
                - nim — teks, unik  
                - prodi — pilihan (TI, SI, DKV.)  
                - angkatan — angka  
                - status — pilihan (aktif / nonaktif)

    Penjelasan Singkat Fungsi Aplikasi

        - Create: Form tambah mahasiswa data dikirim ke database  
        - Read: Tabel daftar mahasiswa di halaman utama  
        - Update: Form edit yang memuat data lama  
        - Delete: Menghapus data berdasarkan ID dengan konfirmasi

2.Spesifikasi Teknis  
    Bahasa dan Tools
        - PHP: 8.4.13 
        - Database: MySQL 

    Struktur Folder

        crud-mahasiswa
        
        config
            Database.php
        
        models
        Mahasiswa.php
        MahasiswaRepository.php
        
        public/
        index.php
        create.php
        store.php
        edit.php
        update.php
        delete.php
        style.css
        
        schema.sql

    Penjelasan Class Utama

        1. Database
            - Mengatur koneksi PDO ke MySQL  
            - Digunakan oleh Repository

        2. Entity Mahasiswa
            - Representasi data mahasiswa dalam bentuk class

        3. MahasiswaRepository
            Berisi seluruh operasi CRUD:
            - all()
            - find(id)  
            - create(data)
            - update(id, data) 
            - delete(id)  

3.Instruksi Menjalankan Aplikasi
    Import Database
        Gunakan file:
        schema.sql
        Isi schema:
        sql

        CREATE DATABASE crud_mahasiswa;

        USE crud_mahasiswa;

        CREATE TABLE mahasiswa (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(100) NOT NULL,
            nim VARCHAR(20) NOT NULL UNIQUE,
            prodi VARCHAR(50) NOT NULL,
            angkatan INT NOT NULL,
            status ENUM('aktif','nonaktif') DEFAULT 'aktif'
        );

    Pengaturan Koneksi Database
        Edit file:
        config/Database.php
        Sesuaikan:
        php
        private $host = "localhost";
        private $db   = "crud_mahasiswa";
        private $user = "root";
        private $pass = "";   

    Menjalankan Aplikasi
       php -S localhost:8000 -t public

    Buka browser:
        http://localhost/crud-mahasiswa/public

4.Contoh Skenario Uji Singkat
    Tambah 1 Data
        - Buka halaman Tambah  
        - Isi form  
        - Klik Simpan  
        - Data tampil di tabel  

    Tampilkan Daftar Data
        - Akses halaman utama  
        - Semua data mahasiswa tampil di tabel

    Ubah Data Tertentu
        - Klik Edit  
        - Ubah salah satu field  
        - Klik Update  
        - Data berubah di tabel  

    Hapus Data
        - Klik Delete  
        - Konfirmasi OK  
        - Data hilang dari daftar  






