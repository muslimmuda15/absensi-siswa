<!DOCTYPE html>
<?php
    include 'Data/connect.php';
    include 'Data/checkCookies.php';
//    echo "<script>window.alert('user = $user\\npass = $pass\\ncookies user = ".$_COOKIE['username']."\\ncookies password = ".$_COOKIE['password']."');</script>";
?>
<html lang="en">
<head>
  <title>Surat Izin Keluar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  

    
<?php
$nama = $kelas = $tanggal = $ket = $guru = "";
include 'Data/date_indonesia.php';
include 'Data/connect.php';
?>
    
<script>
    $(document).ready(function(){
        $('#tanggal').Zebra_DatePicker({
            format: 'd-F-Y',
            months : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu']
        });
    });
    
//    $("#print").on('click',function(){
//        window.print();
//    });
</script>

<script>
    function carikelas(value)
    {
        
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
     "responsive": true,
     "sAjaxSource": "Data/IzinSide.php", // Load Data
     "sServerMethod": "POST",
     "columnDefs": [
     { "orderable": false, "targets": 0, "searchable": false },
     { "orderable": true , "targets": 1, "searchable": true },
     { "orderable": true , "targets": 2, "searchable": true },
     { "orderable": true , "targets": 3, "searchable": true },
     { "orderable": true , "targets": 4, "searchable": true },
     { "orderable": true , "targets": 5, "searchable": true },
     { "orderable": true , "targets": 6, "searchable": true },
     { "orderable": true , "targets": 7, "searchable": true }
     ]
    } );
    
    $('#example').removeClass( 'display' ).addClass('table table-bordered');
    $('#example tfoot th').each( function () {
     
     //Agar kolom Action Tidak Ada Tombol Pencarian
     if( $(this).text() != "Action" ){
      if($(this).text() == "Kelas")
      {
          $(this).html('<select class="form-control">\n\
                                        <option></option>\n\
                                        <option>X TKJ 1</option>\n\
                                        <option>X TKJ 2</option>\n\
                                        <option>X MM 1</option>\n\
                                        <option>X MM 2</option>\n\
                                        <option>XI TKJ 1</option>\n\
                                        <option>XI TKJ 2</option>\n\
                                        <option>XI MM 1</option>\n\
                                        <option>XI MM 2</option>\n\
                                        <option>XII TKJ 1</option>\n\
                                        <option>XII TKJ 2</option>\n\
                                        <option>XII MM 1</option>\n\
                                        <option>XII MM 2</option>\n\
                                        <option>XII ANM</option>\n\
                                    </select>');
      }
      else if($(this).text() == "No")
      {
          var title = $('#example thead th').eq( $(this).index() ).text();
          //$(this).html( '<input type="text" placeholder="Search '+title+'" class="form-control" />' );
      }
      else
      {
          var title = $('#example thead th').eq( $(this).index() ).text();
          $(this).html( '<input type="text" placeholder="Search '+title+'" class="form-control" />' );
      }
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
     $( 'select', this.footer() ).on( 'change', function () {
      that
      .search( this.value )
      .draw();
     } );
    } );
   } );
   
   
  </script>
  
  </head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" >Absensi Online</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Absensi Siswa</a></li>
      <li><a href="terlambat.php">siswa terlambat</a></li>
      <li><a href="siswa.php">Buku Laporan</a></li>
      <li class="active"><a href="surat.php">Surat Keluar/Izin</a></li>
      <li><a href="DataSiswa.php">Data Siswa</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<div class="well container-fluid" style="margin-top:-20px; overflow-y: scroll; height:1000px;">
    <div class="row">

<div class="container-fluid">
    
   <div class="row">
    <div class="col-md-12">
        <div class="panel-heading">
      <div style="text-align: center;">
        <span style="color: black; font-family: Verdana,Arial,Helvetica,Georgia; font-size: 35px;">Rekapan Daftar Izin.Keluar Siswa</span>
        </div>
