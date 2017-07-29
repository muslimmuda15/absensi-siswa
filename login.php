<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Form Absensi</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
        <?php include 'Data/connect.php'; ?>
        <!-- Content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                        	<a class="logo" href="#"></a>
					        <h1><strong>ABSENSI ONLINE</strong></h1>
                            <h1><strong>SMK MUHAMMADIYAH 2 SURABAYA</strong></h1>
                            <div class="top-big-link">
                            	<a class="btn btn-link-1 launch-modal" href="#" data-modal-id="modal-login">Login
								<span class="glyphicon glyphicon-log-in"></span>
								</a>
                            </div>
                        </div>
                    </div>
                    
                                     
                </div>
            </div>
            
        </div>
        
        <!-- MODAL -->
        <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
        				<h3 class="modal-title" id="modal-login-label">Silahkan Login</h3>
        				<p>Masukan Username dan Password Anda:</p>
        			</div>
        			
        			<div class="modal-body">
        				
                                <form action="" method="post" class="login-form">
                                    <?php
                                        $user = $pass = "";
//                                        if(isset($_COOKIE['username'])){ 
//                                            $user = $_COOKIE["username"];
//                                            $pass = $_COOKIE["password"];
//                                            if($user === "admin" && $pass === "admin")
//                                            {
//                                                header("Location: index.php"); 
//                                            }
//                                        }
//                                        
//                                        if(isset($_POST["login"]))
//                                        {
//                                            $user = $_POST["username_log"];
//                                            $pass = $_POST["password_log"];
//                                            if($user==="admin" && $pass==="admin")
//                                            {
//                                                setcookie("username", $user, time()+7200, "/");
//                                                setcookie("password", $pass, time()+7200, "/");
//                                                header("Location: index.php");
//                                            }
//                                        }
                                        $loginQuery = "select * from login;";
                                        $result = $conn->query($loginQuery);
                                        if($result->num_rows > 0)
                                        {
                                            if($row = $result->fetch_assoc())
                                            {
                                                $user = $row['username'];
                                                $pass = $row['password'];
                                            }
                                        }
                                        if(isset($_COOKIE['username']))
                                            if($user == $_COOKIE['username'] && $pass == $_COOKIE['password'])
                                                header("Location: index.php");
                                            
                                        if(isset($_POST['login']))
                                        {
                                            $userenc=($_POST['username_log']);
                                            $passenc=($_POST['password_log']);

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
                                                    setcookie("username", $user, time()+7200, "/");
                                                    setcookie("password", $pass, time()+7200, "/");
                                                    header("Location: index.php");
                                                }
                                                else
                                                {   
                                                    echo "<script>window.alert('login gagal');</script>";
                                                }
                                            }
                                        }
                                    ?>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input type="text" name="username_log" placeholder="Username..." class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="password_log" placeholder="Password..." class="form-password form-control" id="form-password">
                                    </div>
                                    <button type="submit" class="btn" name="login">Login!
                                        <span class="glyphicon glyphicon-log-in"></span>
                                    </button>
                                </form>
	                    
        			</div>
        			
        		</div>
        	</div>
        </div>


        <!-- Javascript -->
        <script src="lib/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>