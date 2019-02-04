<?php
$link = mysqli_connect("localhost", "id5089881_rgerritzen01", "Password", "id5089881_testdatabase");
if($link === false){
    die("Successfully Failed. " . mysqli_connect_error());
}else{
    echo "connection successfull<br><br>";
}

$sql = "SELECT * FROM datatable";
$result = $link->query($sql);
$link->close();
foreach ($result as $row) {
    echo $row["text"];
}
?>