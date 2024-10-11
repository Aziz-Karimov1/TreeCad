<?php 
$conn = new mysqli ('localhost','root', 'P@ssw0rd1234','TreeCAD_DB');
if($conn -> connect_error){
    die('Connection Failed: '.$conn->connect_error);
}

?>