<!--        <a href="javascript:window.print()" class="btn btn-success btn-sm">
          <span class="glyphicon glyphicon-print"></span>
          Print
        </a>-->
    </div>
     <button onClick="showModals()" class="btn btn-primary">Tambah Data</button>
     <a onclick="setPdf()" class="btn btn-success btn-sm" id="setPDFs">
      <span class="glyphicon glyphicon-print"></span> Preview Table
     </a>
     
     <a onclick="setPdfTable()" class="btn btn-success btn-sm">
      <span class="glyphicon glyphicon-print"></span> Preview Semua Data
     </a>
     <br>
     <br>
     <table id="example"  cellpadding="0" cellspacing="0" border="0" class="display" width="100%">
      <thead>
       <tr>
        <th>ActionButton</th>
        <th>No</th>
        <th>Induk</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Tanggal</th>
        <th>Ket</th>
        <th>Guru</th>
       </tr>
      </thead>
      <tbody>
      </tbody>
      <tfoot>
        <th>Action</th>
        <th>No</th>
        <th>Induk</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Tanggal</th>
        <th>Ket</th>
        <th>Guru</th>
      </tfoot>
     </table>
    </div>
   </div>
  </div>    
        
        <div align="center" id="suratIzin" style="display:none">
    <table width="423" height="468" border="0" cellpadding="2" id="tableIzin">
    <tr>
      <td height="48" colspan="3"><div align="center">
        <h3>SMK MUHAMMADIYAH 2 SURABAYA</h3>
      </div></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">SURAT IZIN</div></td>
    </tr>
    <tr>
      <td height="47" colspan="3"><h4>Menerangkan Bahwa siswa di bawah ini :</h4></td>
    </tr>
    <tr>
        <td height="29" colspan="3">Nama : <span id="namaSiswa"></span></td>
    </tr>
    <tr>
      <td height="30" colspan="3">Kelas : <span id="kelasSiswa"></span></td>
    </tr>
    <tr>
      <td height="31" colspan="3">Tanggal : <span id="tanggalSiswa"></span></td>
    </tr>
    <tr>
      <td height="32" colspan="3"><div align="justify">Keperluan : <span id="keperluanSiswa"></span></div></td>
    </tr>
    <tr>
      <td height="1" colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">Guru Kelas </div></td>
      <td colspan="2"><div align="center">Guru Piket</div></td>
    </tr>
    <tr>
      <td width="230" height="25">&nbsp;</td>
      <td width="182" colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td height="51"><div align="center">(...........................................)</div></td>
      <td colspan="2"><div align="center">(<span id="guruSiswa"></span>)</div></td>
    </tr>
  </table>
<!--    <div align="center"><h3><b>SMK MUHAMMADIYAH 2 SURABAYA</b></h3></div>
    <div align="center"><h4>SURAT IZIN</h4></div>
    <div align="left"><h4>Menerangkan bahwa siswa ini dengan :</h4></div>
    <div align="left">Nama : <div style="display:inline" id="namaSiswa">nama</div></div>
    <div align="left">Kelas : <div style="display:inline" id="kelasSiswa">nama</div></div>-->
</div>
    
    <!--<div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">-->
        <div class="modal fade" id="myModals" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel">Tambah Izin</h4>
     </div>
        <div class="modal-body" id="bodyModal">
         <!--<form method="POST" action="">-->
         <form class="form" id="formUser">
             <input type="hidden" class="form-control" id="no" name="no">
             <input type="hidden" class="form-control" id="induk" name="induk">
             <input type="hidden" class="form-control" id="type" name="type">
             <!--<div class="form-group">-->
				<label for="kelas">Kelas:</label>
                                <!--<form method="post">-->
                                    <select project="kelas" class="form-control" name="kelas" id="kelas" onchange="filterSiswa(this.value)" value="--">
                                        <option>--</option>
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
                                <!--<button type="cari" name="cari" class="glyphicon glyphicon-search btn btn-default btn-info">Search</button>-->
                                <!--</div>-->
                                
                            
				<div class="form-group">
				<label for="siswa">Nama Siswa</label>
				    <div class="input-group"><!-- /cari siswa -->
					<span class="input-group-btn">
					<button type="button" class="btn btn-default btn-info">
					<span class="glyphicon glyphicon-search"></span>
					</button>
						</span>
                                        
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Siswa" list="ceknama" autocomplete="off" required>
                                        <datalist id="ceknama">
                                            
                                            <?php
                                                if($kelas=="")
                                                {
                                            //    echo "Connected successfully";
                                                    $sql_siswa = "SELECT nama,kelas from siswa order by nama;";
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
				
                                <input type="text" name="tanggal" id="tanggal" value="<?php echo indonesian_date();?>" required/>
                                
				</div>
				<div class="form-group">
				<label for="keperluan">Keperluan :</label><br>
                                <textarea id="keterangan" name="keterangan" rows="4" cols="75.5" placeholder="Apa Keperluan Anda!!..."></textarea>
				</div>
				<div class="form-group">
				<label for="piket">Guru Piket :</label>
                                <input type="text" class="form-control" value="<?php echo $guru; ?>" name="guru" id="guru" placeholder="Guru Piket" list="cekguru" autocomplete="off" required>
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
         </form>
     </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onClick="submitUser(); cetakModal();">Submit Data</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
    </div>
   </div>
  </div>
    
 <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="status">Title</h4>
     </div>
     <div class="modal-body">
         <h4 class="modal-body" id="errorMessage">Message</h4>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="showModals()">Close</button>
     </div>
    </div>
   </div>
  </div>
         
    <table class="table table-bordered" id="tableAll" style="display:none;">
          <thead>
            <tr>
              <th class="col-md-1">#</th><th class="col-md-1">Induk</th><th class="col-md-2">Nama</th><th class="col-md-2">Kelas</th><th class="col-md-2">Tanggal</th>
			  <th class="col-md-2">Ket</th><th class="col-md-2">Guru Piket</th>
            </tr>
          </thead>
          <tbody>
              <?php
                
                if($kelas==="")
                {
                    $i=1;
                //    echo "Connected successfully";
                    $sql = "SELECT * from izin order by tanggal";
    //                echo $sql;
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) 
                    {
    //                    echo "<table><tr><th>ID</th><th>Name</th></tr>";
                        // output data of each row
                        
                        while($row = $result->fetch_assoc()) 
                        { 
                            echo "<tr>"
                                  . "<td>".$row["no"]."</td>"
                                  . "<td>".$row["induk"]."</td>"
                                  . "<td>".$row["nama"]."</td>"
                                  . "<td>".$row["kelas"]."</td>"
                                  . "<td>".$row["tanggal"]."</td>"
                                  . "<td>".$row["keterangan"]."</td>"
                                  . "<td>".$row["guru"]."</td>"
                                  . "</tr>";
                            $i++;
                        }
                    }
                }
                
