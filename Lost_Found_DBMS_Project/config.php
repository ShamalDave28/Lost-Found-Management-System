<?php
$conn = mysqli_connect("localhost","root","","lost_found_db");
if(!$conn){ die("DB Error"); }
session_start();
?>