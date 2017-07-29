<?php
function getCookies()
{
    include 'connect.php';
//    $isLogin=false;
    $loginQuery = "select * from login;";
    $result = $conn->query($loginQuery);
    $user = $pass = "";
    if($result->num_rows > 0)
    {
        if($row = $result->fetch_assoc())
        {
            $user = $row['username'];
            $pass = $row['password'];
        }
    }
    //if(isset($_COOKIE['username']))
    if($user === $_COOKIE['username'] && $pass === $_COOKIE['password'])
        return true;
    else
    {
        return false;
    }
}
?>
