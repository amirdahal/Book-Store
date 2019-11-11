<?php
    session_start();
    if(!isset($_SESSION['space_email']))
        header('location:sign.php');
    
    $email = $_SESSION['space_email'];
    $name = "";
    $des = "";
    $univ = "";
    $des2 = "";
    
    $con = mysqli_connect("localhost","root","","myspace") or die();
    $msg = "";

    $result = mysqli_query($con,"select * from `user`");
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $name = $row['Name'];
    $univ = $row['University'];
    $des = $row['Designation'];
    if($des === "Student")
        $des2 = "Lecturer";
    else
        $des2 = "Student";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>MySpace | Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        .bottom-fixed {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1rem;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="index.php">MySpace</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                    </form>
                    </button>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container-fluid">
    <div class="row" style="margin-top:2%;">
        <div class = "col-md-4">
            <img src="images/user.png" class="rounded mx-auto d-block" alt="<?php echo $name; ?>">
        </div>
        <div class="col-md-1"></div>
        <div class="form-group col-md-5">
            <form method="POST">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Email</span>
                    </div>
                    <input type="email" class="form-control" placeholder="Email" name="space_email" value="<?php echo $email; ?>">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Name</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Name" name="space_name" value="<?php echo $name; ?>">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">University </span>
                    </div>
                    <input type="text" class="form-control" placeholder="University" name="space_univ" value="<?php echo $univ; ?>">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Designation</span>
                    </div>
                    <select class="form-control" name="space_des">
                        <option value="<?php echo $des; ?>"><?php echo $des; ?></option>
                        <option value="<?php echo $des2; ?>"><?php echo $des2; ?></option>
                    </select>
                </div>
                
                <div class="btn-group btn-group-lg">
                    <button type="submit" class="btn btn-success" name="update">Update Profile</button>
                    <?php
                        if(isset($_REQUEST['update'])){
                            $name = $_POST['space_name'];
                            $email = $_POST['space_email'];
                            $unive = $_POST['space_univ'];
                            $desi = $_POST['space_des'];
                            $sql = "update `user` set Name='$name',University='$unive', Designation='$desi' where Email='$email'";
                            if(mysqli_query($con,$sql)){
                                $msg = "<div class='alert alert-success'><strong>Update Success!</strong> 
                                    Refresh to see changes</div>";
                                $del = 3;
                                $red = "profile.php";
                                header("Refresh:$del;Location:$red");

                            }
                            else
                                $msg = "<div class='alert alert-danger'><strong>Update Failed!</strong> 
                                    Refresh Page and try again</div>";
                        }
                    ?>
                    <button type="submit" class="btn btn-danger" name="delete">Delete Account</button>
                    <?php
                        if(isset($_REQUEST['delete'])){
                            $sql = "delete from `user` where Email='$email'";
                            if(mysqli_query($con,$sql)){
                                $msg = "<div class='alert alert-success'><strong>Account Deleted!</strong> </div>";
                                unset($_SESSION['space_email']);
                                red();
                            }
                        }
                    ?>
                    <button type="submit" class="btn btn-info" name="logout">Log Me Out</button>
                        <?php
                            if(isset($_REQUEST['logout'])){
                                unset($_SESSION['space_email']);
                                red();
                            }
                            function red(){
                                header('Location:index.php');
                            }
                        ?>
                </div>
            </form>
        </div>
         <?php echo $msg; ?>
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