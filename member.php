<?php session_start();  
include('con_db.php');

  $ID = $_SESSION['uid'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='member'){
    Header("Location: ../logout.php");  
  }  
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="logout.php">
	<h1>Member Page</h1>
	<h3> สวัสดี คุณ <?php echo $name; ?> สถานะ <?php echo $level; ?> </h3>
	<input type="submit" value="ออกจากระบบ">
	</form>
</body>
</html>