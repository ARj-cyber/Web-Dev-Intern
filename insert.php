<?php
$name = $_POST['name'];
$tele = $_POST['number'];
$address = $_POST['address'];
$contry = $_POST['contry'];
$checkin = $_POST['indate'];
$checkout = $_POST['outdate'];
$status = $_POST['ps'];
$mode = $_POST['mode'];
if(!empty($name) || !empty($tele)|| !empty($address)|| 
!empty($contry)|| !empty($checkin)|| !empty($checkout)|| !empty($mode)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "register";
    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
    
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
    }
    else{
        $SELECT ="SELECT name From details Where name = ? Limit 1";
        $INSERT ="INSERT Into details (name,tele,address,contry,checkin,checkout,status,mode)values(?,?,?,?,?,?,?,?)";
    }
}
else{
    echo "All fields are required";
    die();
}
?>