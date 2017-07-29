<!DOCTYPE html>

<?php
    $login = false;
    include 'Data/connect.php';
?>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="lib/jquery.min.js"></script>
<!--<script src="js/kelasquery.js"></script>-->
<link rel="stylesheet" href="lib/css/default.css" />
<!--<script src="assets/js/jquery-1.11.1.min.js"></script>-->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/scripts.js"></script>


<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  
  <!-- Optional theme -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.min.css">
  
  <!-- Latest compiled and minified JavaScript -->
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  
  <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="assets/media/css/dataTables.bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/media/css/dataTables.responsive.css">
  <script type="text/javascript" language="javascript" src="assets/media/js/jquery.dataTables.js"></script>
  <script type="text/javascript" language="javascript" src="assets/media/js/dataTables.responsive.js"></script>
  <script type="text/javascript" language="javascript" src="assets/media/js/dataTables.bootstrap.js"></script>
  <script type="text/javascript" language="javascript" src="assets/media/js/common.js"></script>

<html lang="en">
<head>
  <title>Daftar Absensi Siswa</title>
  
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
          <li><a href="buku.php">Buku Laporan</a></li>
		  </ul>
      </li>
      <li><a href="surat.php">Surat Keluar/Izin</a></li>
      <li><a href="DataSiswa.php">Data Siswa</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div class="top-big-link" style="
    height:20px; 
    width:100px; 
    margin: -20px -50px; 
    position:relative;
    top:50%; 
    left:50%;
" id="removeLogin">
    <button class="btn btn-link-1 launch-modal btn-md" class="btn btn-info btn-md pull-right" href="#" data-modal-id="modal-login">Login
                                    <span class="glyphicon glyphicon-log-in"></span>
                                    </button>   
</div>

<div class="well container" id="showlogin">
      <br>
      <form class="form-horizontal" id="changePassword">
       <div class="form-group">
        <label for="nama" class="col-sm-2 control-label">Namauser</label>
        <div class="col-sm-10">
         <input type="text" class="form-control" id="user" name="user" >
        </div>
       </div>
       <div class="form-group">
        <label for="pass" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="pass" name="pass" >
        </div>
       </div>
       <div class="form-group">
        <label for="conf" class="col-sm-2 control-label">Confirm Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="conf_pass" name="pass" >
        </div>
       </div>
          <button type="submit" class="btn btn-info btn-md" data-toggle="modal" name="change" id="change" onclick="change()">Change
	  <span class="glyphicon glyphicon-thumbs-up"></span>
	  </button>
      </form>
      
     </div>

<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
        <form method="POST">
            <?php
            if(isset($_POST['create']))
            {
//                $userenc=mysql_real_escape_string($_POST['user']);
//                $passenc=mysql_real_escape_string($_POST['pass']);
//                $salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
//
//                $saltedPW =  $passenc . $salt;
//
//                $hashedPW = hash('sha256', $saltedPW);
//                
//                $sql_insert = "insert into login values ('$userenc','$hashedPW', '$salt')";
//                if($conn->query($sql_insert)===true){
//                echo "<script>window.alert('nama user = $userenc \\n"
//                        . "password  = $passenc \\n"
//                        . "password encrypt = $hashedPW \\n"
//                        . "hash = $salt\\n data inserted');</script>";
//                }
//                else
//                    echo "<script>window.alert(\"Error: " . $sql_insert . "<br>" . $conn->error."\");</script>";
                $userenc=$_POST['user'];
                $passenc=$_POST['pass'];
                
                $saltQuery = "select salt from login where username = '$userenc';";
                $result = $conn->query($saltQuery);
                if($result->num_rows > 0)
                {
                    $salt = "";
                    if($row = $result->fetch_assoc())
                       $salt = $row['salt'];

                    $saltedPW =  $passenc . $salt;

                    $hashedPW = hash('sha256', $saltedPW);

                    $query = "select * from login where username = '$userenc' and password = '$hashedPW'; ";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0) 
                    {
                        $login=true;
//                        echo "<script>window.alert('nama user = $userenc \\n"
//                            . "password  = $hashedPW\\nsalt = $salt\\ndata found');</script>";
                    }
                    else
                    {
                        $login=false;
//                        echo "<script>window.alert('nama user = $userenc\\npassword  = $hashedPW\\nsalt = $salt\\n"
//                        . "data tidak ada');</script>";
                        echo "<script>window.alert('login gagal, coba lagi!');</script>";
                    }
                }
            }
          ?>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title" id="modal-login-label">Silahkan Login</h3>
                <p>Masukan Akun superuser Anda:</p>
            </div>
             <div class="modal-body">
              <br>
              <div class="form-horizontal" id="formUser">
               <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Namauser</label>
                <div class="col-sm-10">
                 <input type="text" class="form-control" id="user" name="user" >
                </div>
               </div>
               <div class="form-group">
                <label for="kelas" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="pass" name="pass" >
                </div>
               </div>
              </div>
             </div>
             
             <div class="modal-footer">
                 <button type="submit" name="create" class="btn btn-default">Log in</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             </div>
            </form>
    </div>
   </div>
  </div>

<div class="navbar navbar-inverse navbar-fixed-bottom">
   <div class="container">
      <p class="navbar-text pull-left">&#169; Copyright by Teknik Informatika 2016, Powered by Institute Teknologi Adhi Tama Surabaya</p></br>
	  <button type="button" class="btn btn-info btn-md pull-right" data-toggle="modal" data-target="#myModal">LIKE
	  <span class="glyphicon glyphicon-thumbs-up"></span>
	  </button>
          <br><br><a href="admin.php">administrator</a>
   </div>
</div>

<div class="modal fade" id="failed" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title" id="modal-login-label">Password doesn't match</h3>
                <p>Password tidak sama</p>
            </div>
             
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             </div>
    </div>
</div>
    </div>


<?php
echo "<script>";
if($login == false)
    echo "$('#showlogin').hide();";
else
    echo "$('#showlogin').show);";
echo "</script>";
?>