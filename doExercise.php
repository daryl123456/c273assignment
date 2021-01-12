<!--daryl 19042545-->
<?php

include('dbFunctions.php');
session_start();
$duration = $_GET["duration"];
$type = $_GET["type"];
$id = $_SESSION["id"];
print_r($_SESSION);




//SQL query returns multiple database records
$query = "INSERT INTO exercise_entry (patient_id, type, duration) VALUES($id,'$type',$duration)";
$result = mysqli_query($link, $query);




//<!--daryl 19042545-->
?>
