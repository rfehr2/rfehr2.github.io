<?php

 $db = connect('mati.engr.utk.edu:33060','rfehr2','rfehr2@421','rfehr2')
 or die('Error connecting to MySQL server.');

$Lname = $_GET["Lname"];
$teams = $_GET["teams"];


 $sql = "INSERT INTO LEAGUE(LEAGUE_NAME,NUM_TEAMS) VALUES ('$Lname','$teams')";

$result = $db->query($sql);

if(!$result){
    die("Error executing query: ($db->errorno) db->error<br>SQL = $sql");
}
?>