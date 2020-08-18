<?php
include("config.php");
   session_start();
   $error = "";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,@$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,@$_POST['password']); 
      
      $sql = "SELECT * FROM member WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
         // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         session_start();
         if (isset($_POST['password']) && isset($_POST['username'])) {
            if($_POST['password']==$mypassword && $_POST['username']==$myusername) {
               header("location: datat.php");
               $_SESSION['isLogged'] = true;
            }
         }
      }  else {
         $error = "Your Username or Password is invalid, please try again.";
      }
   }

   mysqli_close($db);
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>
 <!-- Layout -->
<script src="./js/jquery.min.js" charset="utf-8"></script>
<script src="./js/jquery-3.1.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="./js/bootstrap.min.js"></script>

<!-- CSS -->
<!-- <link href="./css/bootstrap.min.css" rel="stylesheet" > -->
<link rel="stylesheet" href="./css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<!-- End of CSS -->

<!-- Meta tag -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- End of Meta tag -->

<!-- Gambar tab browser -->
<link rel="shortcut icon" href="./img/cloud.png"/>
<!-- End of Gambar tab browser -->

<!-- Bootstrap CSS -->
<link href="./css/bootstrap.min.css" rel="stylesheet" >
<link href="./css/bootstrap.css" rel="stylesheet" >
<link href="./css/bootstrap-theme.css" rel="stylesheet">
<link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="./css/stylelogin.css" rel="stylesheet">
    <style>
            body,h1,h2,h3,h4,h5,h6 {
                font-family: "Lato", sans-serif;
            }
            body, html {
                height: 100%;
                color: #777;
                line-height: 1.8;
            }

            .bgimg, .bgimg-2, .bgimg-3 {
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .bgimg {
                background-image: url("./img/awsimg.jpg");
                min-height: 100%;
            }

            /* Second image (Portfolio) */
            .bgimg-2 {
                background-image: url("./img/arduino.jpg");
                min-height: 400px;
            }

            .bgimg-3 {
                background-image: url("./img/ipb.png");
                min-height: 400px;
            }

            .w3-wide {
                letter-spacing: 10px;
            }
            
            .w3-hover-opacity {
                cursor: pointer;
            }

            #map {
                width: 100%;
                height: 400px;
                background-color: grey;
            }

            @media only screen and (max-device-width: 1024px) {
                .bgimg-1, .bgimg-2 {
                    background-attachment: scroll;
                }
            }

            .overlay {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: rgb(0,0,0);
                background-color: rgba(0,0,0, 0.9);
                overflow-x: hidden;
                transition: 0.2s;
            }

            .overlay-content {
                position: relative;
                top: 25%;
                width: 100%;
                text-align: center;
                margin-top: 30px;
            }

            .overlay a {
                padding: 8px;
                text-decoration: none;
                font-size: 36px;
                color: #818181;
                display: block;
                transition: 0.3s;
            }

            .overlay a:hover, .overlay a:focus {
                color: #f1f1f1;
            }

            .overlay .closebtn {
                position: absolute;
                top: 20px;
                right: 45px;
                font-size: 60px;
            }

            @media screen and (max-height: 450px) {
              .overlay a {font-size: 20px}
              .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
              }
            }
        </style>
</head>
 <body data-spy="scroll" data-target=".navbar-collapse" onload="startTime()">
        <div class="clock">
            <span id="clock"></span> WIB
        </div>
<body>
  <!-- Javascript Login Form -->
  <script src="./js/login.js"></script>
  <div class="bgimg w3-display-container w3-text-white">
    <div class="w3-display-topmiddle w3-jumbo w3-padding-jumbo">
     <!-- <a href="./index"><img src="./img/logoefishery.png"></a> -->
    </div>
    <div class="w3-display-topleft w3-padding-jumbo w3-xlarge">
      <h3>AWS Departemen Ilmu Komputer IPB</h3>
      <h5>Automatic Weather Station</h5>
    </div>
    <div class="w3-display-middle">
      <h4 style="color:#fff">Insert your username and password</h4>
      <form action=" " method="POST">
        <div class="w3-row-padding" style="margin:0 -16px 0px -16px">
          <label>Username</label>
          <input class="w3-input w3-border" type="text" placeholder="username" name="username">
          <label>Password</label>
          <input class="w3-input w3-border" type="password" placeholder="Password" name="password">
        </div>
          <!--<span class="copyright">Register <a href="signup.php">here</a></span> -->
          <button id='login-button' class="w3-btn w3-teal w3-right w3-section w3-hover-black" value='Login' type="submit">Login</button>
      </form>
    </div>

    <div class="w3-display-topright w3-padding-jumbo w3-xlarge">
      <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    </div>

    <div class="w3-display-bottomleft w3-padding-jumbo">
        <p> Project Tugas Akhir Wahyu Muhammad Nouval J3D117124  </p>
    </div>

    <div id="myNav" class="overlay w3-display-topright">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content">
        <a href="./index" onclick="closeNav()">Home</a>
      </div>
    </div>
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
            <script type="text/javascript">
            function startTime() {
              var today = new Date();
              var h = today.getHours();
              var m = today.getMinutes();
              var s = today.getSeconds();
              m = checkTime(m);
              s = checkTime(s);
              document.getElementById('clock').innerHTML =
              h + ":" + m + ":" + s;
              var t = setTimeout(startTime, 500);
            }
            function checkTime(i) {
              if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
              return i;
            }

        </script>
  </div>
</body>
</html>
