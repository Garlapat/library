<?php 

include 'auth.php';
include 'includes/db.php';
    
$id = $_GET['id'];

$sql = "DELETE FROM `bookissue` Where id = $id";

$query = mysqli_query($con,$sql);

header('Location: memberindex.php');


?>