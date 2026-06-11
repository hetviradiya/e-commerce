<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "myproject"
);

if(!$conn){
    die("Connection Failed");
}

echo "Connected Successfully";

?>