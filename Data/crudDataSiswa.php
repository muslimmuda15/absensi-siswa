
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
   
   $SQL = mysqli_query($con, "SELECT * FROM siswa WHERE no='".$_POST['no']."'");
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
                    if($row = $result->fetch_assoc()) 
                    {
                        $getinduk = $row["induk"];
                    }
                    $result = mysqli_query($con, "SELECT MAX(no) FROM siswa");
                    $baris = mysqli_fetch_array($result);
                    $max = $baris[0]+1;
                    
                    
                    $SQL = mysqli_query($con, 
                         "insert into siswa set
                          no='".$max."',
                          induk='".$getinduk."',
                          nama='".$_POST['nama']."', 
                          kelas='".$_POST['kelas']."',
                          tanggal='".toDefault($_POST['tanggal'])."',
                          keterangan='".$_POST['keterangan']."',
                          guru='".$_POST['guru']."'
                        ");
                    
                    if($SQL){
                        $cek=array('status'=>'OK','errorMessage'=>'data insert');
                    }   
                    else
                        $cek=array('status'=>'error','errorMessage'=>'error SQL');
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
//    $sql_siswa = "SELECT * from siswa where nama like '".$_POST["nama"]."' and kelas like '".$_POST['kelas']."'";
    $sql_siswa = "SELECT * from siswa where no like '".$_POST["no"]."'";
    $result = $con->query($sql_siswa);
    if ($result->num_rows > 0) 
    {
        $SQL = mysqli_query($con, 
             "UPDATE siswa SET 
              no='".$_POST['no']."',
              induk='".$_POST['induk']."',    
              nama='".$_POST['nama']."', 
              kelas='".$_POST['kelas']."'
             WHERE no='".$_POST['no']."'
            ");
        if($SQL){
            $cek=array('status'=>'OK','errorMessage'=>'data updated');
        }   
        else
            $cek=array('status'=>'error','errorMessage'=>'error SQL');
    }
    else
        $cek=array('status'=>'invalid','errorMessage'=>'Sepertinya nama siswa dan kelasnya tidak sesuai, jumlah : '.$result->num_rows);
    
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
       $SQL = mysqli_query($con, "DELETE FROM siswa WHERE no = ".$_POST['no']."");
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