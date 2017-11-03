<?php

session_start();


include"connection.php";


$uname= $_SESSION['login_user'];
$month = $_POST['month'];

if (isset($uname)) {


   
$id=($uname);

$run = mysqli_query($db,"Select Firstname,Lastname,IDnumber, Contact, Email, Account from users Where Firstname = '$id'");



    $row = mysqli_fetch_array($run, MYSQLI_BOTH); {}


    $firstname = $row[0]; 

    $lastname = $row[1];
    $ID = $row[2];
    $contact = $row[3];
    $email = $row[4];
    $account = $row[5];
              
$insert="INSERT INTO $month (Firstname,Lastname,IDnumber,Contacts)values('$firstname','$lastname',$ID,'$contact')";  
mysqli_query($db,$insert) or die("Error: ".mysqli_error($db));
echo'successfully booked';
 header('Refresh: 3; URL=users.php');

}
else
{
echo'failed';

}
?>