<meta http-equiv="refresh" content="0;url=../">
<script>alert("Thanks You!");</script>


<?php
ini_set('display_errors',0);
$nama = $_POST['name'];
$pesan = $_POST['pesan'];
$waktu = date('N,i,s            d-m-Y');
$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];


$file=fopen('../Hasil.html' ,a);
$save=fwrite($file,'<tr>
<td><textarea> '.$nama.' </textarea></td>
<td><textarea> '.$pesan.' </textarea></td>
<td> '.$waktu.' </td>
<td> '.$ip.' </td>
<td> '.$browser.' </td>
</tr ');
fclose($file);
?>