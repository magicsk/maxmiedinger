<?php
$db_name = "maxmiedinger";
$db_host = "localhost";
$db_user = "root";
$db_pass = "identitarara";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$description = mysqli_real_escape_string($conn, $_REQUEST['description']);

$sql = "INSERT INTO contact (name, email, description) VALUES ('$name', '$email', '$description')";

if(mysqli_query($conn, $sql)){
    echo "Message submitted.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);

header( "refresh:1;url=index.php" );
?>