//                $conn->close();
                ?>
          </tbody>
        </table>
    <script>
   var isLogin=false;
   // untuk error message
   function showInsertError()
   {
       $("#status").val("error");
       $("#pop").modal("show");
   }
   
      //Tampilkan Modal 
   function showModals( no )
   {
//    waitingDialog.show();
    clearModals();
    
    // Untuk Eksekusi Data Yang Ingin di Edit atau Di Hapus 
    if( no )
    {
     $.ajax({
      type: "POST",
      url: "Data/crudIzin.php",
      dataType: 'json',
      data: {no:no,type:"get"},
      success: function(res) {
//       waitingDialog.hide();
       setModalData( res );
      },
     error: function (jqXHR, exception) {
        var msg = '';
        if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.';
        } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].';
        } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
        } else if (exception === 'timeout') {
            msg = 'Time out error.';
        } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
        } else {
            msg = 'Uncaught Error.\n' + jqXHR.responseText;
        }
//        $('#post').html(msg);
        $("#status").html("Invalid")
        $("#errorMessage").html(msg);
        $("#errorModal").modal("show");
//        waitingDialog.hide(); 
     }
     });
    }
    // Untuk klik Tambah Data
    else
    {
        clearModals();
//     $("#insert").modal("show");
        $("#myModals").modal("show");
        $("#myModalLabel").html("New User");
        $("#no").val("<?php $result = mysqli_query($conn, 'SELECT MAX(no) FROM izin');
                                            $baris = mysqli_fetch_array($result);
                                            echo $baris[0]+1; ?>");
        $("#tanggal").val("<?php echo indonesian_date(); ?>");
        $("#type").val("new"); 
//        waitingDialog.hide();
    }
    $('.Zebra_DatePicker_Icon').attr('style', 'margin-left: -19px; margin-top: 5px;').show();
   }
   
   //Data Yang Ingin Di Tampilkan Pada Modal Ketika Di Edit 
   function setModalData( data )
   {
    $("#myModalLabel").html(data.nama);
    $("#no").val(data.no);
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
//    waitingDialog.show();
    $.ajax({
     type: "POST",
     url: "Data/crudIzin.php",
     dataType: 'json',
     data: formData,
     success: function(data) {
         if(data.status == 'OK')
         {    
             dTable.ajax.reload();
//             alert(data.errorMessage);
         }
         else if(data.status == 'error')
         {
             $("#status").html("Error")
             $("#errorMessage").html(data.errorMessage);
             $("#errorModal").modal("show")();
//             alert(data.errorMessage);
         }
         else if(data.status == 'invalid')
         {
             $("#status").html("Invalid")
             $("#errorMessage").html(data.errorMessage);
             $("#errorModal").modal("show");
//             alert(data.errorMessage);
         }
       // Untuk Reload Tables secara otomatis
//      waitingDialog.hide(); 
     },
     error: function (jqXHR, exception) {
        var msg = '';
        if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.';
        } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].';
        } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
        } else if (exception === 'timeout') {
            msg = 'Time out error.';
        } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
        } else {
            msg = 'Uncaught Error.\n' + jqXHR.responseText;
        }
//        $('#post').html(msg);
        $("#status").html("Invalid")
        $("#errorMessage").html(msg);
        $("#errorModal").modal("show");
