<?php
$hostname="localhost";
$username="root";
$pass="";
$dbname="portfolio_db";
$conn=mysqli_connect($hostname,$username,$pass,$dbname);
if(!$conn) {
    die("connection failed:". mysqli_connect_error());
}
?>