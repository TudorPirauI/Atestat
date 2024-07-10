<?php
              
if(isset($_POST['nume']))
{
$data=$_POST['nume'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fwrite($fp, "\n");
$data1=$_POST['email'];
fwrite($fp, $data1);
fwrite($fp, "\n");
$data2=$_POST['mesaj'];
fwrite($fp, $data2);
fwrite($fp, "\n");
fclose($fp);
}
?>
