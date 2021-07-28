<?php
//harviacode.com
$filecounter=("counter.txt");
$kunjungan=file($filecounter);
$kunjungan[0]++;
$file=fopen($filecounter,"w");
fputs($file,"$kunjungan[0]");
fclose($file);
?>
<?php
$waktu = date('N,i,s            d-m-Y');
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$file=fopen('../admin.php' ,a);
$save=fwrite($file,'
<tr>
<td> '.$waktu.' </td>
<td> '.$ip.' </td>
<td> '.$browser.' </td>
</tr> 
');
fclose($file);
?>