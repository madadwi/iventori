<?php
session_start();
require '../../functions/connect.php';

$id = $_GET['id'];
$user = $_SESSION['user'];

mysqli_query($connect, "DELETE FROM login WHERE id='$id'");

header("location: ../../data-user/");
