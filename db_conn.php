<?php
$sname="localhost";
$uname="root";
$password="";
$dbname="test_db";
$conn=mysqli_connect($sname,$uname,$password,$dbname);
if(!$conn){
    echo"connection failed!";
}