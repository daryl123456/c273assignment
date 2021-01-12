<!--daryl 19042545-->
<?php

include('dbFunctions.php');

$username = $_GET["username"];
$pwd = $_GET["password"];
$height = $_GET["height"];
$weight = $_GET["weight"];
$date = $_GET["date"];
$active = $_GET["active"];
$responds["result"]="register fail";

//SQL query returns multiple database records
if (isset($username)==true && isset($pwd)==true && isset($height)==true && isset($weight)==true
        && isset($date)==true&& isset($active)==true){
    
$query = "INSERT INTO patient (username, password, height, weight, dateofbirth, activelevel) VALUES('$username','$pwd',$height,$weight,'$date','$active')";
$result = mysqli_query($link, $query);


 $responds["result"]="register success";

}

echo json_encode($responds);


?>
<!--daryl 19042545-->