
<?php include 'conn.php' ?>
<html>
<?php 
session_start();
$uname=$_SESSION['name'];
$upass=$_SESSION['pass'];
$uedu=$_SESSION['check'];
$education="";
foreach($uedu as $edu){
	
	$education.=$edu;
}
$sql="select name,password,education from data where name='$uname'";
mysqli_query($conn,$sql);
?>
<table border="2" align="center">
<tr>
<td >
<input type="text" value="<?php echo "$uname";?>">
</td>
</tr>
<tr>
<td >
<input type="text" value="<?php echo "$upass";?>">
</td>
</tr>
<tr>
<td >
<input type="text" value="<?php echo "$education";?>">
</td>
</tr>
</html>
