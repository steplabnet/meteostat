<?php
$temp = 1;
$file=$_SERVER['DOCUMENT_ROOT']."/temp.txt";
$link = mysqli_connect("localhost", "steplab", "78f25d78", "meteo");
$time =time();
if(file_exists($file)){
$temp=file_get_contents($file);
echo $temp;
unlink($file);

$result = $link->query("INSERT INTO temperatura (id, temperatura, data) VALUES (NULL, '$temp', '$time')");

}
mysqli_close($link);

?>