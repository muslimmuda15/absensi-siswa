<!DOCTYPE html>
<?php
//    if($_POST["username"]==="admin" && $_POST["password"]==="admin");
//    else
//    {
//        
if($_COOKIE["username"]=="admin" && $_COOKIE['password']=="admin");
else
    header("Location: login.php"); 
?>
        
<!--        <script type="text/javascript">
        window.location = "login.php";
        </script>-->
        <?php
//    }
//        echo $_GET["username_log"];
?>
<html lang="en">
<head>
  <title>Daftar Absensi Siswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
</head>
<body>
    
<?php
$nama = $kelas = $tanggal = $ket = $guru = "";
include 'date_indonesia.php';
include 'Data/connect.php';
?>
    
<script>
    $(document).ready(function(){
        $('#tanggal1').Zebra_DatePicker({
            format: 'd-F-Y',
            months : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu']
        });
    });
</script>

<script>
    function carikelas()
    {
//        var e = document.getElementById("sel1");
//        var strUser = e.options[e.selectedIndex].value;
//        window.alert(<?php // echo "$kelas"; ?>);
    }
    
</script>

<script src="lib/jquery.min.js"></script>
<script src="lib/zebra_datepicker.js"></script>
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
  <script type="text/javascript" language="javascript" >

var dTable;
   // #Example adalah id pada table
   $(document).ready(function() {
    dTable = $('#example').DataTable( {
//     "scrollY": 300,
//     "scrollX": true,
     "bProcessing": true,
     "bServerSide": true,
     "bJQueryUI":false,
     "responsive": false,
     "sAjaxSource": "AbsenSide.php", // Load Data
     "sServerMethod": "POST",
     "columnDefs": [
     { "orderable": false, "targets": 0, "searchable": false },
     { "orderable": true , "targets": 1, "searchable": true },
     { "orderable": true , "targets": 2, "searchable": true },
     { "orderable": true , "targets": 3, "searchable": true },
     { "orderable": true , "targets": 4, "searchable": true },
     { "orderable": true , "targets": 5, "searchable": true },
     { "orderable": true , "targets": 6, "searchable": true }
     ]
    } );
    
    $('#example').removeClass( 'display' ).addClass('table table-bordered');
    $('#example tfoot th').each( function () {
     
     //Agar kolom Action Tidak Ada Tombol Pencarian
     if( $(this).text() != "Action" ){
      var title = $('#example thead th').eq( $(this).index() ).text();
      $(this).html( '<input type="text" placeholder="Search '+title+'" class="form-control" />' );
     }
    } );
    
    // Untuk Pencarian, di kolom paling bawah
    dTable.columns().every( function () {
     var that = this;
     
     $( 'input', this.footer() ).on( 'keyup change', function () {
      that
      .search( this.value )
      .draw();
     } );
    } );
   } );
   
   
  </script>

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
<div class="well container-fluid" style="margin-top:-20px">
    <div class="row">
    <div class="col-sm-3">
                        <!--<form role="form">-->
                        <form method="POST" action="">
                            <?php $cektanggal="false"; ?>
                            <script>
//                                function getcektanggal(yes)
//                                {
//                                        <?php $cektanggal = "<script>document.write(yes);</script>";?>
//                                        window.alert("cetak yes = "+yes);                                        
//                                }
                                    var yes=false;
                            </script>
                            <?php
