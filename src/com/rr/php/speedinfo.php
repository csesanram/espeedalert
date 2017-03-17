<?php
//Database Connection
$con = mysql_connect("espeedalertcom.ipagemysql.com","espeedalert","GuruOm$12"); //only change username and password ( 2 and 3 parameter)
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
//Select Database
mysql_select_db("espeedalert", $con); //only change database name ( 1 parameter)

$phonenumber = $_POST['phonenumber'];
$dateviolation = date('Y-m-d', strtotime($_POST['dateviolation']));
$speed = $_POST['speed'];
$textmessage = $_POST['textmessage'];
$email = $_POST['email'];
$createddate = date('Y-m-d H:i:s');
$updateddate = date('Y-m-d H:i:s');

$sql="INSERT INTO speedinfo(PhoneNumber,DateViolation,Speed,TextMessage,Email,CreatedDate,UpdatedDate) VALUES ('$phonenumber','$dateviolation','$speed','$textmessage','$email','$createddate','$updateddate')";
if (mysql_query($sql,$con))
{
   $arr = array();
   $arr['msg']= "Your Record Inserted successfully";
   echo json_encode($arr);
}
?>