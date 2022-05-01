<?php 

if(isset($_POST['name']));{

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if (!$con){
    die("Connetion failed due to" . 
    mysqli_connect_error());
}

// echo "Successfully Connected";

$name = $_POST['name'];
$idnumber = $_POST['idnumber'];
$age = $_POST['age'];
$school = $_POST['school'];

$sql = "INSERT INTO `trip` (`name`, `idnumber`, `age`, `school`, `time`) VALUES ('$name', '$idnumber', '$age', '$school', current_timestamp());";

// echo $sql;

if ($con->query($sql) == true) {
    echo "Succesfully Inserted";
    
    // Flag for succesfull insertion
    $insert = true;
}
else{
    
    echo "ERROR: $sql <br> $con->error";
}

$con->close();

}

?>
