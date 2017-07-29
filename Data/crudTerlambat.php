
<?php
include 'date_indonesia.php';
include 'getCookies.php';

if(getCookies() == TRUE)
{
 //Connection Database
 $con = mysqli_connect("localhost","root","","sekolah");
 if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 
 switch ($_POST['type']) {
  
  //Tampilkan Data 
  case "get":
   
   $SQL = mysqli_query($con, "SELECT * FROM terlambat WHERE no='".$_POST['no']."'");
   $return = mysqli_fetch_array($SQL,MYSQLI_ASSOC);
   echo json_encode($return);
   break;
  
  //Tambah Data 
  case "new":
   
      $cek=array('status'=>'','errorMessage'=>'');
      
        $sql_siswa = "SELECT * from siswa where nama like '".$_POST["nama"]."'";
        $result = $con->query($sql_siswa);
        if ($result->num_rows > 0) 
        {
            $sql_siswa = "SELECT * from data_guru where nama like '".$_POST["guru"]."'";
            $result = $con->query($sql_siswa);
            if ($result->num_rows > 0) 
            {
                $sql_siswa = "SELECT * from siswa where nama like '".$_POST["nama"]."' and kelas like '".$_POST["kelas"]."'";
                $result = $con->query($sql_siswa);
                if ($result->num_rows > 0) 
                {
                    $sql_surat = "SELECT * from surat where surat like '".addslashes($_POST["hafalan"])."'";
                    $result_surat = $con->query($sql_surat);
                    if ($result_surat->num_rows > 0) 
                    {
//                        $sql_terlammbat = "SELECT * from terlambat where nama like '".$_POST["nama"]."' and kelas like '".$_POST["kelas"]."' and hafalan like '".addslashes($_POST["hafalan"])."'";
//                        $result_terlambat = $con->query($sql_terlammbat);
//                        if ($result_terlambat->num_rows > 0) 
//                        {
//                            
//                            $cek=array('status'=>'invalid','errorMessage'=>$_POST["nama"].' sudah pernah hafalan surat '.$_POST["hafalan"]);
//                        }
//                        else
                        {
                            if($row = $result->fetch_assoc()) 
                            {
                                $getinduk = $row["induk"];
                            }
                            $result = mysqli_query($con, "SELECT MAX(no) FROM terlambat");
                            $baris = mysqli_fetch_array($result);
                            $max = $baris[0]+1;


                            $SQL = mysqli_query($con, 
                                 "insert into terlambat set
                                  no='".$max."',
                                  induk='".$getinduk."',
                                  nama='".$_POST['nama']."', 
                                  kelas='".$_POST['kelas']."',
                                  tanggal='".toDefault($_POST['tanggal'])."',
                                  hafalan='".addslashes($_POST["hafalan"])."',
                                  guru='".$_POST['guru']."',
                                  tahun='".$_POST['tahun']."'
                                ");
                            
                            if($SQL){
                                $cek=array('status'=>'OK','errorMessage'=>'data insert');
                            }   
                            else
                                $cek=array('status'=>'error','errorMessage'=>'error SQL');
                            
                            $sql_hafalan = "SELECT * from siswa_hafalan where induk like '".$getinduk."'";
                            $result_hafalan = $con->query($sql_hafalan);
                            if ($result_hafalan->num_rows > 0) 
                            {
                                if($row = $result_hafalan->fetch_assoc()) 
                                {
                                    $getHafalan = $row["hafalan"];
                                }
                                
                                $SQL = mysqli_query($con, 
                                 "update siswa_hafalan set
                                  hafalan='".addslashes($_POST["hafalan"]."\n".$getHafalan)."'
                                ");
                            }
                            else
                            {
                                
                                $result_siswa = mysqli_query($con, "SELECT MAX(no) FROM siswa_hafalan");
                                $baris_terlambat = mysqli_fetch_array($result_siswa);
                                $max_ter = $baris_terlambat[0]+1;
                                
                                $SQL = mysqli_query($con, 
                                 "insert into siswa_hafalan set
                                  no='".$max_ter."',
                                  induk='".$getinduk."',
                                  nama='".$_POST['nama']."', 
                                  kelas='".$_POST['kelas']."',
                                  hafalan='".addslashes($_POST["hafalan"])."'
                                ");
                            }
                            
                            if($SQL){
                                $cek=array('status'=>'OK','errorMessage'=>'data insert');
                            }   
                            else
                                $cek=array('status'=>'error','errorMessage'=>'error SQL');
                        }
                    }
                    else
                        $cek=array('status'=>'invalid','errorMessage'=>'Surat '.$_POST["hafalan"].' tidak ada dalam database');
                }
                else
                    $cek=array('status'=>'invalid','errorMessage'=>'nama dan kelas tidak sesuai');
            }
            else
                $cek=array('status'=>'invalid','errorMessage'=>'data guru tidak terdaftar');
        }
        else
            $cek=array('status'=>'invalid','errorMessage'=>'data siswa tidak ada');
        
        echo json_encode($cek);
   break;
   
  //Edit Data 
  case "edit":
    $sql_siswa = "SELECT * from siswa where nama like '".$_POST["nama"]."' and kelas like '".$_POST['kelas']."'";
//               . "and kelas like '".$_POST["kelas"]."' "
//               . "and kelas like '".$_POST["tanggal"]."' "
//               . "and kelas like '".$_POST["hafalan"]."' "
//               . "and kelas like '".$_POST["guru"]."'";
    $result = $con->query($sql_siswa);
    if ($result->num_rows > 0) 
    {
        $SQL = mysqli_query($con, 
             "UPDATE terlambat SET 
              no='".$_POST['no']."',
              induk='".$_POST['induk']."',    
              nama='".$_POST['nama']."', 
              kelas='".$_POST['kelas']."',
              tanggal='".toDefault($_POST["tanggal"])."',
              hafalan='".addslashes($_POST["hafalan"])."',
              guru='".$_POST["guru"]."' ,
              tahun='".$_POST['tahun']."'
             WHERE no='".$_POST['no']."'
            ");
        if($SQL){
            $cek=array('status'=>'OK','errorMessage'=>'data updated');
        }   
        else
            $cek=array('status'=>'error','errorMessage'=>'error SQL');
    }
    else
        $cek=array('status'=>'invalid','errorMessage'=>'Sepertinya nama siswa dan kelasnya tidak sesuai');
    
    echo json_encode($cek);;
   break;
   
  //Hapus Data 
  case "delete":
   
//    $sql_siswa = "SELECT * from terlambat where induk like '".$_POST['induk']."' "
//               . "and nama like '".$_POST["nama"]."' "
//               . "and kelas like '".$_POST['kelas']."' "
//               . "and tanggal like '".$_POST['tanggal']."' "
//               . "and hafalan like '".$_POST['hafalan']."' "
//               . "and guru like '".$_POST['guru']."'";
//    $result = $con->query($sql_siswa);
//    if ($result->num_rows > 0) 
    {
       $SQL = mysqli_query($con, "DELETE FROM terlambat WHERE no='".$_POST['no']."'");
       if($SQL){
           $cek=array('status'=>'OK','errorMessage'=>'data deleted');
       }   
       else
           $cek=array('status'=>'error','errorMessage'=>'SQL error');
    }
//    else
//        $cek=array('status'=>'invalid','errorMessage'=>'Sepertinya nama siswa dan kelasnya tidak sesuai');
    
    echo json_encode($cek);
   break;
 } 
}
else
{
    $cek=array('status'=>'error','errorMessage'=>'Anda belum login');
    echo json_encode($cek);
}
?>