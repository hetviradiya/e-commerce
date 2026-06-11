<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "e-commerce"
);

if(!$conn){
    die("Connection Failed");
}

echo "Connected Successfully";

?>