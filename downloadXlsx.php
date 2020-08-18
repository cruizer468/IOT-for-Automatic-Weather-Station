<?php
  session_start();
       define('DB_SERVER', "localhost");
       define('DB_USERNAME', "monitor3_wahyu");
       define('DB_PASSWORD', "Vtd;yx2z=G@K");
       define('DB_DATABASE', "monitor3_webserviceipb");
$koneksi = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  $sql_tabel = "SELECT * FROM awsdata order by datake ASC";
  $hasil = mysqli_query($koneksi, $sql_tabel);
   header('Content-Disposition: attachment; filename="AWS_Monitoring_Report.xls"');
	 header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
?>
<h2>Hasil AWS MONITORING REPORT</h2>
<table border='1'>
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
<?php

$no = 1;

while($row=mysqli_fetch_assoc($hasil))
{
  echo
            '<tr>
              <td>'.$row['datake'].'</td>
              <td>'.$row['waktu'].'</td>
              <td>'.$row['suhu'].'</td>
              <td>'.$row['tekananUdara'].'</td>
              <td>'.$row['ketinggianAlat'].'</td>
              <td>'.$row['cahaya'].'</td>
              <td>'.$row['kualitasUdara'].'</td>
              <td>'.$row['kelembapan'].'</td>
            </tr>'; 

}
?>

</table>

