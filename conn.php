<?php 
$conn = new mysqli ('localhost','root', '','TreeCAD_DB');
if($conn -> connect_error){
    die('Connection Failed: '.$conn->connect_error);
}

?>