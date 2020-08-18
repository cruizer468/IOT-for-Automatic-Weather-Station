
<html>
    <head>
    <title>Automatic Weather Station</title>
        <body data-spy="scroll" data-target=".navbar-collapse" onload="startTime()">
        <div class="clock">
            <span id="clock"></span> WIB
        </div>
    <body>
    <meta http-equiv=refresh content=30;url=datat.php>
    <?php
       define('DB_SERVER', "localhost");
       define('DB_USERNAME', "root");
       define('DB_PASSWORD', "");
       define('DB_DATABASE', "webserviceipb");
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
<!-- echo "$jsondata"; -->
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
<!-- Data Tables js -->
  <script src="DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
  <script src="DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="DataTables/JSZip-2.5.0/jszip.min.js"></script>
  <script src="DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
  <script src="DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>

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

            th, td, tr {
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
                border: 3px solid;
                padding: 5px;
                border-spacing: 15px;
                margin: 0 auto;
                border-collapse: collapse;
                width:100%;
                border-color: #fff;
                overflow-x: auto;
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
    <body>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <div class="bgimg w3-display-container w3-text-white">
            <div class="w3-display-topleft w3-padding-jumbo w3-xlarge">
              <h3>AWS Departemen Ilmu Komputer IPB</h3>
              <h5>Automatic Weather Station</h5>
            </div>
            <div class="w3-display-middle w3-padding-jumbo w3-xlarge">
                <button onclick="showFunction(); showScrollFunction()" class="w3-btn w3-hover-light-grey">Show/Hide Data and Grafik</button>
            </div>
            <div id="scrollb" class="w3-display-bottommiddle w3-padding-jumbo w3-xlarge w3-hide">
                <button onclick="getData()" class="w3-btn w3-hover-light-grey fa fa-arrow-down"></button>
            </div>
            <div class="w3-display-bottomleft w3-padding-jumbo">
                <p> Project Tugas Akhir Wahyu Muhammad Nouval J3D117124  </p>
            </div>
            <div class="w3-display-topright w3-padding-jumbo w3-xlarge" style="position: fixed; z-index: 2;">
                <span style="font-size:30px; cursor:pointer" onclick="openNav()">&#9776;</span>
            </div>
        </div>
        <div id="data" class="w3-row w3-center w3-gray w3-padding-jumbo w3-hide">
            <div style="display: block;">
                <div></br> </div>
                <div>
                    <div style="display: inline-block; margin-left: 100px">
                        <h3 style="color: #000">Suhu (C)</h3>
                        <iframe width="500" height="300" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/989621/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                    </div>
                    <div style="display: inline-block; margin-left: 100px">
                        <h3 style="color: #000">Tekanan udara (hpa)</h3>
                        <iframe width="500" height="300" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/989621/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                    </div>
                    <div style="display: inline-block; margin-left: 100px">
                        <h3 style="color: #000">Ketinggian Alat (mpl)</h3>
                        <iframe width="500" height="300" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/989621/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                    </div>
                    <div style="display: inline-block; margin-left: 100px">
                        <h3 style="color: #000">Cahaya(lux)</h3>
                        <iframe width="500" height="300" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/989621/charts/4?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                    </div>
                    <div style="display: inline-block; margin-left: 100px">
                        <h3 style="color: #000">Kualitas udara (ppm)</h3>
                        <iframe width="500" height="300" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/989621/charts/5?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                    </div>
                    <div style="display: inline-block; margin-left: 100px">
                        <h3 style="color: #000">Kelembapan(%)</h3>
                        <iframe width="500" height="300" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/989621/charts/6?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                    </div>
                </div>
              <!--  <h1>Data Table Automatic Weather Station</h1>
                <?php
                    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                    
                    $sql2="SELECT * FROM awsdata";
                    $result2=mysqli_query($db, $sql2);
                    $i=1;
                    while($row=mysqli_fetch_assoc($result2))
                    {
                        $te6[$i] = $row['datake'];
                        $te1[$i] = $row['suhu'];
                        $te2[$i] = $row['tekananUdara'];
                        $tedif[$i] = $row['ketinggianAlat'];
                        $te3[$i] = $row['cahaya'];
                        $te4[$i] = $row['kualitasUdara'];
                        $te5[$i] = $row['kelembapan'];
                        
                        $i++;
                    }  
                    //Start table
                    echo "<table>";
                    echo "<tr><th><b>Data Ke</b></th><th><b>Suhu (Celcius)</b></th><th><b>Tekanan Udara(hpa)</b></th><th><b>Ketinggian Alat (mpl)</b></th><th><b>Cahaya (Lux)</b></th><th><b>Kualitas Udara (ppm)</b></th><th><b>Kelembapan (%)</b></th></tr>";

                    // Loop through the results from the database
                    for ($i = 1; $i <=count($te6); $i++) 
                    {
                    // Show entries
                        echo    
                            "<tr>
                            <td>$te6[$i]</td>
                            <td>$te1[$i]</td>
                            <td>$te2[$i]</td>
                            <td>$tedif[$i]</td>
                            <td>$te3[$i]</td>
                            <td>$te4[$i]</td>
                            <td>$te5[$i]</td>
                            </tr>";

                    }

                    echo "</table>";
                    mysqli_close($db);
                ?>
            </div>
        </div> -->
                <!-- coba data tables -->
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
    <table border="1" cellspacing="0">
      <tbody>
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
      <thead>
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

        <div id="myNav" class="overlay w3-display-topright" style="z-index: 3;">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <div class="overlay-content w3-display-middle">
            <a href="./index" onclick="closeNav()">Logout</a>
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
        <script>
            function showFunction() {
                var x = document.getElementById("data");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }
            function showScrollFunction() {
                var x = document.getElementById("scrollb");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }
            function getData() {
                location.href = "#data";
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


        
	</body>
</html>