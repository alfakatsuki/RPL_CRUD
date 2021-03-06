<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <title>Form Tambah</title>
    <style type="text/css">
        body{
            font-family: 'Lato', sans-serif;
            margin: 0;
            font-size: 18px;
        }
    </style>
</head>
  <body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo base_url() ?>">CRUD-RPL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="https://github.com/alfakatsuki">Github <span class="sr-only">(current)</span></a>
      </li>
        <a class="nav-link" href="https://maulvi-cs.blogspot.com">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="<?php echo base_url('login/logout'); ?>"><button class="btn btn-outline-info my-2 my-sm-0" type="button">Logout</button></a>
    </form>
  </div>
</nav>




    <div class='container'>

    <h1 class="heading" style="margin-top: 50px;">Form Tambah Data Mahasiswa</h1>
    <hr>
    <div><?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>','</div>'); ?></div>
    
    <?php echo form_open("mahasiswa/tambah"); ?>
      <table cellpadding="8">
        <tr>
          <td>NIM</td>
          <td><input type="text" name="input_nim"  class="form-control" value="<?php echo set_value('input_nim'); ?>"></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="input_nama"  class="form-control" value="<?php echo set_value('input_nama'); ?>"></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td >
          <input type="radio" name="input_jeniskelamin" value="Laki-laki" <?php echo set_radio('jeniskelamin', 'Laki-laki'); ?>> Laki-laki
          <input type="radio" name="input_jeniskelamin" value="Perempuan" <?php echo set_radio('jeniskelamin', 'Perempuan'); ?>> Perempuan
          </td>
        </tr>
        <tr>
          <td>ID Line</td>
          <td><input type="text" name="input_id_line"  class="form-control" value="<?php echo set_value('input_id_line'); ?>"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><textarea name="input_alamat"  class="form-control"><?php echo set_value('input_alamat'); ?></textarea></td>
        </tr>
      </table>
        
      <hr>
        
        <div class="btn-toolbar well" >
          <div class="col-md-2">
            <button  type="submit" name="submit" value="ubah" class="btn btn-primary btn-block">Simpan</button>
          </div>
          <div class="col-md-2">
              <a href="<?php echo base_url(); ?>"><button type='button' class='btn btn-info btn-block'>Kembali</button></a>
            </div>
        </div>




    <?php echo form_close(); ?>
  </body>
</html>