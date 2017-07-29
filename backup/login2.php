<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    .error {color: #FF0000;}
    input{
       border:2px solid #FF0000;
    }
  </style>
  <title>Klikwebku</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/npm.js"></script>
</head>
<body background="back.jpg">
<?php 
    include 'Data/connect.php';
    $namaerr = $usererr = $passerr = $emailerr = $nbmerr = "";
?>
<div class="well container" style="margin-top:100px">
	<div class="row">
		<div class="col-sm-4">
		<h2>Login Member</h2>
			<form role="form">
                                <div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control" id="username" placeholder="Username">
				</div>
				<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" placeholder="Password">
				</div>
				<div class="checkbox">
				<label><input type="checkbox">Ingat saya</label>
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
				<!--<button type="submit" class="btn btn-warning">Register</button>-->
			</form>
		</div>
		<div class="col-sm-4">
			<h2>Register Member</h2>
                        
                        <form method="POST" action="index.php">
                            
                            <?php
                                if(isset($_POST['daftar']))
                                {
                                    $valid = true;
                                    $sql = "SELECT * from data_guru where username like '".$_POST["username"]."'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0)
                                    {    
                                        $usererr = "username " . $_POST["username"] . " tidak tersedia";
                                        $valid = false;
                                    }
                                    $sql = "SELECT * from data_guru where email like '".$_POST["email"]."'";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0)
                                    {
                                        $emailerr = "email" . $_POST["email"] . " sudah terdaftar";
                                        $valid = false;
                                    }
//                                    $sql = "SELECT * from data_guru where nbm like '".$_POST["nbm"]."'";
//                                    $result = $conn->query($sql);
//                                    if ($result->num_rows > 0)
//                                    {
//                                        $nbmerr = "nbm " . $_POST["nbm"] . "sudah ada";
//                                        $valid = false;
//                                    }
                                    if($valid===true)
                                    {
                                        $sql = "SELECT * from data_guru";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0)
                                        {
                                            $result = mysqli_query($conn, "SELECT MAX(no) FROM data_guru");
                                            $baris = mysqli_fetch_array($result);
                                            $max = $baris[0]+1;
                                            $sql_insert = "insert into data_guru values ($max,'".$_POST["guru"]."','".$_POST["username"]."','".$_POST["password"]."','".$_POST["nohp"]."','".$_POST["email"]."','".$_POST["mapel"]."','".$_POST["nbm"]."')";
                                            if($conn->query($sql_insert)===true){
                                                echo "<script>window.alert(\"data berhasil masuk\");</script>";
                                            }
                                            else
                                                echo "<script>window.alert(\"Error: " . $sql_insert . "<br>" . $conn->error."\")";    
//                                        echo "<script>window.alert(\"berhasil\");</script>";
                                        }
                                        else
                                        {
                                            $sql_insert = "insert into data_guru values (1,'".$_POST["guru"]."','".$_POST["username"]."','".$_POST["password"]."','".$_POST["nohp"]."','".$_POST["email"]."','".$_POST["mapel"]."','".$_POST["nbm"]."')";
                                            if($conn->query($sql_insert)===true){
                                                echo "<script>window.alert(\"data berhasil masuk\");</script>";
                                            }
                                            else
                                                echo "<script>window.alert(\"Error: " . $sql_insert . "<br>" . $conn->error."\")";    
                                        }
                                    }
                                }
                            ?>
                                <div class="form-group">
                                <p><span class="error">*</span>
				<label for="nama">Nama Anda</label>
                                <input type="text" class="form-control" id="username" placeholder="Nama Anda" name="guru" autocomplete="off" list="dataguru" required/>
                                <span class="error"><?php echo $namaerr;?></span>
                                </div>
				<div class="form-group">
                                <span class="error">*</span>
				<label for="username">Username</label>
                                <input type="text" class="form-control" id="username" maxlength="32" placeholder="Maksimal 6 Karakter" name="username" required/>
				<span class="error"><?php echo $usererr;?></span>
                                </div>
				<div class="form-group">
                                <span class="error">*</span>
				<label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" maxlength="32" placeholder="Maksimal 6 Karakter" name="password" required/>
                                <span class="error"><?php echo $passerr;?></span>
                                </div>
				<div class="form-group">
				<label for="nohp">No. Handphone</label>
                                <input type="nohp" class="form-control" id="nohp" maxlength="50" name="nohp" placeholder="08XXXXXXXXXX"/>
				</div>
				<div class="form-group">
				<label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="contoh:cucen@gmail.com"/>
                                <span class="error"><?php echo $emailerr;?></span>
				</div>
                                <div class="form-group">
				<label for="mapel">Mata Pelajaran</label>
                                <input type="mapel" class="form-control" id="mapel" name="mapel" placeholder="contoh:Matematika"/>
				</div>
                                <div class="form-group">
				<label for="nbm">NBM</label>
                                <input type="nbm" class="form-control" id="nbm" name="nbm" placeholder="contoh:1234899" />
                                <span class="error"><?php echo $nbmerr;?></span>
				</div>
				<button type="submit" name="daftar" class="btn btn-warning">Register</button>
                                
                                
			</form>
		</div>
		<div class="col-sm-4">
		<h2 align="center">Selamat Datang Di Web Absensi Online
		<br/>
			<img src="logo.png">
		</div>
	</div>	
</div>
</body>
</html>
