
<?php
//Author 	  : ./0px >> 0pxDarkit
//Description  : Just Simple Source
function bacaHTML($url){
     // inisialisasi CURL
     $data = curl_init();
     // setting CURL
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
     // menjalankan CURL untuk membaca isi file
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}
$kodeHTML =  bacaHTML('https://www.vpnbook.com');
$pecah = explode('<ul class="square">', $kodeHTML);
$pecah2 = explode('</li>', $pecah[3]);

echo "<title>Simple Grab By ./0px</title>";
echo "<center>";
echo "<div style='background: #9fc5e8; Position:center; color:#0000cc; padding: 20px 10px 20px 10px; text-align: center; font-family: Agency FB; width: 400px; font-size: 30px'>";
echo "Simple Grab By ./0px<br>";
echo "Grab From Vpnbook.com";
echo $pecah2[7];
echo $pecah2[8];
echo "</div>"; //akhir stylenya
echo "</center>";
echo "<center>";
?>
