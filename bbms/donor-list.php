<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
        td{
            width:200px;
            height: 20px;
        }
        </style>
</head>
<body>
<div id="full">
  <div id="inner_full">
      <div class="header">
	     <div class="logo"><h2><a href="admin_home.php">Blood Bank Management System</a></h2></div>
        </div>
        <div id="body">
            <br>
            <h1>Donor Registeration</h1><br><br>
           <center><div id="form">
            <table>
                <tr>
                    <td><center><b>Name</b></center></td>
                    <td><center><b>Fathers Name</b></center></td>
                    <td><center><b>Address</b></center></td>
                    <td><center><b>city</b></center></td>
                    <td><center><b>AGE</b></center></td>
                    <td><center><b>Blood Group</b></center></td>
                    <td><center><b>Mobile Number</b></center></td>
                    <td><center><b>E-Mail id</b></center></td>
                </tr>
                <?php
                $q=$db->prepare("SELECT * FROM donor_registeration");
                 while($r1=$q->fetch(PDO::FETCH_OBJ))
                 {
                    ?>
                     <tr>
                    <td><center><b><?=$r1->name;?></b></center></td>
                    <td><center><b>demo</b></center></td>
                    <td><center><b>demo</b></center></td>
                    <td><center><b>demo</b></center></td>
                    <td><center><b>demo</b></center></td>
                    <td><center><b>demo</b></center></td>
                    <td><center><b>demo</b></center></td>
                    <td><center><b>demo</b></center></td>
                </tr>
                <?php
                 }
                ?>
            </table>
           </div></center>
        <div class="footer"><br><h2 align="center">Copyright@Manu_Gupta&Siddhant_Krashak</h2>
          <p align="center"><a href="logout.php"><font color="White">Logout</a></p>
         </div>
</div>
</div>
</body>
</html>