//                                echo "cek tanggal = \"$cektanggal\"";
                            ?>
                            <?php
                            if (isset($_POST['klik']))
                            {
                                $getinduk = $getkelas = "";
                                
                                //    echo "Connected successfully";
                                $sql_siswa = "SELECT * from siswa where nama like '".$_POST["nama"]."'";
                                $result = $conn->query($sql_siswa);
                                if ($result->num_rows > 0) 
                                {
                                    $sql_siswa = "SELECT * from data_guru where nama like '".$_POST["guru"]."'";
                                    $result = $conn->query($sql_siswa);
                                    if ($result->num_rows > 0) 
                                    {
                                        $sql_siswa = "SELECT * from siswa where nama like '".$_POST["nama"]."' and kelas like '".$_POST["kelas"]."'";
                                        $result = $conn->query($sql_siswa);
                                        if ($result->num_rows > 0) 
                                        {
//                                            if($_POST["tanggal"]==indonesian_date())
//                                            {
//                                                $cektanggal="true";
//                                                echo "<script>yes=true;</script>";
//                                            }
//                                            else
//                                            {
//                                                echo "<script>"
////                                                     ."window.alert(\"".$_POST["tanggal"]." tidak cocok ".indonesian_date()."\");"
//////                                                echo "<script>var yes;"
////                                                   . "window.alert(\"Sepertinya Anda memasukkan bukan pada tanggal sekarang\");"
//                                                    ."var yes;"
//                                                    ."yes=confirm(\"Sepertinya Tanggal yang Anda masukkan bukan tanggal hari ini\\nApakah Tetap ingin melanjutkan?\");"
////                                                    ."if(yes==true){";
////                                                        $cektanggal=true;
////                                                    echo "{else}";
////                                                        $cektanggal=false; 
////                                                    echo "}"
//                                                       // ."getcektanggal(yes);"
//                                                        . "</script>";
//                                            
//                                            }
//                                            echo "cek tanggal = ".gettype ($cektanggal) ." = $cektanggal";
////                                            if($cektanggal=="true
//                                            if("<script>document.write(yes)</script>")
                                            {
//                                                echo "<script>var r=confirm(\"Yakin data Anda benar ?\");"
//                                                . "if(r===true){";
                                                if($row = $result->fetch_assoc()) 
                                                {
                                                    $getinduk = $row["induk"];
                                                    $GLOBALS['getinduk'];
                                                }
                                                $result = mysqli_query($conn, "SELECT MAX(no) FROM absen");
                                                $baris = mysqli_fetch_array($result);
                                                $max = $baris[0]+1;
                                                $tgl=
                                                $sql_insert = "insert into absen values ($max,'$getinduk','".$_POST["nama"]."','".$_POST["kelas"]."','".toDefault($_POST["tanggal"])."','".$_POST["ket"]."','".$_POST["guru"]."')";
                                                if($conn->query($sql_insert)===true){
                                                    echo "<script>window.alert(\"data insert\");</script>";
                                                }
                                                else
                                                    echo "<script>window.alert(\"Error: " . $sql_insert . "<br>" . $conn->error."\");</script>";  
//                                                echo "}</script>";
                                                $guru = $_POST["guru"];
                                            }
                                        }
                                        else
                                            echo "<script>window.alert(\"nama dan kelas tidak sesuai\");</script>";
                                    }
                                    else
                                        echo "<script>window.alert(\"data guru tidak terdaftar\");</script>";
                                }
                                else
                                    echo "<script>window.alert(\"data siswa tidak ada\");</script>";
                                
                                if($_POST["kelas"]==="--")
                                {    
                                    $kelas="";
                                }
                                else
                                {    
                                    $kelas = $_POST["kelas"];
                                }
                                $guru = $_POST["guru"];
                            }
                            else if (isset($_POST['cari']))
                            {
                                if($_POST["kelas"]==="--")
                                {    
                                    $kelas="";
                                }
                                else
                                {    
                                    $kelas = $_POST["kelas"];
                                }
//                                echo "<script>window.alert(\"$kelas\")</script>";
                            }
                            
                            ?>
                            
                            <div class="form-group">
				<label for="kelas">Kelas:</label>
                                <!--<form method="post">-->
                                    <select project="kelas" class="form-control" name="kelas" id="sel1" onchange="carikelas()" value="--">
                                        <option <?php if(($kelas=="")){ echo "selected=\"selected\"";}else{echo "";}?>>--</option>
                                        <option <?php if(($kelas=="X TKJ 1")){ echo "selected=\"selected\"";}else{echo "";}?>>X TKJ 1</option>
                                        <option <?php if(($kelas=="X TKJ 2")){ echo "selected=\"selected\"";}else{echo "";}?>>X TKJ 2</option>
                                        <option <?php if(($kelas=="X MM 1")){ echo "selected=\"selected\"";}else{echo "";}?>>X MM 1</option>
                                        <option <?php if(($kelas=="X MM 2")){ echo "selected=\"selected\"";}else{echo "";}?>>X MM 2</option>
                                        <option <?php if(($kelas=="XI TKJ 1")){ echo "selected=\"selected\"";}else{echo "";}?>>XI TKJ 1</option>
                                        <option <?php if(($kelas=="XI TKJ 2")){ echo "selected=\"selected\"";}else{echo "";}?>>XI TKJ 2</option>
                                        <option <?php if(($kelas==="XI MM 1")){ echo "selected=\"selected\"";}else{echo "";}?>>XI MM 1</option>
                                        <option <?php if(($kelas=="XI MM 2")){ echo "selected=\"selected\"";}else{echo "";}?>>XI MM 2</option>
                                        <option <?php if(($kelas=="XII TKJ 1")){ echo "selected=\"selected\"";}else{echo "";}?>>XII TKJ 1</option>
                                        <option <?php if(($kelas=="XII TKJ 2")){ echo "selected=\"selected\"";}else{echo "";}?>>XII TKJ 2</option>
                                        <option <?php if(($kelas=="XII MM 1")){ echo "selected=\"selected\"";}else{echo "";}?>>XII MM 1</option>
                                        <option <?php if(($kelas=="XII MM 2")){ echo "selected=\"selected\"";}else{echo "";}?>>XII MM 2</option>
                                        <option <?php if(($kelas=="XII ANM")){ echo "selected=\"selected\"";}else{echo "";}?>>XII ANM</option>
                                    </select>
                                <!--<button type="cari" name="cari" class="glyphicon glyphicon-search btn btn-default btn-info">Search</button>-->
                                </div>
                                
                            
				<div class="form-group">
				<label for="siswa">Nama Siswa</label>
				    <div class="input-group"><!-- /cari siswa -->
					<span class="input-group-btn">
					<button type="button" class="btn btn-default btn-info">
					<span class="glyphicon glyphicon-search"></span>
					</button>
						</span>
                                        
                                        <input type="text" class="form-control" name="nama" placeholder="Nama Siswa" list="ceknama" autocomplete="off">
                                        <datalist id="ceknama">
                                            
                                            <?php
                                                if($kelas=="")
                                                {
                                            //    echo "Connected successfully";
                                                    $sql_siswa = "SELECT nama from siswa order by nama;";
                                                    $result = $conn->query($sql_siswa);
                                                    if ($result->num_rows > 0) 
                                                    {
                                                        while($row = $result->fetch_assoc()) 
                                                        {
                                                            echo "<option value=\"".$row["nama"]."\">";
                                                        }
                                                    }
                                                }
                                                else
                                                {
                                                    $sql_siswa = "SELECT nama from siswa where kelas like '$kelas' order by nama;";
                                                    $result = $conn->query($sql_siswa);
                                                    if ($result->num_rows > 0) 
                                                    {
                                                        while($row = $result->fetch_assoc()) 
                                                        {
                                                            echo "<option value=\"".$row["nama"]."\">";
                                                        }
                                                    }
                                                }
                                            ?>
                                        </datalist>
				</div><!-- /cari siswa -->
				</div>
				
                                <div class="form-group">
				<b>Tanggal :</b>
				
                                <input type="text" name="tanggal" id="tanggal1" value="<?php echo indonesian_date();?>"/>
                                
				</div>
				<div class="form-group">
				<label for="keterangan">Keterangan :</label>
				<select class="form-control" name="ket" id="sel1">
                                    <option>Sakit (s) </option>
                                    <option>Izin (I) </option>
                                    <option>Alpha (A) </option>
                                </select>
				</div>
				<div class="form-group">
				<label for="piket">Guru Piket :</label>
                                <input type="text" class="form-control" value="<?php echo $guru; ?>" name="guru" placeholder="Guru Piket" list="cekguru" autocomplete="off">
                                <datalist id="cekguru">
                                    <?php
                                        
                                    //    echo "Connected successfully";
                                        $sql = "SELECT nama from data_guru order by nama;";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) 
                                        {
                                            while($row = $result->fetch_assoc()) 
                                            {
                                                echo "<option value=\"".$row["nama"]."\">";
                                            }
                                        } 
                                    ?>
                                </datalist>
				</div>
                         
                                <button type="submit" name="klik" class="btn btn-primary" data-modal-id="inserted">Simpan
                                    <span class="glyphicon glyphicon-floppy-save"></span>
				</button>
