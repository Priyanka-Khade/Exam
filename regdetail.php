<?php include 'conn.php' ?>
<html>
<?php 
session_start();
$uname=$_REQUEST['name'];
$upass=$_REQUEST['pass'];
$uedu=$_REQUEST['check'];
$_SESSION['name']=$uname;
$_SESSION['pass']=$upass;
$_SESSION['check']=$uedu;
$education="";
foreach($uedu as $edu){
	
	$education.=$edu;
}
$sql="insert into data(name,password,education)values('$uname','$upass','$education')";
mysqli_query($conn,$sql);
?>
<body>
</body>
<a href="dispaly.php" >Show</a>
<a href="update.php" >Update</a>
</html>