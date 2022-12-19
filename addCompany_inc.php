<?php
    include "conn.php";

    if(isset($_POST['submit'])){

       $name = $_POST['company_name'];
       $city = $_POST['city'];
       $email=$_POST['email'];
       $phone=$_POST['phone'];


       $sql = "INSERT INTO `company`(CName,CCity,CEmail,CPhone,a_ID)
       VALUES ('$name','$city','$email','$phone',1);";
       if (mysqli_query($conn, $sql)) {
             echo "New record created successfully";

       } else {

             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }
       mysqli_close($conn);

     }
?>