<!--                                <div class="top-big-link">
                            	<a class="btn btn-link-1 launch-modal" type="submit" name="klik" href="#" data-modal-id="inserted">Submit
								<span class="glyphicon glyphicon-log-in"></span>
								</a>
                                </div>
                            -->
                            
                        </form>
<!--				<button type="submit" class="btn btn-warning">Batal
				<span class="glyphicon glyphicon-ban-circle"></span>
				</button>-->
                                <?php
//                                    $servername = "localhost";
//                                    $username = "root";
//                                    $password = "";
//                                    $dbname = "mysql";
//                                    $max="";
//                                    // Create connection
//                                    $conn = new mysqli($servername, $username, $password, $dbname);
//
//                                    // Check connection
//                                    if ($conn->connect_error) {
//                                        die("Connection failed: " . $conn->connect_error);
//                                    }
//                                    $sql="select max(no) from absen";
//                                    $result = $conn->query($sql);
//
//                                    if ($result->num_rows > 0) 
//                                    {
//                                        while($row = $result->fetch_assoc()) 
//                                        {
//                                            $max=$row["no"];
//                                        }
//                                    }
//                                    $getNama="select induk from data_siswa where nama like '".$_POST."' and "
//                                    $sql="insert into absen values (".++$max.",'".$_POST["nama"]."','".."'";
                                ?>

			<!--</form>-->
     	  </div>
