<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <h1 class="heading" style="margin-top: 50px;">Data Mahasiswa</h1>
    <hr>
    <div class="col-md-12" style="margin-top: 30px; ">

      <a href='<?php echo base_url("mahasiswa/tambah"); ?>'>Tambah Data</a><br><br>
      <table class="table table-striped">
        <thead>
          <tr class="info text-center">
            <th>Nim</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>ID Line</th>
            <th>Alamat</th>
            <th colspan="2">Option</th>
          </tr>
        </thead>
        <?php
        if( ! empty($mahasiswa)){

          foreach($mahasiswa as $data){
            echo "<tr>
            <td>".$data->nim."</td>
            <td>".$data->nama."</td>
            <td>".$data->jenis_kelamin."</td>
            <td>".$data->id_line."</td>
            <td>".$data->alamat."</td>
            <th class='text-center'>
             <a href='".base_url("mahasiswa/ubah/".$data->nim)."'> 
               <button type='submit' class='btn btn-info'>Ubah</button>
             </a>
            </th>
            <th class='text-center'><a href='".base_url("mahasiswa/hapus/".$data->nim)."'>
               <button type='submit' class='btn btn-danger'>Hapus</button></a>
            </th>
            </tr>";
          }
        }else{ 
          echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
        }
        ?>
      </table>
    <div>

  <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</div>
</html>