<?php 
session_start();
?>


<!doctype html>
<html lang="en">

<head>
  <title>SAIRAM CODE CLUB</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">



  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron&family=Pacifico&display=swap" rel="stylesheet">


  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/8ce335f9b0.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  <link rel="stylesheet" href="css/animate.css" class="css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="css/parallax.js"></script>
  <script src="https://kit.fontawesome.com/8ce335f9b0.js" crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Pacifico&display=swap" rel="stylesheet">

  <style>
    body {
      font-family:  sans-serif;
    }
    .carousel-inner{
    position: relative;
    left: 81px;
    width: 88%;
   
    display: flex;
    align-items: center;
    overflow: hidden;
    }

    body h2 {
      font-family:  sans-serif;

    }

    .move {
      margin-top: 71px;
    }

    .cp {
      text-align: center;
      margin-top: 40px;
      margin-bottom: 40px;
    }

    .cp img {
      margin-bottom: 10px;
    }

    .cp h1 {
      margin-bottom: 15px;
    }

    .cp p {
      margin-left: 25px;
      margin-right: 25px;
    }

    .parallax {
      height: 500px;



    }

    .parallax-window {
      min-height: 400px;
      background: transparent;
      text-align: center;
      padding: 200px;
      color: white;
      padding: 160px;

    }

    .content {
      text-align: center;
      margin: 25px;
      padding: 50px;

    }

    .content h1 {
      margin-top: 50px;
    }

    footer {
      display: flex;
      justify-content: center;
      height: 70px;
      background-color: #343a40;
      padding: 20px 50px;
    }

    .sel {
      color: white;
      font-weight: bold;
      font-family: 'Dela Gothic One', cursive;
      font-size: 1.3rem;
    }
    .classess{
      position: relative;
      top:-3vh;
    }

    .right {
      float: right;
      color: white;
    }
    .row{
      display: flex;
      align-items: center;
      margin-right: -18px;
      margin-left: 22px;
      margin-top: -29px;
    }

    @media(max-width:768px) {
      .parallax-window {
        padding: 60px;
      }

      .parallax-window h1 {
        font-size: 20px;
        margin-top: 25%;

      }
    }

    .red {
      color: rgb(24, 94, 10);
      font-family: 'sans-serif', cursive;
    }

    .button {
      border-radius: 50px;
      
    }

    .font {

      font-family: 'Dela Gothic One', cursive;
      
    }
    .carousel-control-next{
      background-color: darkgray;
      color: black;
      width:6%;
      
      height: 100%;
    }
    .carousel-control-prev{
      background-color: darkgray;
      color: black;
      width:6%;
      
      height: 100%;
    }
    
    .register-form-btn{
      border-radius: 25px;
      background-color: rgb(56, 114, 249);
      color: white;
      padding-left: 15px;
      padding-right: 15px;
      border: none;
    }
    .sub-menu-1{
      display:none;
    }
    .navbar-text ul li:hover .sub-menu-1{
      display:block;
      position:absolute;
      background-color:#343a40;
      text-align:center;
    }
    .navbar-text ul li:hover .sub-menu-1 ul{
      display:block;
      list-style: none;
      padding:0px;
      width:150px;
    }
    .navbar-text ul li:hover .sub-menu-1 ul li{
      display:block;
      list-style: none;
      text-align:center;
      
    }



    
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">


    <a class="navbar-brand" href="#">
      <h2 class="font">SAIRAM CODE CLUB</h2>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#"><i class="fas fa-home"> Home</i> <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="about us.html"><i class="fas fa-user"> About Us </i> </a>
        </li>
        <li>
          <?php if(isset($_SESSION['username'])) { ?>
            <a class="nav-link" href="logout.php"><i class="fas fa-lock"> Logout </i> </a>
      <?php } ?>
          </li>
        

      </ul>


      <span class="navbar-text">
        <ul class="navbar-nav navbar-right">
         

          <li class="nav-item ">
            <a class="nav-link" href="courses.html"><i class="far fa-books"> COURSES </i> </a>
          </li>
          <?php if(isset($_SESSION['username']) == false) { ?>
          <li class="nav-item" id="sign">
            <a class="nav-link" href="#"><i class="fas fa-registeration"> Sign up/sign in </i> </a>
            <div class="sub-menu-1">
             <ul class="drop">
              <li>
            <a class="nav-link" href="signin-up.php"><i class="fas fa-user"> Member </i> </a></li>
            <li>
            <a class="nav-link" href="signin-up-admin.php"><i class="fas fa-user"> Admin </i> </a></li>
            </ul>
            </div>
          </li>
          <?php } ?>
          
        </ul>

      </span>

    </div>
  </nav>
  <!--end of nav bar-->


  <div id="carouselExampleControls" class="carousel slide move" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/understanding-3914811.jpg"alt="First slide" width="800" height="400">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/artificial-intelligence-3382509_1920.png" alt="Second slide" width="800" height="400">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/woman-3597101_1920.jpg" alt="Third slide" width="1200" width="800" height="400">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/artificial-intelligence-3706562.jpg" alt="Fourth slide" width="800" height="400">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
  <!--end of slides-->



  <div class="container cp">
    <div class="row">
      <div class="col-lg-4">


        <img src="images/cranium-2099120.svg" alt="#" width="140" height="140"
          class="rounded-circle animate__animated animate__bounce animate__delay-2s">
        <h1> AI </h1>

      </div>
      <div class="col-lg-4">

        <img src="images/circuits-5076887.svg" alt="#" width="140" height="140"
          class="rounded-circle animate__animated animate__bounce animate__delay-2s">
        <h1>DEEP LEARNING</h1>

      </div>
      <div class="col-lg-4">
        <img src="images/arduino-5170681_1920.jpg" alt="#" width="140" height="140"
          class="rounded-circle animate__animated animate__bounce animate__delay-2s ">
        <h1> IOT </h1>

      </div>

    </div>
  </div>



  <div class="parallax-window" data-parallax="scroll" data-image-src= "images/laptop-2557586.jpg">
    <h1>
    <font style="font-family:sans-serif;"> <b>Hours  To  Go !!!</b> </font>
    </h1>
    <a href="apo.html" class="btn btn-primary button">
      <font style="font-family:sans-serif;">Register Now</font>
    </a>

  </div>
  <!--parallex ends-->
  <div class="container content">
  
      <div class="row">
      <div class="col-lg-7">
        <h1>
          <p> *</p>
        </h1>
        <a href="form.html"><button class="register-form-btn">Register</button></a>
      </div>
      <div class="col-lg-5">
        <img src="images/z17.jpeg" alt="" height="200px" width="200px"
          class="rounded-circle animate__animated animate__bounce animate__delay-2s">

      </div>
      </div>
  </div>
  <!--comment 1 ends-->
  <hr>
  <div class="container content">
    <div class="row">
      <div class="col-lg-5">
        <img src="images/z16.jpeg" alt="" height="200px" width="200px"
          class="rounded-circle animate__animated animate__bounce animate__delay-2s">
      </div>
      <div class="col-lg-7">
        <h1>
          <p>*</p>
        </h1>
        <button class="register-form-btn">Register</button>


      </div>
    </div>
  </div>
  <!--comment 2 ends-->
  <div class="container content">
  
    <div class="row">
    <div class="col-lg-7">
      <h1>
        <p> *</p>
      </h1>
      <button class="register-form-btn">Register</button>
    </div>
    <div class="col-lg-5">
      <img src="images/z15.jpeg" alt="" height="200px" width="200px"
        class="rounded-circle animate__animated animate__bounce animate__delay-2s">

    </div>
    </div>
</div>
<!--comment 3 ends-->
<hr>
<div class="container content">
  <div class="row">
    <div class="col-lg-5">
      <img src="images/z14.jpeg" alt="" height="200px" width="200px"
        class="rounded-circle animate__animated animate__bounce animate__delay-2s">
    </div>
    <div class="col-lg-7">
      <h1>
        <p>*</p>
      </h1>
      <button class="register-form-btn">Register</button>


    </div>
  </div>
</div>
<!--comment 4 ends-->
<div class="classess">
<center><a href="apo.html" class="btn btn-primary button">
  <center><font style="font-family:sans-serif;">UPCOMING EVENTS</font></center>
</a></center>
</div>

  <footer>
   <center> <p class="sel"><i class="fa fa-copyright" aria-hidden="true">SAIRAM CODE CLUB </i></i></p></center>
  </footer>
  </div>
  </nav>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>