<!DOCTYPE html>
<html lang="en">

<head>
    <title>MySpace | About Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
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
        .deepshd {
  color: #e0dfdc;
  background-color: #333;
  letter-spacing: .1em;
  text-shadow: 0 -1px 0 #fff, 0 1px 0 #2e2e2e, 0 2px 0 #2c2c2c, 0 3px 0 #2a2a2a, 0 4px 0 #282828, 0 5px 0 #262626, 0 6px 0 #242424, 0 7px 0 #222, 0 8px 0 #202020, 0 9px 0 #1e1e1e, 0 10px 0 #1c1c1c, 0 11px 0 #1a1a1a, 0 12px 0 #181818, 0 13px 0 #161616, 0 14px 0 #141414, 0 15px 0 #121212, 0 22px 30px rgba(0, 0, 0, 0.9);
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
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="">About Us</a>
                </li>
            </ul>
        </div>
    </nav>

<div class="card">
  <img src="images/me.jpg" alt="Amir" style="width:100%">
  <h1 class="deepshd">Amir Dahal</h1>
  <p class="title">Student</p>
  <p>Sikkim Manipal Institite of Technology</p>
  <a href="#"><i class="fa fa-facebook"></i></a>
  <p><button class="btn btn-outline-info">Contact</button></p>
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