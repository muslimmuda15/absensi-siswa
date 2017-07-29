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

    <?php
        include '../Data/date_indonesia.php'
    ?>
    
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" >Absensi Online</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Absensi Siswa</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pelanggaran siswa
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
		   <li><a href="terlambat.php">siswa terlambat</a></li>
          <li><a href="siswa.php">Buku Laporan</a></li>
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
<div class="well container-fluid" style="margin-top:-20px">
<div class="row">
<div class="col-sm-3">
      	  <form role="form">
				<div class="form-group">
				<label for="siswa">Nama Siswa</label>
				    <div class="input-group"><!-- /cari siswa -->
					<span class="input-group-btn">
					<button type="button" class="btn btn-default btn-info">
					<span class="glyphicon glyphicon-search"></span>
					</button>
						</span>
					<input type="text" class="form-control" placeholder="Nama Siswa">
				</div><!-- /cari siswa -->
				</div>
				<div class="form-group">
				<label for="kelas">Kelas:</label>
					<select class="form-control" id="sel1">
						<option>X TKJ 1</option>
						<option>X TKJ 2</option>
						<option>X MM 1</option>
						<option>X MM 2</option>
						<option>XI TKJ 1</option>
						<option>XI TKJ 2</option>
						<option>XI MM 1</option>
						<option>XI MM 2</option>
						<option>XII TKJ 1</option>
						<option>XII TKJ 2</option>
						<option>XII MM 1</option>
						<option>XII MM 2</option>
						<option>XII ANM</option>
					</select>				
			</div>
			<div class="form-group">
				<b>Tanggal :</b>
				<script src="lib/jquery.min.js"></script>
     <script src="lib/zebra_datepicker.js"></script>
<link rel="stylesheet" href="lib/css/default.css" />

<script>
    $(document).ready(function(){
        $('#tanggal').Zebra_DatePicker({
            format: 'd-F-Y',
            months : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu']
        });
    });
</script>

 <input type="text" name="tanggal" id="tanggal" value="<?php echo indonesian_date();?>"/>
				
				</div>
				<div class="form-group">
				<label for="siswa">Keperluan :</label>
				<textarea rows="4" cols="35" placeholder="Apa Keperluan Anda!!..."></textarea>
				</div>
				<div class="form-group">
				<label for="piket">Guru Piket :</label>
				<input type="text" class="form-control"  placeholder="Guru Piket">
				</div>
				<button type="submit" class="btn btn-primary">Simpan
				<span class="glyphicon glyphicon-floppy-save"></span>
				</button>
				<button type="submit" class="btn btn-warning">Batal
				<span class="glyphicon glyphicon-ban-circle"></span>
				</button>
			</form>
     	  </div>
		  	<div class="container">
  <div class="row">
  <div class="col-sm-9">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div style="text-align: center;">
<span style="color: black; font-family: Verdana,Arial,Helvetica,Georgia; font-size: 35px;">Rekapan Data Siswa</span>
</div>
<a href="#" class="btn btn-success btn-sm">
      <span class="glyphicon glyphicon-print"></span> Print
    </a>
        </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th class="col-md-1">#</th><th class="col-md-2">Nama</th><th class="col-md-2">Kelas</th><th class="col-md-2">Tanggal</th>
			  <th class="col-md-2">Keperluan</th><th class="col-md-2">Guru Piket</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="col-xs-1">1</td><td class="col-xs-9">Mike Adams</td><td class="col-xs-1">23</td>
            </tr>
            <tr>
              <td class="col-xs-2">2</td><td class="col-xs-8">Holly Galivan</td><td class="col-xs-2">44</td>
            </tr>
            <tr>
              <td class="col-xs-2">3</td><td class="col-xs-8">Mary Shea</td><td class="col-xs-2">86</td>
            </tr>
            <tr>
              <td class="col-xs-2">4</td><td class="col-xs-8">Jim Adams</td><td>23</td>
            </tr>
            <tr>
              <td class="col-xs-2">5</td><td class="col-xs-8">Henry Galivan</td><td class="col-xs-2">44</td>
            </tr>
            <tr>
              <td class="col-xs-2">6</td><td class="col-xs-8">Bob Shea</td><td class="col-xs-2">26</td>
            </tr>
            <tr>
              <td class="col-xs-2">7</td><td class="col-xs-8">Andy Parks</td><td class="col-xs-2">56</td>
            </tr>
            <tr>
              <td class="col-xs-2">8</td><td class="col-xs-8">Bob Skelly</td><td class="col-xs-2">96</td>
            </tr>
            <tr>
              <td class="col-xs-2">9</td><td class="col-xs-8">William Defoe</td><td class="col-xs-2">13</td>
            </tr>
            <tr>
              <td class="col-xs-2">10</td><td class="col-xs-8">Will Tripp</td><td class="col-xs-2">16</td>
            </tr>
            <tr>
              <td class="col-xs-2">11</td><td class="col-xs-8">Bill Champion</td><td class="col-xs-2">44</td>
            </tr>
            <tr>
              <td class="col-xs-2">12</td><td class="col-xs-8">Lastly Jane</td><td class="col-xs-2">6</td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>
</div>
<style type="text/css">
    .table-fixed thead {
  width: 97%;
}
.table-fixed tbody {
  height: 380px;
  overflow-y: auto;
  width: 100%;
}
.table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
  display: block;
}
.table-fixed tbody td, .table-fixed thead > tr> th {
  float: left;
  border-bottom-width: 10%;
}
  </style>
  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable( {
        "scrollY": 200,
        "scrollX": true
    } );
} );
</script>   
<div class="navbar navbar-inverse navbar-fixed-bottom">
   <div class="container">
      <p class="navbar-text pull-left">&#169; Copyright by Teknik Informatika 2016, Powered by Institute Teknologi Adhi Tama Surabaya</p></br>
	  <button type="button" class="btn btn-info btn-md pull-right" data-toggle="modal" data-target="#myModal">LIKE
	  <span class="glyphicon glyphicon-thumbs-up"></span>
	  </button>
   </div>
</div>

		  
    </div>
	 </div>


</body>
</html>