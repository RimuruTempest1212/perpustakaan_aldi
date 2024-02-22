<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>
     <H2>Halaman Tambah Buku</H2>
     <form action="<?php echo base_url('insert_buku_proses') ?>" method="post">
          <table>
               <tr>
                    <td>Buku ID</td>
                    <td>:</td>
                    <td><input type="number" name="buku_id" required></td>
               </tr>
               <tr>
                    <td>Judul</td>
                    <td>:</td>
                    <td><input type="text" name="judul"></td>
               </tr>
               <tr>
                    <td>Penulis</td>
                    <td>:</td>
                    <td><input type="text" name="penulis"></td>
               </tr>
               <tr>
                    <td>Penerbit</td>
                    <td>:</td>
                    <td><input type="text" name="penerbit"></td>
               </tr>
               <tr>
                    <td>Tahun Terbit</td>
                    <td>:</td>
                    <td><input type="number" name="tahun_terbit"></td>
               </tr>
               <tr>
                    <td colspan="3"><button type="submit">Simpan</button></td>
               </tr>
          </table>
     </form>

</body>

</html>