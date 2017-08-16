<?php

$link = mysqli_connect("localhost", "root", "", "credfacil");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


header('Content-Type: text/html; charset=utf-8');
mysqli_query($link , "SET NAMES 'utf8'");
mysqli_query($link , 'SET character_set_connection=utf8');
mysqli_query($link , 'SET character_set_client=utf8');
mysqli_query($link , 'SET character_set_results=utf8');

//echo "<h2>Sucess: Uma boa conexão com o MySQL foi feita!</h2>" . PHP_EOL;
//echo "<span>Host information:<span> ". mysqli_get_host_info($link) . PHP_EOL;

//mysqli_close($link);

?>