<?php
$servername = "localhost";
$username = "root";
$password = "Root@123";
$dbname = "niraamaya";

$conn = mysqli_connect($servername,$username,$password,"$dbname");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

  if(isset($_POST["save_change"])){
    $name=$_POST["FirstName"];
    $email=$_POST["Email"];
    $phone=$_POST["PhoneNo"];
    $age=$_POST["Age"];
    $gender=$_POST["Gender"];
    $app_date=$_POST["AppointmentDate"];
    $dept=$_POST["Department"];
    $desc=$_POST["Description"];
    
    $insert="INSERT INTO `tbl_appointment`(`name`, `email`, `phone`, `age`,`gender`, `app_date`, `department`,  `msg`) 
    VALUES ('$name','$email','$phone','$age','$gender',STR_TO_DATE('$app_date', '%d-%m-%Y'),'$dept','$desc')";
              // echo $insert;
    $result=mysqli_query($conn,$insert); 
    if($result){
        echo "<script> location.href='index.html'; alert('Appointment Booked Successfully..');</script>"; 
    }else{
        echo "<script> location.href='index.html';  alert('Something went wrong !! Please try again..');</script>";
    } 
  }

?>