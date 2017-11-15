<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Account Setup | My Live Love</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/forms.css"/>
    <link rel="stylesheet" type="text/css" href="css/logo.css"/>


</head>


<body>

<nav id="topNav" class="navbar static-top navbar-toggleable-sm navbar-inverse bg-inverse">
    <div class="navbar-collapse collapse">
        <!--Hack to center navbar brand relatively-->
    </div>
    <a class="navbar-brand mx-auto font-bold" href="home.php">
        <img src="img/mylivelovewhite.png" class="d-inline-block align-middle" width="50" height="50" alt="">
    </a>
    <button class="navbar-toggler navbar-toggler-right navbar-drawer-expand" type="button" data-toggle="collapse"
            data-target="#mobileLogin">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="windowsLogin" class="navbar-collapse collapse">
        <ul class="nav navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link mylivelove-font" style="color:whitesmoke;" href="company-profile.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mylivelove-font" style="color:#C11D1F;" href="#">Sign up</a>
            </li>
        </ul>
    </div>

    <div id="mobileLogin" class="collapse">
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Signup</a>
            </li>
        </ul>
    </div>
</nav>
<!--Navbar end-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://imagesloaded.desandro.com/imagesloaded.pkgd.min.js"></script>
<script src="https://masonry.desandro.com/masonry.pkgd.min.js"></script>

<script src="js/image-picker.min.js"></script>
<script src="js/registration2.js"></script>
<link href="css/image-picker2.css" rel="stylesheet">

<div class="container">
    <h2 style="text-align:center">Organizations you can join!</h2>

    <form id = "registration2Form" class="form-registration" role="form">

        <select class="image-picker" multiple="multiple">
            <option data-img-src='./img/company/furniture2.png' value='Furniture'>Furniture</option>
            <option data-img-src='./img/company/gateway.jpg' value = 'gateway'>Gateway</option>
            <option data-img-src='./img/company/restart320.png' value='Restart320'>Restart320</option>
        </select>
    </form>

    <div style="text-align: center;">

    <button class="button" type="submit"
                id="finish"><a href = "login.php">Finish Registration!</a>
                
    </button>
    </div>
</div>
<script src="js/registration.js"></script>
</body>
</html>