<div class="container">
    
   <div class="row">
    <div class="col-sm-9">
        <div class="panel-heading">
      <div style="text-align: center;">
        <span style="color: black; font-family: Verdana,Arial,Helvetica,Georgia; font-size: 35px;">Rekapan Data Siswa</span>
        </div>
<!--        <a href="javascript:window.print()" class="btn btn-success btn-sm">
          <span class="glyphicon glyphicon-print"></span>
          Print
        </a>-->
    </div>
     <!--<button onClick="showModals()" class="btn btn-primary">Tambah Data</button>-->
     
     <table id="example"  cellpadding="0" cellspacing="0" border="0" class="display" width="100%">
      <thead>
       <tr>
        <th>ActionButton</th>
        <th>Induk</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Tanggal</th>
        <th>Keterangan</th>
        <th>Guru</th>
       </tr>
      </thead>
      <tbody>
      </tbody>
      <tfoot>
        <th>Action</th>
        <th>Induk</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Tanggal</th>
        <th>Keterangan</th>
        <th>Guru</th>
      </tfoot>
     </table>
    </div>
   </div>
  </div>    
        
    <!-- Modal Popup -->
  <div class="modal fade" id="myModals" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Add User</h4>
     </div>
     <div class="modal-body">
      
      <div class="alert alert-danger" role="alert" id="removeWarning">
       <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
       <span class="sr-only">Error:</span>
       Anda yakin ingin menghapus user ini
      </div>
      <br>
      <form class="form-horizontal" id="formUser">
       
       <input type="hidden" class="form-control" id="no" name="no">
       <input type="hidden" class="form-control" id="induk" name="induk">
       <input type="hidden" class="form-control" id="type" name="type">
       
<!--       <div class="form-group">
        <label for="induk" class="col-sm-2 control-label">No Induk</label>
        <div class="col-sm-10">
         <input type="text" class="form-control" id="induk" name="induk" >
        </div>
       </div>-->
       <div class="form-group">
        <label for="nama" class="col-sm-2 control-label">Nama User</label>
        <div class="col-sm-10">
         <input type="text" class="form-control" id="nama" name="nama" >
        </div>
       </div>
       <div class="form-group">
        <label for="kelas" class="col-sm-2 control-label">Kelas</label>
        <div class="col-sm-10">
         <input type="text" class="form-control" id="kelas" name="kelas" >
        </div>
       </div>
       <div class="form-group">
        <label for="tanggal" class="col-sm-2 control-label">Tanggal Absen</label>
        <div class="col-sm-10">
         <textarea type="text" class="form-control" id="tanggal" name="tanggal" ></textarea>
        </div>
       </div>
