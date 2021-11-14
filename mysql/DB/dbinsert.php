<?php

require "dbconnect.php";



   function add($fname, $Lname, $gender, $dob, $region, $paddress, $peraddress, $phone, $email, $username, $password){
       $conn =connect();
    $sql = $conn->prepare('INSERT INTO registration (fname,Lname,gender,dob,region,paddress,peraddress,phone,email,username,password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
    $sql->bind_param('sssssssssss',$fname, $Lname, $gender, $dob, $region, $paddress, $peraddress, $phone, $email, $username, $password);
   
   $sql->execute();
   $sql->close();
    $conn->close();
    header("Location: login.php");
  
}

?>