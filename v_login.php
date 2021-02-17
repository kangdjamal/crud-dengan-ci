<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
  </head>
  <body>
    <h1>LOGIN dengan CI3</h1>
    <div class="container">
      <form class="form-inline" action="<?php echo base_url('login/aksi_login') ?>" method="post">
        <table>
          <tr>
            <td>Username</td>
            <td><input class="form-control" type="text" name="username"></td>

          </tr>

          <tr>
            <td>Password</td>
            <td><input class="form-control" type="password" name="password"></td>
          </tr>

          <tr>
            <td></td>
            <td><input type="submit" value="Login"></td>
          </tr>
        </table>

      </form>
    </div>

  </body>
</html>
