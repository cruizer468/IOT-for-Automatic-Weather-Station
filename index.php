<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Automatic Weather Station Departemen Ilmu Komputer IPB</title>
    	<!-- Layout -->
<!-- <script src="./js/jquery.min.js" charset="utf-8"></script>
<script src="./js/jquery-3.1.1.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery-1.11.2.min.js"></script>

 <!--get js -->
<script src="./js/get.js"></script>
<!-- CSS -->
<!-- <link href="./css/bootstrap.min.css" rel="stylesheet" > -->
<link rel="stylesheet" href="./css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<!-- End of CSS -->

<!-- Meta tag -->
<meta http-equiv=refresh content=30;url=index.php>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- End of Meta tag -->

<!-- Gambar tab browser -->
<link rel="shortcut icon" href="./img/cloud.png"/>
<!-- End of Gambar tab browser -->
        <!-- Data Tables js -->
  <script src="DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
  <script src="DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="DataTables/JSZip-2.5.0/jszip.min.js"></script>
  <script src="DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
  <script src="DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>

<!-- Bootstrap CSS -->
<link href="./css/bootstrap.min.css" rel="stylesheet" >
<link href="./css/bootstrap.css" rel="stylesheet" >
<!-- <link href="./css/bootstrap-theme.css" rel="stylesheet"> -->
<link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- <link href="./css/stylelogin.css" rel="stylesheet"> -->
        <style>
            body,h1,h2,h3,h4,h5,h6 {
                font-family: "Lato", sans-serif;
            }
            body, html {
                height: 100%;
                color: #777;
                line-height: 1.8;
            }

            th, td, tr {
                position: center;
                border: 1px solid;
                padding: 5px;
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
                background-color: #c0c0c0;
                color: #000;
            }
            tr:nth-child(even) {
                background-color: #aeaeae;
                color: #fff;
            }
            table {
                position: center;
                border: 3px solid;
                padding: 5px;
                border-spacing: 15px;
                margin: 0 auto;
                border-collapse: collapse;
                width:100%;
                border-color: #fff;
                overflow-x: auto;
            }

            .bgimg-1, .bgimg-2, .bgimg-3 {
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .bgimg-1 {
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <div class="bgimg-1 w3-display-container w3-text-white" id="home">
            <div class="w3-display-middle w3-jumbo w3-padding-jumbo">
              <!--  <img src="./img/logoefishery.png"> -->
            </div>
            <div class="w3-display-topleft w3-padding-jumbo w3-xlarge">
                <h3><b>AWS Departemen Ilmu Komputer IPB</b></h3>
                <h5><b>Automatic Weather Station</b></h5>
            </div>
            <div class="w3-display-topright w3-padding-jumbo w3-xlarge" style="position: fixed; z-index: 2;">
                <p style="display: inline-block;">Monitoring</p>
                <p class="fa fa-arrow-right"></p>
                <span style="font-size:30px;cursor:pointer; color: #cc8400;" onclick="openNav()">&#9776;</span>
            </div>
            <div class="w3-display-bottomleft w3-padding-jumbo">
                <p> Project Tugas Akhir Wahyu Muhammad Nouval J3D117124 </p>
                <p> Gambar ini di ambil dari <a href"https://id.pinterest.com/">Pinterest</a> </p>
            </div>
        </div>

        <div id="myNav" class="overlay w3-display-topright" style="z-index: 3">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="overlay-content w3-display-middle">
                <a href="javascript:void(0)" onclick="closeNav()">Home</a>
                <a href="#data">Monitoring</a>
                <a href="#about" onclick="closeNav()">Our Product</a>
                <a href="#contact" onclick="closeNav()">About Us</a>
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

        <div class="w3-row w3-center w3-black w3-padding-16" id="data">
            <h2 class="w3-center">Data Sensor</h2>
            <!-- get js -->

            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">
                    <img src="./img/thermometer.png" width="128px" height="128px" style="margin-bottom:10px;">
                </span><br>
                <h4 id="suhu">SUHU</h4>
            </div> 
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">
                    <img src="./img/pressure.png" width="128px" height="128px" style="margin-bottom:10px;">
                </span><br>
                <h4 id="pressure">Tekanan Udara</h4>
            </div> 
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">
                    <img src="./img/height.png" width="128px" height="128px" style="margin-bottom:10px;">
                </span><br>
                <h4 id="height">Ketinggian Alat</h4>
            </div> 
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">
                    <img src="./img/sun.png" width="128px" height="128px" style="margin-bottom:10px;">
                </span><br>
                <h4 id="sun">Cahaya</h4>
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">
                    <img src="./img/smoke.png" width="128px" height="128px" style="margin-bottom:10px;">
                </span><br>
                <h4 id="smoke">Kualitas Udara</h4>
            </div> 
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">
                    <img src="./img/raindrop.png" width="128px" height="128px" style="margin-bottom:10px;">
                </span><br>
                <h4 id="raindrop">Kelembapan</h4>
            </div> 

            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">
                    <img id="image" width="128px" height="128px" style="margin-bottom:10px;">
                </span><br>
                <h4 id="rainsdrops">Kondisi Cuaca</h4>
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">
                    <img id="imageair" width="128px" height="128px" style="margin-bottom:10px;">
                </span><br>
                <h4 id="airkualiti"></h4>
            </div>   
            
<!-- php insert -->
             <?php
       define('DB_SERVER', "localhost");
       define('DB_USERNAME', "monitor3_wahyu");
       define('DB_PASSWORD', "Vtd;yx2z=G@K");
       define('DB_DATABASE', "monitor3_webserviceipb");
       $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
         date_default_timezone_set("Asia/Bangkok");

        //read the json file contents
        $jsondata = file_get_contents('https://api.thingspeak.com/channels/989621/feeds/last.json');

        //convert json object to php associative array
        $data = json_decode($jsondata, true);

        //get the employee details
        $suhu = $data['field1'];
        $tekananUdara = $data['field2'];
        $ketinggianAlat = $data['field3'];
        $cahaya = $data['field4'];
        $kualitasUdara = $data['field5'];
        $kelembapan = $data['field6'];
        $entriData = $data['entry_id'];
       // $ketinggianAlat = $data['field3'];

        //insert into mysql table
        $sql = "INSERT INTO `awsdata`(`datake`, `suhu`, `tekananUdara`, `ketinggianAlat`, `cahaya`, `kualitasUdara`, `kelembapan`) VALUES ('$entriData','$suhu','$tekananUdara','$ketinggianAlat','$cahaya','$kualitasUdara','$kelembapan')";
        if (mysqli_query($db, $sql)) {
        } else {
            echo "";
        }

        mysqli_close($db);
    ?>
<!--     php end -->
<!-- grafik -->
                <h2 class="w3-center">Grafik</h2>
             <div class="w3-quarter w3-section" style="display: inline-block; margin-right: 100px">
                        <h3 style="color: #FFF">Suhu (C)</h3>
                        <iframe width="500" height="400" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/989621/charts/1?bgcolor=%23ffffff&color=%23d62020&&dynamic=true&results=60&title=&type=spline&width=500&height=400"></iframe>
                    </div>
                    <div class="w3-quarter w3-section"  style="display: inline-block; margin-left: 300px">
                        <h3 style="color: #FFF">Tekanan udara (hpa)</h3>
                        <iframe width="500" height="400" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/989621/charts/2?bgcolor=%23ffffff&color=%23d62020&&dynamic=true&results=60&title=&type=spline&width=500&height=400"></iframe>
                    </div>
                    <div div class="w3-quarter w3-section" style="display: inline-block; margin-right: 100px">
                        <h3 style="color: #FFF">Ketinggian Alat (m)</h3>
                        <iframe width="500" height="400" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/989621/charts/3?bgcolor=%23ffffff&color=%23d62020&&dynamic=true&results=60&title=&type=spline&width=500&height=400"></iframe>
                    </div>
                    <div div class="w3-quarter w3-section" style="display: inline-block; margin-left: 300px">
                        <h3 style="color: #FFF">Cahaya(lux)</h3>
                        <iframe width="500" height="400" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/989621/charts/4?bgcolor=%23ffffff&color=%23d62020&&dynamic=true&results=60&title=&type=spline&width=500&height=400"></iframe>
                    </div>
                    <div div class="w3-quarter w3-section" style="display: inline-block; margin-right: 100px">
                        <h3 style="color: #FFF">Kualitas udara (ppm)</h3>
                        <iframe width="500" height="400" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/989621/charts/5?bgcolor=%23ffffff&color=%23d62020&&dynamic=true&results=60&title=&type=spline&width=500&height=400"></iframe>
                    </div>
                    <div div class="w3-quarter w3-section" style="display: inline-block; margin-left: 300px">
                        <h3 style="color: #FFF">Kelembapan(Rh)</h3>
                        <iframe width="500" height="400" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/989621/charts/6?bgcolor=%23ffffff&color=%23d62020&&dynamic=true&results=60&title=&type=spline&width=500&height=400"></iframe>
                    </div>

        </div>
        <!-- grafik end -->
        <!-- data table -->
        <h2 class="w3-center" style="color: #000">Data Table</h2>
        <script>
    $('document').ready(function(){
      $('table').DataTable({
        searching: true,
        ordering: true,
        paging: true,
        info: true,
        dom : 'Blftip',
      });
    });
  </script>
  <body>
    <table class="w3-center" border="1" cellspacing="0">
      <tbody class="w3-center">
        <?php
$koneksi = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
        $q = "SELECT * FROM awsdata"; //Ganti sesuai nama tabel
        $p = mysqli_query($koneksi, $q);

        $no = 1;
        while ($r = mysqli_fetch_assoc($p)) {
          echo 
            '<tr>
              <td>'.$r['datake'].'</td>
              <td>'.$r['waktu'].'</td>
              <td>'.$r['suhu'].'</td>
              <td>'.$r['tekananUdara'].'</td>
              <td>'.$r['ketinggianAlat'].'</td>
              <td>'.$r['cahaya'].'</td>
              <td>'.$r['kualitasUdara'].'</td>
              <td>'.$r['kelembapan'].'</td>
            </tr>'; 
          }
        ?>
      </tbody>
      <thead class="w3-center">
        <tr>
          <th>Data ke</th>
          <th>Waktu</th>
          <th>Suhu(oC)</th>
          <th>Tekanan Udara(hpa)</th>
          <th>Ketinggian alat(mpl)</th>
          <th>Cahaya(lux)</th>
          <th>Kualitas udara(ppm)</th>
          <th>Kelembapan(%)</th>
        </tr>
      </thead>
    </table>
            <center>
            <a style="background-color: #00a1ff; color: white; padding:10px 0px;width: 200px; text-align: center; text-decoration: none; display: inline-block;" href="downloadXlsx.php">Download File Excel</a></center>
</body>
<!-- data table end -->


        <!-- Second Parallax -->
        <div class="w3-display-container">
            <div class="bgimg-2" style="-webkit-filter: brightness(20%);filter: brightness(20%);"></div>
            <div class="w3-display-middle">
                <span class="w3-xxlarge w3-text-white w3-wide">OUR PRODUCT</span>
            </div>
        </div>
        
        <!-- Container (About Section) -->
        <div class="w3-content w3-container w3-padding-64" id="about">
          <h2 class="w3-center">About Product</h2>
          <div class="w3-row">
            <div class="w3-col m6 w3-center w3-padding-large">
              <img src="./img/alat.jpeg" class="w3-round w3-image w3-hover-opacity" width="200" height="100%">
            </div>

            <!-- Hide this text on small devices -->
            <div class="w3-col m6 w3-hide-small w3-padding-large" style="text-align: justify; text-justify: inter-word;">
              <p>Automatic Weather Station adalah alat pengukur cuaca otomatis dan pengembangan dari stasiun cuaca versi tradisional yang berfungsi untuk menghemat tenaga kerja manusia atau memungkinkan pengukuran di daerah-daerah terpencil. Automatic Weather Station biasanya terdiri dari data logger, baterai isi ulang, telemetri (opsional) dan sensor meteorologi (sensor angin dan cahaya) dengan panel surya yang terpasang di kerangka yang kokoh. Setiap alat-alat tersebut mempunyai ketahanan terhadap kondisi ekstrim seperti badai atau kemarau berkepanjangan.
              [https://www.loggerindo.com/bagian-bagian-automatic-weather-station-118]</p>
            </div>
          </div>
        </div>

        <div class="w3-row w3-center w3-dark-grey w3-padding-16">
            <h2 class="w3-center">Features</h2>
           <div class="w3-quarter w3-section">
                <span class="w3-xlarge">
                    <img src="./img/tempe.png" width="128px" height="128px" style="margin-bottom:10px;">
                </span><br>
                <h4>AWS</h4>
            </div> 
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">
                    <img src="./img/ana.png" width="128px" height="128px" style="margin-bottom:10px;">
                </span><br>
                <h4>Analytics</h4>
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">
                    <img src="./img/datab.png" width="128px" height="128px" style="margin-bottom:10px;">
                </span><br>
                <h4>Database Stored</h4>
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">
                    <img src="./img/clou.png" width="128px" height="128px" style="margin-bottom:10px;">
                </span><br>
                <h4>Cloud Computing Based</h4>
            </div>
        </div>

        <!-- Second Parallax -->
        <div class="w3-display-container">
            <div class="bgimg-3" style="-webkit-filter: brightness(20%);filter: brightness(20%);"></div>
            <div class="w3-display-middle">
                <span class="w3-xxlarge w3-text-white w3-wide">ABOUT US</span>
            </div>
        </div>

        <!-- Container (Contact Section) -->
        <div class="w3-content w3-container w3-padding-64" id="contact">
          <h2 class="w3-center"></h2>
          <div class="row text-center" style="margin-top:50px">
            <div class="w3-quarter w3-section">
                 <img class="w3-circle" height="200px" style="width:100px;" src="./img/Team/Arioni.jpeg">
                <h4 class="service-heading">Muhammad Arioni Putra Perkasa</h4>
                <h4 class="service-heading">G64160064</h4> 
            </div>
            
            <div class="w3-quarter w3-section">
                 <img class="w3-circle" height="200px" style="width:100px;" src="./img/Team/hafiz.jpeg">
                <h4 class="service-heading">Andi Muhammad Chaerul Hafidz</h4>
                <h4 class="service-heading">G64160082</h4> 
            </div>
            <div class="w3-quarter w3-section">
                 <img class="w3-circle" height="200px" style="width:100px;" src="./img/Team/fadil.jpeg">
                <h4 class="service-heading">Muhammad Fadhil Al-Haaq Ginoga</h4>
                <h4 class="service-heading">G64160114</h4> 
            </div>
            <div class="w3-quarter w3-section">
                <img class="w3-circle" height="200px" style="width:100px;" src="./img/Team/Wahyu.jpg">
                <h4 class="service-heading">Wahyu Muhammad Nouval</h4>
                <h4 class="service-heading">J3D117124</h4>
            </div> 
        </div>

          <div class="w3-row w3-padding-32 w3-section">
            <div class="w3-col m4 w3-container">
              <!-- Add Google Maps -->
              <div id="map" class="w3-round-large">
                <script>
                    function initMap() {
                        var myLatLng = {lat: -6.558149, lng: 106.731123};
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: new google.maps.LatLng(-6.558149, 106.731123),
                            zoom: 17,
                            mapTypeControl: true,
                            styles: [
                                {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                                {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                                {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                                {
                                  featureType: 'administrative.locality',
                                  elementType: 'labels.text.fill',
                                  stylers: [{color: '#d59563'}]
                                },
                                {
                                  featureType: 'poi',
                                  elementType: 'labels.text.fill',
                                  stylers: [{color: '#d59563'}]
                                },
                                {
                                  featureType: 'poi.park',
                                  elementType: 'geometry',
                                  stylers: [{color: '#263c3f'}]
                                },
                                {
                                  featureType: 'poi.park',
                                  elementType: 'labels.text.fill',
                                  stylers: [{color: '#6b9a76'}]
                                },
                                {
                                  featureType: 'road',
                                  elementType: 'geometry',
                                  stylers: [{color: '#38414e'}]
                                },
                                {
                                  featureType: 'road',
                                  elementType: 'geometry.stroke',
                                  stylers: [{color: '#212a37'}]
                                },
                                {
                                  featureType: 'road',
                                  elementType: 'labels.text.fill',
                                  stylers: [{color: '#9ca5b3'}]
                                },
                                {
                                  featureType: 'road.highway',
                                  elementType: 'geometry',
                                  stylers: [{color: '#746855'}]
                                },
                                {
                                  featureType: 'road.highway',
                                  elementType: 'geometry.stroke',
                                  stylers: [{color: '#1f2835'}]
                                },
                                {
                                  featureType: 'road.highway',
                                  elementType: 'labels.text.fill',
                                  stylers: [{color: '#f3d19c'}]
                                },
                                {
                                  featureType: 'transit',
                                  elementType: 'geometry',
                                  stylers: [{color: '#2f3948'}]
                                },
                                {
                                  featureType: 'transit.station',
                                  elementType: 'labels.text.fill',
                                  stylers: [{color: '#d59563'}]
                                },
                                {
                                  featureType: 'water',
                                  elementType: 'geometry',
                                  stylers: [{color: '#17263c'}]
                                },
                                {
                                  featureType: 'water',
                                  elementType: 'labels.text.fill',
                                  stylers: [{color: '#515c6d'}]
                                },
                                {
                                  featureType: 'water',
                                  elementType: 'labels.text.stroke',
                                  stylers: [{color: '#17263c'}]
                                }
                            ]
                        });
                        var marker = new google.maps.Marker({
                            position: myLatLng,
                            map: map,
                        });
                    }
                </script>
                <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVcdqZ6XHMJmwsTvtviHP7EkysFBJFvoQ&callback=initMap">
                </script>

        <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2qQzprSbNBaE4hsZbZudfMDAR6dMvlDk&callback=initMap">
        </script> -->
              </div>
            </div>
            <div class="w3-col m8 w3-panel">
                <div class="w3-large w3-margin-bottom">
                    <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Departemen Ilmu Komputer Jl Meranti Wing 20 Level 5 Kampus IPB Darmaga 16680 <br>
                    <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> 0251-8625584<br>
                    <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> ilkom@apps.ipb.ac.id<br>
                </div>
                <p>Invite us for a cup of <i class="fa fa-coffee"></i>, or leave us a feedback:</p>
                <form action="#" target="_blank">
                    <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
                        </div>
                        <div class="w3-half">
                            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                        </div>
                    </div>
                    <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                    <button class="w3-btn w3-teal w3-right w3-section" type="submit">
                        <i class="fa fa-paper-plane"></i> SEND MESSAGE
                    </button>
                </form>
            </div>
          </div>
        </div>
         <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- FOOTER -->
<footer>
<div class="footer border-top-0 footer-1">
	<div class="container">
		<div class="row align-items-center">
			<div class="social">
<!--				<ul class="text-center">-->
<!--					<li>-->
<!--						<a class="social-icon" href="https://web.facebook.com/wahyu.smasher" target="_blank"><i class="fa fa-facebook"></i></a>-->
<!--					</li>-->
<!--					<li>-->
<!--					<a class="social-icon" href="https://www.instagram.com/wahyumnou/" target="_blank"><i class="fa fa-instagram"></i></a>-->
<!--					</li>-->
<!--					</ul>-->
<!--					</div>-->
<div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
<!--	<br><a href="https://getbootstrap.com/"><img src="./img/bootstrap.png" alt="Bootstrap" width="172" height="45"></a><br><br>-->
	Powered by <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a>. Made with <i class="fa fa-heart"></i> by <a href="https://web.facebook.com/wahyu.smasher" target="_blank">Wahyu Muhammad Nouval</a>
</div>
	</div>
		</div>
			</div>
			</div>
			</div><!-- COL-END -->
		</div>
</footer>
<!-- FOOTER END -->

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


	</body>
</html>