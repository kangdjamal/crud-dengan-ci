<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Menampilkan Data CRUD</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
  </head>
  <body>
    <h1>Data Karyawan</h1>
    <?php echo anchor('crud/tambah','Tambah Data') ?>
    <table class="table table-bordered table-striped table-hover">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Pekerjaan</th>
        <th>Action</th>
      </tr>
      <?php
      $no=1;
      foreach ($user as $u) {
        // code...
      ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $u->nama ?></td>
        <td><?php echo $u->alamat ?></td>
        <td><?php echo $u->pekerjaan ?></td>
        <td>
          <?php echo anchor('crud/edit/'.$u->id,'Edit') ?>
          <?php echo anchor('crud/hapus/'.$u->id,'Hapus') ?>

        </td>
      </tr>
    <?php } ?>
    </table>

  </body>
</html>
