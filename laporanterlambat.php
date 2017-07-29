<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" >Absensi Online</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="data siswa.php">Data Siswa</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Siswa Terlambat
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
		 <li><a href="siswaterlambat.php">siswa terlambat</a></li>
          <li><a href="Laporanterlambat.php">Laporan</a></li>
         </ul>
      </li>
      <li><a href="surat.php">Surat Keluar/Izin</a></li>
      <li><a href="DataSiswa.php">Data Siswa</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container"><!-- /penamaan kelas dll-->
<div class="row">
    <div class="col-sm-6"><b>Cari Nama Siswa :</b></div>
     </div>
   <div class="row"><!-- inputan nama siswa -->
  <div class="col-lg-6">
    <div class="input-group">
      <span class="input-group-btn">
       <button type="button" class="btn btn-default btn-info">
  <span class="glyphicon glyphicon-search" ></span>
</button>
      </span>
	   <input type="text" class="form-control" placeholder="Nama Siswa">
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  	<button type="button" class="btn btn-success">Simpan</button>
	<button type="button" class="btn btn-warning">Ubah</button>
	<button type="button" class="btn btn-primary">Hapus</button>
		<br/>
	<br/>
		<br/>
	<div class="container"><!-- /tabel rekapan-->
<div class="row">
 <div class="col-lg-12">
  <div style="text-align: center;">
<span style="color: black; font-family: Verdana,Arial,Helvetica,Georgia; font-size: 35px;">Rekapan Data Siswa</span>
</div>
<br/>
  <div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>NO</th>
        <th>Nama Siswa</th>
        <th>Kelas</th>
        <th>Hafalan Surat</th>
        <th>Tanggal</th>
      </tr>
    </thead>
    <tbody>
      </tbody>
  </table>
  </div>
</div>
  
  </body>
</html>