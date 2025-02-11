<h2><?= isset($mahasiswa) ? 'Edit Mahasiswa' : 'Tambah Mahasiswa'; ?></h2>

<?php if (isset($errors)): ?>
    <div style="color: red;">
        <ul>
            <?php foreach ($errors as $error) { ?>
                <li><?= esc($error) ?></li>
            <?php } ?>
        </ul>
    </div>
<?php endif; ?>

<form method="post" action="<?= isset($mahasiswa) ? '/mahasiswa/update' : '/mahasiswa/create'; ?>">
    <?= csrf_field() ?>
    <?php if (isset($mahasiswa)) { ?>
        <input type="hidden" name="_method" value="PUT">
    <?php } ?>
    <label>NIM:</label>
    <input type="text" name="nim" value="<?= isset($mahasiswa) ? $mahasiswa->getNim() : ''; ?>" <?= isset($mahasiswa) ? 'readonly' : ''; ?> required><br>

    <label>Nama:</label>
    <input type="text" name="nama" value="<?= isset($mahasiswa) ? $mahasiswa->getNama() : ''; ?>" required><br>

    <label>Jurusan:</label>
    <input type="text" name="jurusan" value="<?= isset($mahasiswa) ? $mahasiswa->getJurusan() : ''; ?>" required><br>

    <button type="submit"><?= isset($mahasiswa) ? 'Update' : 'Simpan'; ?></button>
</form>

<a href="/mahasiswa">Kembali</a>