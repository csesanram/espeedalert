<?php
//Database Connection
$con = mysql_connect("espeedalertcom.ipagemysql.com","espeedalert","GuruOm$12"); //only change username and password ( 2 and 3 parameter)
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
//Select Database
mysql_select_db("espeedalert", $con); //only change database name ( 1 parameter)

$userid = $_POST['userid'];
$phonenumber = $_POST['phonenumber'];
$adminonephonenumber = $_POST['adminonephonenumber'];
$adminonemobileprovider = $_POST['adminonemobileprovider'];
$adminonetext = $_POST['adminonetext'];
$adminonecantext = $_POST['adminonecantext'];
$adminoneemail = $_POST['adminoneemail'];
$adminonecanemail = $_POST['adminonecanemail'];
$admintwophonenumber = $_POST['admintwophonenumber'];
$admintwomobileprovider = $_POST['admintwomobileprovider'];
$admintwotext = $_POST['admintwotext'];
$admintwocantext = $_POST['admintwocantext'];
$admintwoemail = $_POST['admintwoemail'];
$admintwocanemail = $_POST['admintwocanemail'];
$minimumspeed = $_POST['minimumspeed'];
$maximumspeed = $_POST['maximumspeed'];
$createddate = $_POST['createddate'];
$updateddate = $_POST['updateddate'];

$sql="INSERT INTO userinfo
(UserId,PhoneNumber,AdminOnePhoneNumber,AdminOneMobileProvider,AdminOneText,AdminOneCanText,AdminOneEmail,AdminOneCanEmail,AdminTwoPhoneNumber,
AdminTwoMobileProvider,AdminTwoText,AdminTwoCanText,AdminTwoEmail,AdminTwoCanEmail,MinimumSpeed,MaximumSpeed,CreatedDate,UpdatedDate) VALUES ('$userid','$phonenumber','$adminonephonenumber','$adminonemobileprovider','$adminonetext','$adminonecantext','$adminoneemail','$adminonecanemail','$admintwophonenumber','$admintwomobileprovider','$admintwotext','$admintwocantext','$admintwoemail','$admintwocanemail','$minimumspeed','$maximumspeed','$createddate','$updateddate')";
if (mysql_query($sql,$con))
{
   $arr = array();
   $arr['msg']= "Your Record Inserted successfully";
   echo json_encode($arr);
}
?>