<!--       <div class="form-group">
        <label for="real_name" class="col-sm-2 control-label">Nama User</label>
        <div class="col-sm-10">
         <input type="text" class="form-control" id="real_name" name="real_name" >
        </div>
       </div>-->
       <div class="form-group">
        <label for="ket" class="col-sm-2 control-label">Keterangan</label>
        <div class="col-sm-10">
         <input type="text" class="form-control" id="keterangan" name="keterangan" >
        </div>
       </div>
       <div class="form-group">
        <label for="guru" class="col-sm-2 control-label">Nama Guru</label>
        <div class="col-sm-10">
         <input type="text" class="form-control" id="guru" name="guru" >
        </div>
       </div>
      </form>
      
     </div>
     <div class="modal-footer">
      <button type="button" onClick="submitUser()" class="btn btn-default" data-dismiss="modal">Submit</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
    </div>
   </div>
  </div>
        
    <script>
  
      //Tampilkan Modal 
   function showModals( no )
   {
    waitingDialog.show();
    clearModals();
    
    // Untuk Eksekusi Data Yang Ingin di Edit atau Di Hapus 
    if( no )
    {
     $.ajax({
      type: "POST",
      url: "crudAbsen.php",
      dataType: 'json',
      data: {no:no,type:"get"},
      success: function(res) {
       waitingDialog.hide();
       setModalData( res );
      }
     });
    }
    // Untuk Tambahkan Data
    else
    {
     $("#myModals").modal("show");
     $("#myModalLabel").html("New User");
     $("#type").val("new"); 
     waitingDialog.hide();
    }
   }
   
   //Data Yang Ingin Di Tampilkan Pada Modal Ketika Di Edit 
   function setModalData( data )
   {
    $("#myModalLabel").html(data.real_name);
    $("#no").val(data.id);
    $("#type").val("edit");
    $("#induk").val(data.induk);
    $("#nama").val(data.nama);
    $("#kelas").val(data.kelas);
    $("#tanggal").val(data.tanggal);
    $("#keterangan").val(data.keterangan);
    $("#guru").val(data.guru);
    $("#myModals").modal("show");
   }
   
   //Submit Untuk Eksekusi Tambah/Edit/Hapus Data 
   function submitUser()
   {
    var formData = $("#formUser").serialize();
    waitingDialog.show();
    $.ajax({
     type: "POST",
     url: "crudAbsen.php",
     dataType: 'json',
     data: formData,
     success: function(data) {
      dTable.ajax.reload(); // Untuk Reload Tables secara otomatis
      waitingDialog.hide(); 
     }
    });
   }
   
   //Hapus Data
   function deleteUser( no )
   {
    clearModals();
    $.ajax({
     type: "POST",
     url: "crudAbsen.php",
     dataType: 'json',
     data: {no:no,type:"get"},
     success: function(data) {
      $("#removeWarning").show();
      $("#myModalLabel").html("Delete User");
      $("#no").val(data.no);
      $("#induk").val(data.induk);
      $("#type").val("delete");
      $("#nama").val(data.nama).attr("disabled","true");
      $("#kelas").val(data.kelas).attr("disabled","true");
      $("#tanggal").val(data.tanggal).attr("disabled","true");
      $("#keterangan").val(data.keterangan).attr("disabled","true");
      $("#guru").val(data.guru).attr("disabled","true");
      $("#myModals").modal("show");
      waitingDialog.hide();   
     }
    });
   }
   
   //Clear Modal atau menutup modal supaya tidak terjadi duplikat modal
   function clearModals()
   {
    $("#removeWarning").hide();
    $("#id").val("").removeAttr( "disabled" );
    $("#userid").val("").removeAttr( "disabled" );
    $("#real_name").val("").removeAttr( "disabled" );
    $("#npm").val("").removeAttr( "disabled" );
    $("#type").val("");
    $("#kelas").val("").removeAttr( "disabled" );
   }
   
  </script>
    
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
<!--  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable( {
        "scrollY": 200,
        "scrollX": true
    } );
} );
</script>   -->
<div class="navbar navbar-inverse navbar-fixed-bottom">
   <div class="container">
      <p class="navbar-text pull-left">&#169; Copyright by Teknik Informatika 2016, Powered by Institute Teknologi Adhi Tama Surabaya</p></br>
	  <button type="button" class="btn btn-info btn-md pull-right" data-toggle="modal" data-target="#myModal">LIKE
	  <span class="glyphicon glyphicon-thumbs-up"></span>
	  </button>
   </div>
</div>
		  
    
</div>
<!--    
    <div class="top-big-link">
                            	<a class="btn btn-link-1 launch-modal" href="#" data-modal-id="modal-login2">Login
								<span class="glyphicon glyphicon-log-in"></span>
								</a>
                            </div>-->
    
    
    
  <div class="modal fade" id="update" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="delete" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Data</h4>
        </div>
        <div class="modal-body">
          <p>Anda yakin ingin menghapus?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        </div>
      </div>
      
    </div>
  </div>
<?php
//    echo "<br>nama = $nama";
//    echo "<br>kelas = $kelas";
//    echo "<br>tanggal = $tanggal";
//    echo "<br>keterngan = $ket";
//    echo "<br>guru = $guru";
?>
</div>
</body>
        
</html>