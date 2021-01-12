
<?php
//<!--daryl 19042545-->
session_start();

    include('dbFunctions.php');

    $user = $_POST['username'];
    $pass = $_POST['pass'];
    

$query = "SELECT * FROM patient WHERE username='$user' and password='$pass'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

    if ($row = mysqli_fetch_array($result)) {
        
        $_SESSION['username'] = $row['username'];
        
        $responds["result"]="success";
     
    } else {
        $responds["result"]="fail";
    }
    echo json_encode($responds);

//<!--daryl 19042545-->
?>
