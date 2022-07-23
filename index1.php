<?php
  $host = "localhost";
  $username = "root";
  $password = "";
try{
 $con = new PDO("mysql:host=$host;dbname=myform", $username,$password);
 $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 echo("connected sucessfully");
}
catch(PDOException $e)
{
 echo "connection failed: ". $e->getMesssage();
}
if(isset($_POST['fname']))
{
 print_r($_POST);
 $sql = "INSERT INTO 
details(fname,lname,dob,address,lang,voterid,aadharid,fatname,foccu,fphno,momname,m
occu,mphno,annual) VALUES('".$_POST['fname']."', '".$_POST['lname']."',
 '".$_POST['DOB']." ', '".$_POST['add']."', '".$_POST['language']."', '".
$_POST['voter']."', '".$_POST['adhar']."', '".$_POST['father']."', '".
$_POST['focc']."', '".$_POST['fnum']."', '".$_POST['mother']."', '".
$_POST['mocc']."', '".$_POST['mnum']."', '".$_POST['ai']."')";
 $con->query($sql);
}
?>
