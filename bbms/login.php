<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank About</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="header">
	<div class="logo"><h2>Blood Bank Management System</h2></div>
	<div class="nav">
		<div id="a"><a href="index.php">Home</a></div>
		<div id="b"><a href="about.php">About As</a></div>
		<div id="c"><a href="contect.php">Contect Us</a></div>
		<div id="d"><a href="login.php">Login</a></div>
	</div>
    <div id="full">

    <div id="inner_full">
     <div id="body">
     <br><br><br><br><br>
     <form action="" method="post">
      <center><table >
       <tr>
         <td width="200px" height="70px"><b>Enter Username</b></td>
         <td width="100px" height="70px"><input type="text" name="un" placeholder="Enter Username" style=" width: 180px;height: 30px; border-radius: 10px;"></td>
         </tr>
         <tr>
          <td width="200px" height="70px"><b>Enter Password</b></td>
         <td width="200px" height="70px"><input type="text" name="ps" placeholder="Enter Password" style=" width: 180px;height: 30px;border-radius: 10px;"></td>
        </tr>
         <tr>
          <td><input type="submit" name="sub" value="Login" style="width: 70px;height: 30px;border-radius: 5px;" align="center  "></td>
        </tr>
         </table></center>
         </form>
         <?php
         if(isset($_POST['sub']))
         {
           $un=$_POST['un'];
            $ps=$_POST['ps'];
            $q=$db->prepare("SELECT * FROM admin WHERE uname='$un' AND pass='$ps'");
            $q->execute();
            $res=$q->fetchAll(PDO::FETCH_OBJ);
            if($res)
            {
                header("Location:admin_home.PHP");
            }
            else{
                echo "<script>alert('Wrong User')</script>";
            }
        }
         ?>
         <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
         <div class="footer"><h2 align="center">Copyright@Manu_Gupta&Siddhant_Krashak</h2></div>
     </div>
    </div>


</body>
</html>