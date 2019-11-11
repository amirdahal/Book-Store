<!DOCTYPE html>
<html lang="en">

<head>
    <title>MySpace | Home</title>
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
        <a class="navbar-brand" href="#">MySpace</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="">Home</a>
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
    <div class="container-fluid" style="margin-top: 10px;">
        <script language="javascript">
            var delay = 5000
            var curindex = 0
            var randomimages = new Array()
            randomimages[0] = "1.jpg"
            randomimages[1] = "5.jpg"
            randomimages[2] = "2.jpg"
            randomimages[3] = "4.jpg"
            randomimages[4] = "3.jpg"
            randomimages[5] = "6.jpg"

            var preload = new Array()

            for (n = 0; n < randomimages.length; n++) {
                preload[n] = new Image()
                preload[n].src = randomimages[n]
            }

            function rotateimage() {
                if (curindex == (tempindex = Math.floor(Math.random() * (randomimages.length)))) {
                    curindex = curindex == 0 ? 1 : curindex - 1
                } else
                    curindex = tempindex
                document.images.defaultimage.src = "images/" + randomimages[curindex]
            }
        </script>
        <img style="width:device-width;height:200px; overflow: hidden;" class="mx-auto d-block" name="defaultimage" src="images/1.jpg">
        <center><button style="margin-top: 10px;" type="button" class="btn btn-outline-primary" onclick="rotateimage()">Next Image</button></center>
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