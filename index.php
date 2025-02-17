<?php
session_start();
if (isset($_SESSION['user'])) {
  header("location: home.php");
}
?>
<!DOCTYPE html>
<html class="no-js">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>HephBudget</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
<nav class="navbar navbar-expand-lg hephnav">
        <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <p class="h3 font-weight-bold text-info m-0" id="heph">HephBudget</p>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdownMenuLink"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="index.html">About Us</a>
                        <a class="dropdown-item" href="#">FAQ</a>

                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold contact" href="contact.html">Contact</a>
                </li>
            </ul>
            <div>
                <a href="login.php" class="btn btn-sm btn-info">Login</a>
                <a href="signup.php" class="btn btn-sm btn-info">Sign up</a>
            </div>
        </div>
    </nav>
  <div id="intro" class="px-3 py-3">
    <div class="container cl">
      <div class="text-center">
        <img src="assets/images/budgetApp.png" alt="finance illustration" id="heph_img" />
        <p class="h5 text-light heph-small">Create budgets with ease.</p>
      </div>
    </div>
  </div>
  <div>
    <p class="h3 text-center my-4">
      FEATURES
    </p>
    <div class="features-row">
      <div class="inner-feature">
        <img src="assets/images/calc.png" />
        <p class="color">
         <a href="https://hephbudget.herokuapp.com/home.php" target="_blank"> Easily create budgets based on priorities set on each item.</a>
        </p>
      </div>
      <div class="inner-feature">
        <img src="assets/images/mobile.png" />
        <p class="color"><a href="https://medium.com/@faitygal/hephas-budget-tracker-easy-access-on-multiple-devices-e81595913156"target="_blank"> Easy access on multiple devices</a></p>
      </div>
    </div>
  </div>
  <section id="hephbot" class="bg-dark text-center text-light pt-3 pb-0">
    <p class="m-0 h4">Download HephBudget ChatBot for android</p>
    <a style="cursor:pointer" href="https://github.com/hngi/Hephaestus-Chatbot/blob/updatedbot/app/build/outputs/apk/debug/app-debug.apk"> <img src="assets/images/playstore.png" height="70" /> </a>
  </section>

  <p class="m-0 mt-5 font-weight-bold text-center" style="color: #298b92;"> &copy; HephBudget 2019.</p>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
