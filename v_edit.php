<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EDIT Data</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
  </head>
  <body>
    <h1>CRUD dengan CodeIgniter</h1>
    <h3>Edit Data</h3>

    <?php foreach ($user as $u) { ?>
    <div class="container">
      <form class="form-horizontal" action="<?php echo base_url().'crud/update'; ?>"
        method="post">
        <table>
          <tr>
            <td>Nama</td>
            <td>
              <input type="hidden" name="id" value="<?php echo $u->id ?>">
              <input type="text" name="nama" value="<?php echo $u->nama ?>">
            </td>
          </tr>

          <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
          </tr>

          <tr>
            <td>Pekerjaan</td>
            <td><input type="text" name="pekerjaan" value="<?php echo $u->pekerjaan ?>"></td>
          </tr>

          <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
          </tr>

        </table>
      </form>
    </div>

  <?php } ?>
  </body>
</html>
