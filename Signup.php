<?php
//Step1

 $db = connect('mati.engr.utk.edu:33060','rfehr2','rfehr2@421','rfehr2')
 or die('Error connecting to MySQL server.');

$fname = $_GET["fname"];
$lname = $_GET["lname"];
$uname = $_GET["uname"];
$psw = $_GET["psw"];

 $sql = "INSERT INTO USER_T(USER_F_NAME,USER_L_NAME,USER_EMAIL,USER_PASSWORD) VALUES ('$fname','$lname','$uname','$psw')";

$result = $db->query($sql);

if(!$result){
    die("Error executing query: ($db->errorno) db->error<br>SQL = $sql");
}
?>

