<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Buku</title>
</head>

<body>
    <h2>Daftar Buku</h2>

    <a href="TambahBuku"><button>Tambah Buku</button></a>
    <br>
    <br>

    <table border="1">
        <thead>
            <tr>
                <th>Buku_Id</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun_terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($buku as $item) : ?>
                <tr>
                    <td><?php echo $item->buku_id ?></td>
                    <td><?php echo $item->judul ?></td>
                    <td><?php echo $item->penulis ?></td>
                    <td><?php echo $item->penerbit ?></td>
                    <td><?php echo $item->tahun_terbit ?></td>
                    <td>
                        <a href="<?php echo base_url('Buku/halaman_edit/' . $item->buku_id) ?>">Edit</a> ||
                        <a href="<?= base_url('Buku/delete_buku/' . $item->buku_id) ?>">Hapus</a>
                    </td>

                </tr>


            <?php endforeach; ?>

        </tbody>

    </table>

</html>