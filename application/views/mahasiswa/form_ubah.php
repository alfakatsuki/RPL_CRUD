<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Ubah</title>

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <style type="text/css">
        body{
            font-family: 'Lato', sans-serif;
            margin: 0;
            font-size: 18px;
        }
    </style>
</head>

  <body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url() ?>">CRUD-RPL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="https://github.com/alfakatsuki">Github <span class="sr-only">(current)</span></a>
      </li>
        <a class="nav-link" href="https://maulvi-cs.blogspot.com">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
    </ul>
    
  </div>
</nav>
    
    <div class='container'>

    <h1 class="heading" style="margin-top: 50px;">Form Ubah Data Mahasiswa</h1>
    <hr>
    <div><?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>','</div>'); ?></div>
    <?php echo form_open("mahasiswa/ubah/".$mahasiswa->nim); ?>
      <table cellpadding="8">
        <tr>
          <td>NIM</td>
          <td><input type="text" class="form-control" name="input_nim" value="<?php echo set_value('input_nim', $mahasiswa->nim); ?>" readonly></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" class="form-control" name="input_nama" value="<?php echo set_value('input_nama', $mahasiswa->nama); ?>"></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>
          <input type="radio" name="input_jeniskelamin" value="Laki-laki" <?php echo set_radio('jeniskelamin', 'Laki-laki', ($mahasiswa->jenis_kelamin == "Laki-laki")? true : false); ?>> Laki-laki
          <input type="radio" name="input_jeniskelamin" value="Perempuan" <?php echo set_radio('jeniskelamin', 'Perempuan', ($mahasiswa->jenis_kelamin == "Perempuan")? true : false); ?>> Perempuan
          </td>
        </tr>
        <tr>
          <td>ID Line</td>
          <td><input type="text" class="form-control" name="input_id_line" value="<?php echo set_value('input_id_line', $mahasiswa->id_line); ?>"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><textarea name="input_alamat" class="form-control"><?php echo set_value('input_alamat', $mahasiswa->alamat); ?></textarea></td>
        </tr>
      </table>
        
      <hr>
      <button  type="submit" name="submit" value="ubah" class="btn btn-primary">Ubah</button>
      <a href="<?php echo base_url(); ?>">
        <button type='button' class='btn btn-info'>Kembali</button>
      </a>
    <?php echo form_close(); ?>
  </div>



  <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>