//        waitingDialog.hide(); 
     }
    });
   }
   
   //Hapus Data
   function deleteUser( no )
   {
    clearModals();
    $.ajax({
     type: "POST",
     url: "Data/crudIzin.php",
     dataType: 'json',
     data: {no:no,type:"get"},
     success: function(data) {
//      $("#removeWarning").show();
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
//      waitingDialog.hide();   
     },
     error: function (jqXHR, exception) {
        var msg = '';
        if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.';
        } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].';
        } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
        } else if (exception === 'timeout') {
            msg = 'Time out error.';
        } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
        } else {
            msg = 'Uncaught Error.\n' + jqXHR.responseText;
        }
//        $('#post').html(msg);
        $("#status").html("Invalid")
        $("#errorMessage").html(msg);
        $("#errorModal").modal("show");
//        waitingDialog.hide(); 
     }
    });
   }
   
   //Clear Modal atau menutup modal supaya tidak terjadi duplikat modal
   function clearModals()
   {
    $("#removeWarning").hide();
    $("#no").val("").removeAttr( "disabled" );
    $("#induk").val("").removeAttr( "disabled" );
    $("#nama").val("").removeAttr( "disabled" );
    $("#kelas").val("").removeAttr( "disabled" );
    $("#tanggal").val("").removeAttr( "disabled" );
    $("#keterangan").val("").removeAttr( "disabled" );
    $("#guru").val("").removeAttr( "disabled" );
   }
   
//   function ceknama(no)
//   {
//        $.ajax({
//            type: "POST",
//            url: "Data/filterSiswa.php",
//            dataType: 'json',
//            data: {kelas:(no)},
//            $("#ceknama").html(data.option);
//        });
//   }

    function filterSiswa(str){
     $.ajax({
            type: 'POST',
            url: 'Data/filterSiswa.php',
            data: {kelas: str},
            success: function (data) {            
               $("#ceknama").html(data);
            },
            error: function (jqXHR, exception) {
                var msg = '';
                if (jqXHR.status === 0) {
                    msg = 'Not connect.\n Verify Network.';
                } else if (jqXHR.status == 404) {
                    msg = 'Requested page not found. [404]';
                } else if (jqXHR.status == 500) {
                    msg = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    msg = 'Requested JSON parse failed.';
                } else if (exception === 'timeout') {
                    msg = 'Time out error.';
                } else if (exception === 'abort') {
                    msg = 'Ajax request aborted.';
                } else {
                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                }
        //        $('#post').html(msg);
                $("#status").html("Invalid")
                $("#errorMessage").html(msg);
                $("#errorModal").modal("show");
        //        waitingDialog.hide(); 
             }
        });
     }
  </script>
    
<style type="text/css">
    .table-fixed thead {
  width: 97%;
}
.Zebra_DatePicker{
    z-index: 100000;
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
          <br><br><a href="admin.php">administrator</a>
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

<script src="dist/jspdf.min.js"></script>
<script src="dist/jspdf.plugin.autotable.js"></script>
<script>
    function setPdf()
    {
        var doc = new jsPDF('p', 'pt');
        var tbl = $('#example').clone();
          tbl.find('tfoot').remove();

          /********
            1 -->  No
            2 -->  Id
            3 -->  Name
            4 -->  Class
          *****/
          tbl.find('tr th:nth-child(1), tr td:nth-child(1)').remove();

          var res = doc.autoTableHtmlToJson(tbl.get(0));


          doc.autoTable(res.columns, res.data, {
            startY: 60,
            styles: {
              overflow: 'linebreak',
              fontSize: 8,
              columnWidth: 'wrap'
            },
            columnStyles: {
              1: {columnWidth: 'auto'}
            },
            createdCell: function (cell, data) {
              var a = this;
            }
          });
          doc.output('dataurlnewwindow');
    }
    
    function setPdfTable()
    {
        var doc = new jsPDF('p', 'pt', 'a4');
        var elem = document.getElementById("tableAll");
        var res = doc.autoTableHtmlToJson(elem);
        doc.autoTable(res.columns, res.data, {
            startY: 60,
            styles: {
              overflow: 'linebreak',
              fontSize: 8,
              columnWidth: 'wrap'
            },
            columnStyles: {
              1: {columnWidth: 'auto'}
            }
          });
//        doc.save("absen.pdf");
        doc.output('dataurlnewwindow');
    }
    
    function cetakModal()
    {
        $("#namaSiswa").html(document.getElementById("nama").value);
        $("#kelasSiswa").html(document.getElementById("kelas").value);
        $("#tanggalSiswa").html(document.getElementById("tanggal").value);
        $("#keperluanSiswa").html(document.getElementById("keterangan").value);
        $("#guruSiswa").html(document.getElementById("guru").value);
        if(document.getElementById("type").value === "new" || document.getElementById("type").value === "edit")
            PrintElem('#suratIzin');
    }
    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'width=500, height=550');
        mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');
        mywindow.document.write('<style>.space{white-space: pre;}</style>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
    }
</script>