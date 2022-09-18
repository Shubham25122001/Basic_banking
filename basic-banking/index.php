<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Welcome to Sparks Bank</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        #lock{
            display:none;
            position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 20;
    background: rgb(255,255,255) center no-repeat;
    text-align:center;
        }
        @media screen (orientation:landscape) {
            #lock{display:none;}
            #container{display:block;}
        }

        @media screen and (orientation:portrait) {
            #lock{display:block;}
            #container{display:none;}
        }
    </style>
</head>

<body class="body-bg">

<div id="lock"><img src="img/PngItem_5146697.png" alt="" style="width:50%; margin-top:50%;"><br>
<h1 style="color:black; margin-top: 25px;"><b>Please rotate the device. </b><br>We support only landscape mode.</h1>
</div>

<div id="container">

    <?php include 'db.php'; ?>


    <style>
        .nav-link:hover {
            text-decoration: underline;
        }

        .mybtn {
            margin-bottom: 10px;
            box-shadow: 2px 2px 10px black;
            border-radius: 30px;
            background-color: white;
            font-weight: bold;
            color: black;
        }

        .mybtn:active {
            background-color: black;
            color: white;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed fixed-top"
        style="font-family:candara; font-size:18px; box-shadow: 0px 0px 10px 0px black;">
        <div class="container-fluid">
            <a href="index.php"><img src="img/logo.png"  alt=""
                    style="height: 60px; margin-left:25px; margin-top:10px; background-color: #f9fafb;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse ex2" id="navbarSupportedContent">
            <b>
                <ul class="navbar-nav">
                    <li class="nav-item nav-links" style="margin-left:15px;">
                        <a class="nav-link active text-nowrap" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px; ">
                        <a class="nav-link text-nowrap" href="money_send.php">Send Money</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="all_cust.php">View All Customers</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="transactions_history.php">Transactions</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px; margin-right:75px;">
                        <a class="nav-link text-nowrap" href="about.php">About Us</a>
                    </li>
                </ul>
            </b>
        </div>
    </nav>



    <div class="container-large"
        style="color:white; height:500px; width: 100%; padding:8% 2% 2% 2%; background-color:#055160;">
        <div class="row">
            <div class="col" style="margin-left: 5%;">
                <br><br>&nbsp;<p class="zoomfont"
                    style="font-size:0px; text-shadow:3px 3px 3px grey; text-align:center;"><b>Welcome to <br> Sparks
                        Bank!</b></p>
            </div>
            <div class="col" style="margin:4% 0% 0% 5%; text-align:center;">
                &nbsp;<img src="data:image/jpeg;base64,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" class="zoomin" alt="" style="width:0px; margin-top:-50px;">
            </div>
        </div>
    </div>
    <img src="img/abstbg2.png" alt="" style="width:100%; position:absolute; z-index:-1">

    <center style="margin:60px 0px 20px 0px;">
        <div class="container"
            style="backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px;">
            <h1 style="text-shadow:2px 2px 2px gray; color:white;"><b>Our Awesome Facilities</b></h1>
            <div class="container" style="margin:30px 0px 20px 0px;">
                <div class="row">
                    <div class="col-lg">
                        <div class="ex2"
                            style="background-color:#212529; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-users fa-7x"></i><br><br>
                            <a href="all_cust.php"><button type="button" class="btn btn-outline-light mybtn">View
                                    Customers</button></a><br>
                            <h6>Here, you can watch every customer of the bank.</h6>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="ex2"
                            style="background-color:#212529; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-comments-dollar fa-7x"></i><br><br>
                            <a href="money_send.php"><button type="button" class="btn btn-outline-light mybtn">Transfer
                                    Money</button></a><br>
                            <h6>Here, you can send money from your account.</h6>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="ex2"
                            style="background-color:#212529; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-coins fa-7x"></i><br><br>
                            <a href="balance_check.php"><button type="button" class="btn btn-outline-light mybtn">Check
                                    Balance</button></a><br>
                            <h6>Here, you can check the remaining balance in your account.</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </center>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        
        $(document).ready(function () {

            $(".zoomin").animate({
                width: '400px'
            }, '5000', 'linear');
            $(".zoomfont").animate({
                fontSize: '71px'
            }, '5000', 'linear');
        });
    </script>

</div>
</body>

</html>