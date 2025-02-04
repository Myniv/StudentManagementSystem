<h2><?= isset($mahasiswa) ? 'Edit Mahasiswa' : 'Tambah Mahasiswa'; ?></h2>

<form method="post" action="<?= isset($mahasiswa) ? '/mahasiswa/update' : '/mahasiswa/add'; ?>">
    <input type="hidden" name="nim" value="<?= isset($mahasiswa) ? $mahasiswa->getNim() : ''; ?>">

    <label>NIM:</label>
    <input type="text" name="nim" value="<?= isset($mahasiswa) ? $mahasiswa->getNim() : ''; ?>" <?= isset($mahasiswa) ? 'readonly' : ''; ?> required><br>

    <label>Nama:</label>
    <input type="text" name="nama" value="<?= isset($mahasiswa) ? $mahasiswa->getNama() : ''; ?>" required><br>

    <label>Jurusan:</label>
    <input type="text" name="jurusan" value="<?= isset($mahasiswa) ? $mahasiswa->getJurusan() : ''; ?>" required><br>

    <button type="submit"><?= isset($mahasiswa) ? 'Update' : 'Simpan'; ?></button>
</form>

<a href="/mahasiswa">Kembali</a>