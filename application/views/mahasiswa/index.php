<html>
  <head>
    <title>CRUD</title>
  </head>
  <body>
    <h1>Data Mahasiswa</h1>
    <hr>
    <a href='<?php echo base_url("mahasiswa/tambah"); ?>'>Tambah Data</a><br><br>
    <table border="1" cellpadding="7">
      <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>ID Line</th>
        <th>Alamat</th>
        <th colspan="2">Option</th>
      </tr>
      <?php
      if( ! empty($mahasiswa)){

        foreach($mahasiswa as $data){
          echo "<tr>
          <td>".$data->nim."</td>
          <td>".$data->nama."</td>
          <td>".$data->jenis_kelamin."</td>
          <td>".$data->id_line."</td>
          <td>".$data->alamat."</td>
          <td><a href='".base_url("mahasiswa/ubah/".$data->nim)."'>Ubah</a></td>
          <td><a href='".base_url("mahasiswa/hapus/".$data->nim)."'>Hapus</a></td>
          </tr>";
        }
      }else{ 
        echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
      }
      ?>
    </table>
  </body>
</html>