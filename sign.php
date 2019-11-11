<?php
    session_start();
    $msg="Login or Create a New Account";
            $con = mysqli_connect("localhost","root","","myspace") or die();
        
        if(isset($_REQUEST['login'])){
            $log_email = $_POST['log_email'];
            $log_pass = $_POST['log_pass'];

            $sql = "SELECT * FROM `user` WHERE Email='$log_email' AND Password='$log_pass'";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);

            if($count == 1){

                $_SESSION['space_email'] = $row['Email'];

                $msg =  "<div class='alert alert-success'>
                    <strong>Login Success!</strong> Click profile to continue</div>";
            }
            else{
                $msg = "<div class='alert alert-danger'>
                    <strong>Login Failed!</strong>Enter correct email and password</div>";
            }
        }


        if(isset($_REQUEST['register'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $univ = $_POST['university'];
            $des = $_POST['designation'];
            $pass = $_POST['password'];

            $sql = "INSERT INTO `user` (`Name`, `Email`,`University`,`Designation` ,`Password`) VALUES ('".$name."', '".$email."', '".$univ."','".$des."','".$pass."')";
            if(mysqli_query($con,$sql))
                echo "<script>alert('Login to continue');<script>";
            else
                echo "<script>alert('Something went wrong.. Please try again');</script>";
        }
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <link href="css/css.css" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .bottom-fixed {
                position: sticky;
                right: 0;
                bottom: 0;
                left: 0;
                padding: 1rem;
            }
        </style>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css' />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    </head>

    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" href="index.php">MySpace</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="main">
            <div class="header">
                <h1><?php echo $msg; ?></h1>
            </div>
            <form method="POST" action="">
                <ul class="left-form">
                    <h2>New Account:</h2>
                    <li>
                        <input type="text" name="name" placeholder="Name" required />
                        <div class="clear"> </div>
                    </li>
                    <li>
                        <input type="email" name="email" placeholder="Email" required />
                        <div class="clear"> </div>
                    </li>
                    <li>
                        <input type="text" name="university" placeholder="University" required />
                        <div class="clear"> </div>
                    </li>
                    <li>
                        <select class="form-control" name="designation">
                        <option value="Student">Student</option>
                        <option value="Lecturer">Lecturer</option>
                    </select>
                        <div class="clear"> </div>
                    </li>
                    <li>
                        <input type="password" name="password" placeholder="Login Password" required />
                        <div class="clear"> </div>
                    </li>
                    <input type="submit" name="register" value="Create Account">
                    <div class="clear"> </div>
                </ul>
            </form>
            <form method="POST" action="">
                <ul class="right-form">
                    <h3>Login:</h3>
                    <div>
                        <li><input type="email" name="log_email" placeholder="Email" required /></li>
                        <li> <input type="password" name="log_pass" placeholder="Password" required /></li>
                        <button type="submit" class="btn btn-outline-success" name="login">Login</buttom>
                    </div>
                    <div class="clear"> </div>
                </ul>
                <div class="clear"> </div>
            </form>
        </div>
        <footer class="bg-dark text-white mt-4 bottom-fixed">
            <div class="container-fluid py-3">
                <div class="row">
                    <div class="col-md-12 text-center small align-self-end">©2019 MySpace, by Amir. Any queries? Contact Us at: amir_201811503@smit.smu.edu.in
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>