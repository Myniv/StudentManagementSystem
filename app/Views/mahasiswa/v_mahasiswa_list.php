<h2>Daftar Mahasiswa</h2>
<a href="/mahasiswa/create">Tambah Mahasiswa</a>
<table border="1">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Action</th>
    </tr>
    <?php foreach ($mahasiswa as $mahasiswa): ?>
        <tr>
            <td><?= $mahasiswa->getNim(); ?></td>
            <td><?= $mahasiswa->getNama(); ?></td>
            <td><?= $mahasiswa->getJurusan(); ?></td>
            <td>
                <a href="/mahasiswa/detail/<?= $mahasiswa->getNim(); ?>">Detail</a> |
                <a href="/mahasiswa/update/<?= $mahasiswa->getNim(); ?>">Edit</a> |
                <a href="/mahasiswa/delete/<?= $mahasiswa->getNim(); ?>">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>