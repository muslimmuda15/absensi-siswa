<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mysql";
    $max="";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    

    $result = mysqli_query($conn, "SELECT MAX(no) FROM absen");
    $row = mysqli_fetch_array($result);
    $max = $row[0]+1;


    $sql_insert = "insert into absen values ($max,'12345','Nama Siswa','X TKJ 4','2016-05-30','izin', 'chsaini')";
    if($conn->query($sql_insert)===true){
        echo "data insert";
    }
    else
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
?>