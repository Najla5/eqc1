<?php
 include "conn.php";
 include "viewCompany_inc.php";

if(isset($_POST['edit1'])){
  $company_name = $_POST['company_name'];
  $city = $_POST['city'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $sql = "UPDATE `company` SET `CName` ='".$company_name."',`CCity`='".$city."',`CEmail`='".$email."',`CPhone`=$phone,a_ID=1 WHERE `company`.`CID` =$rowcompanyid";

  if (mysqli_query($conn, $sql)) {
        echo "RECORD HAS BEEN EDITED successfully";

  } else {

        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

}

?>
