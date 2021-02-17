<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN BERHASIL</title>
  </head>
  <body>
    <h1>LOGIN BERHASIL</h1>
    <h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
    <a href="<?php echo base_url('login/logout') ?>">Logout</a>
    
  </body>
</html>
