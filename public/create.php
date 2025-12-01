<link rel="stylesheet" href="style.css">

<div class="container">
<h2>Tambah Mahasiswa</h2>

<form action="store.php" method="POST">

    <label>Nama</label>
    <input type="text" name="nama" required>

    <label>NIM</label>
    <input type="text" name="nim" required>

    <label>Prodi</label>
    <select name="prodi">
        <option value="TI">TI</option>
        <option value="SI">SI</option>
        <option value="DKV">DKV</option>
    </select>

    <label>Angkatan</label>
    <input type="number" name="angkatan" required>

    <label>Status</label>
    <select name="status">
        <option value="aktif">Aktif</option>
        <option value="nonaktif">Nonaktif</option>
    </select>

    <button type="submit">Simpan</button>
</form>
</div>