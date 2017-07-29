
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
   
   $SQL = mysqli_query($con, "SELECT * FROM absen WHERE no='".$_POST['no']."'");
   $return = mysqli_fetch_array($SQL,MYSQLI_ASSOC);
   echo json_encode($return);
   break;
  
  //Tambah Data 
  case "new":
   
      $cek=array('status'=>'','errorMessage'=>'');
      
        $sql_siswa = "SELECT * from siswa where induk like '".$_POST["induk"]."'";
        $result = $con->query($sql_siswa);
        if ($result->num_rows == 0) 
        {
            $result = mysqli_query($con, "SELECT MAX(no) FROM siswa");
            $baris = mysqli_fetch_array($result);
            $max = $baris[0]+1;


            $SQL = mysqli_query($con, 
                 "insert into siswa set
                  no='".$max."',
                  induk='".$_POST["induk"]."',
                  nama='".$_POST['nama']."', 
                  kelas='".$_POST['kelas']."'
                ");

            if($SQL){
                $cek=array('status'=>'OK','errorMessage'=>'data insert');
            }   
            else
                $cek=array('status'=>'error','errorMessage'=>'error SQL');
        }
        else
            $cek=array('status'=>'invalid','errorMessage'=>'data siswa telah ada');
        
        echo json_encode($cek);
   break;
   
  //Edit Data 
  case "edit":
    $sql_siswa = "SELECT * from siswa where nama like '".$_POST["nama"]."' and kelas like '".$_POST['kelas']."'";
//               . "and kelas like '".$_POST["kelas"]."' "
//               . "and kelas like '".$_POST["tanggal"]."' "
//               . "and kelas like '".$_POST["keterangan"]."' "
//               . "and kelas like '".$_POST["guru"]."'";
    $result = $con->query($sql_siswa);
    if ($result->num_rows > 0) 
    {
        $SQL = mysqli_query($con, 
             "UPDATE absen SET 
              no='".$_POST['no']."',
              induk='".$_POST['induk']."',    
              nama='".$_POST['nama']."', 
              kelas='".$_POST['kelas']."',
              tanggal='".toDefault($_POST["tanggal"])."',
              keterangan='".$_POST["keterangan"]."',
              guru='".$_POST["guru"]."' 
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
   
//    $sql_siswa = "SELECT * from absen where induk like '".$_POST['induk']."' "
//               . "and nama like '".$_POST["nama"]."' "
//               . "and kelas like '".$_POST['kelas']."' "
//               . "and tanggal like '".$_POST['tanggal']."' "
//               . "and keterangan like '".$_POST['keterangan']."' "
//               . "and guru like '".$_POST['guru']."'";
//    $result = $con->query($sql_siswa);
//    if ($result->num_rows > 0) 
    {
       $SQL = mysqli_query($con, "DELETE FROM absen WHERE no='".$_POST['no']."'");
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