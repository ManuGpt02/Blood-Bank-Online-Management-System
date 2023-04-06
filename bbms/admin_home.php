<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="full">
  <div id="inner_full">
      <div class="header">
	     <div class="logo"><h2><a href="admin_home.php">Blood Bank Management System</a></h2></div>
        </div>
        <div id="body">
            <br>
            <h1> Welcome Admin</h1><br><br>
            <center><ul>
                <li><a href="donor-red.php">Donor Registeration</a></li>
                <li><a href="donor-list.php">Donor List</a></li>
                <li><a href="stock_blood.php">Stock Blood Group List</a></li>
            </ul><br><br><br><br><br>
            <ul>
                <li><a href="out_of_stock.php">Run Out Stock OF Blood</a></li>
                <li><a href="exchange.php">Exchange Blood List</a></li>
                <li><a href="ngo.php">NGO List</a></li>
            </ul></center><br><br><br><br><br><br><br>
        </div>
        <div class="footer"><br><h2 align="center">Copyright@Manu_Gupta&Siddhant_Krashak</h2>
          <p align="center"><a href="logout.php"><font color="White">Logout</a></p>
         </div>
</div>
</div>
</body>
</html>