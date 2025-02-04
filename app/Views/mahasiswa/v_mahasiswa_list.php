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
                <button onclick="location.href='/mahasiswa/detail/<?= $mahasiswa->getNim(); ?>'">Detail</button>
                <button onclick="location.href='/mahasiswa/update/<?= $mahasiswa->getNim(); ?>'">Edit</button>
                <form action="/mahasiswa/delete/<?= $mahasiswa->getNim(); ?>" method="post" style="display:inline;">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus mahasiswa ini?');">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>