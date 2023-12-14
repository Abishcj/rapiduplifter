<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->

    <link rel="shortcut icon" href="./assets/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/all-v5.15.4.css">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min-v2.3.4.css">
    <link rel="stylesheet" href="./assets/css/owl.theme.default.min-v2.3.4.css">


    <link rel="stylesheet" href="./assets/css/mobile_view_third_page.css">

    <link rel="stylesheet" href="./assets/css/custom.css">
    <link rel="stylesheet" href="./assets/css/mobile_view.css">
    <!-- <link rel="stylesheet" href="./assets/css/scroll.css"> -->
    <link rel="preload" href="./assets/fonts/NantesWeb-Bold.570c0127.woff2" as="font" crossorigin="anonymous">
    <link rel="preload" href="./assets/fonts/NantesWeb-BoldItalic.9c7bf6ef.woff2" as="font" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/css/intlTelInput.css">
    <title>Rapid Uplifter</title>
</head>

<body class="">
    <div class="container-fluid bg-white fixed-top position-sticky shadow-sm nav-height">
        <div class="container-fluid main_container px-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white p-0">

                <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                <div id="logo" style="width: 180px;">
                    <a href="./index.php"><img class="img-fluid" src="./assets/logo.jpg" alt="" width=""></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
                    <ul class="my-navbar navbar-nav ml-auto text-center">
                        <li class="nav-item p-2 mr-md-4">
                            <a class="nav-link" href="./index.php">&nbsp;&nbsp;Home&nbsp;&nbsp;</a>
                        </li>
                        <li class="nav-item p-2 mr-md-4">
                            <a class="nav-link" href="./careerTourProvider.php">Want to be a Career tour Provider ?</a>
                        </li>
                        <li class="nav-item p-2 mr-md-4">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </div>



    <div class="container position-fixed w-auto float-left" style="z-index: 9999; bottom: 2%;left: 0;">
        <!-- <div class="row">
            <div class="col-auto">
                <h1>Avail this offer</h1>
            </div>
        </div> -->
        <div class="row">
            <div class="col p-0">
                <div class="card shadow" style="border-radius:0px 20px 20px 0px;">
                    <div class="card-header text-center avail-card-header" style="border-radius: 0px 20px 0px 0px;">
                        <a href="" id="avail_this_offer">
                            <h3>Avail this offer</h3>
                        </a>
                    </div>
                    <div class="card-body d-none avail-card">
                        <form action="" id="my-form" method="POST">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" list="names">

                            <datalist id="names">
                            </datalist>

                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control" list="emails">

                            <datalist id="emails">
                            </datalist>

                            <label for="mob_no">Mobile</label><br>
                            <!-- <input type="text" name="mob_no" id="mob_no" class="form-control"> -->
                            <input type="tel" name="mob_no" id="mob_no" class="form-control" value="+61" list="mob_nos">
                            <datalist id="mob_nos">
                            </datalist>
                            <br>

                            <label for="start_date">Start Date</label>
                            <input type="date" name="start_date" id="start_date" class="form-control">

                            <label for="end_date">End Date</label>
                            <input type="date" name="end_date" id="end_date" class="form-control">
                            <br>
                            <center>

                                <input type="submit" value="Submit" class=" btn btn-primary">
                                <button class="btn btn-outline-secondary avail-cancel">Cancel</button>
                            </center>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>