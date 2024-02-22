<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>

     <H2>Halaman Edit Buku</H2>
     
     <form action="<?php echo base_url('Buku/Update_Buku')?>" method="post">

          <table>
               <tr>
                    <td>Buku ID</td>
                    <td>:</td>
                    <td><input type="number" name="buku_id" readonly value="<?= $buku->buku_id; ?>"></td>
               </tr>
               <tr>
                    <td>Judul</td>
                    <td>:</td>
                    <td><input type="text" name="judul" value="<?= $buku->judul; ?>"></td>
               </tr>
               <tr>
                    <td>Penulis</td>
                    <td>:</td>
                    <td><input type="text" name="penulis" value="<?= $buku->penulis; ?>"></td>
               </tr>
               <tr>
                    <td>Penerbit</td>
                    <td>:</td>
                    <td><input type="text" name="penerbit" value="<?= $buku->penerbit; ?>"></td>
               </tr>
               <tr>
                    <td>Tahun Terbit</td>
                    <td>:</td>
                    <td><input type="number" name="tahun_terbit" value="<?= $buku->tahun_terbit; ?>"></td>
               </tr>
               <tr>
                    <td colspan="3"><button type="submit">Simpan</button></td>
               </tr>
          </table>
     </form>

</body>

</html>