<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CRUD dengan CI3</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
  </head>
  <body>
    <h1>CRUD dengan CI3</h1>
    <h3>Tambah Data Baru</h3>

    <form class="" action="<?php echo base_url().'crud/tambah_aksi'; ?>"
    method="post">
      <table>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama"</td>
        </tr>

        <tr>
          <td>Alamat</td>
          <td><input type="text" name="alamat"</td>
        </tr>

        <tr>
          <td>Pekerjaan</td>
          <td><input type="text" name="pekerjaan"</td>
        </tr>

        <tr>
          <td>Nama</td>
          <td><input type="submit" value="Tambah"</td>
        </tr>



      </table>
    </form>
  </body>
</html>
