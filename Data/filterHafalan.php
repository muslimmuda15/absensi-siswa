<?php
include 'connect.php';
if(isset($_POST["kelas"])){
    if($_POST["kelas"]=="--")
        $sql_siswa = "SELECT nama from siswa order by nama;";
    else
        $sql_siswa = "SELECT nama from siswa where kelas like '".$_POST["kelas"]."' order by nama;";
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