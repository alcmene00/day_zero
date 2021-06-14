<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "day_zero_db";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST["submit"])){
    $title = "image";
    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
    $tname = $_FILES["file"]["tmp_name"];
    $uploads = 'pictures/profile_pictures';
    move_uploaded_file($tname, $uploads.'/'.$pname);
    $sql = "INSERT into fileup(title,image) VALUES('$title','$pname')";
    if(mysqli_query($conn,$sql)){
        echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
}
?>
