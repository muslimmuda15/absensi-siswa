<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="well well-lg" align ="center"><h4><b>Surat Izin Keluar
	</b></h4>
        </div>
	<div class="col-md-4 col-md-offset-4 well well-lg">
            
  <h4>Menerangkan Bahwa siswa di bawah ini :</h4>
  <form role="form">
    <div class="form-group">
      <label for="email">Nama:</label>
      <input type="text" class="form-control" id="nama" placeholder="Enter Nama">
    </div>
    <div class="form-group">
      <label for="kls">Kelas:</label>
      <input type="text" class="form-control" id="kls" placeholder="Enter Kelas">
    </div>
	<div class="form-group">
      <label for="kls">Tanggal:</label>
      <input type="text" class="form-control" id="tgl" placeholder="Enter Tanggal">
    </div>
	<div class="form-group">
				<label for="siswa">Keperluan :</label>
				<textarea rows="4" class="form-control" placeholder="Apa Keperluan Anda!!..."></textarea>
				</div>
    <button type="submit" class="btn btn-primary">Print
				<span class="glyphicon glyphicon-print"></span>
				</button>
  </form>
</div>
</div>

</body>
</html>
