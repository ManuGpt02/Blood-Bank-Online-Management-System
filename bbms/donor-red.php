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
            <h1>Donor Registeration</h1><br><br>
           <center><div id="form">
           <form action="" method="post">
            <table>
                <tr>
                    <td width:200px height:50px>Enter Name</td>
                    <td width:200px height:50px><input type="text" name="name" placeholder="Enter Name"></td>
                    <td width:200px height:50px>Enter Fathers Name</td>
                    <td width:200px height:50px><input type="text" name="fname" placeholder="Enter Fathers Name"></td>
                </tr>
                <tr>
                    <td width:200px height:50px>Enter Address></td>
                    <td width:200px height:50px><textarea name="address"></textarea></td>
                    <td width:200px height:50px>Enter City</td>
                    <td width:200px height:50px><input type="text" name="city" placeholder="Enter City"></td>
                </tr>
                <tr>
                    <td width:200px height:50px>Enter Age</td>
                    <td width:200px height:50px><input type="text" name="age" placeholder="Enter AGE"></td>
                    <td width:200px height:50px>Select Blood Group</td>
                    <td width:200px height:50px>
                        <select name="bgroup">
                            <option>O+</option>
                            <option>B+</option>
                            <option>A+</option>
                            <option>AB+</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width:200px height:50px>Enter E-Mail Id</td>
                    <td width:200px height:50px><input type="text" name="email" placeholder="Enter email"></td>
                    <td width:200px height:50px>Mobile Number</td>
                    <td width:200px height:50px><input type="text" name="mnumber" placeholder="Enter Mobile Number"></td>
                </tr>
                <tr>
                <td><input type="submit" name="sub" value="Save"> </td>
                </tr>
            </table>
           </form>
              <?php
               if(isset($_POST['sub']))
               {
                 $name=$_POST['name'];
                 $fname=$_POST['fname'];
                 $address=$_POST['address'];
                 $city=$_POST['city'];
                 $age=$_POST['age'];
                 $bgroup=$_POST['bgroup'];
                 $email=$_POST['email'];
                 $mnumber=$_POST['mnumber'];
                 $q=$db->prepare("INSERT INTO donor_registeration (name,fname,address,city,age,bgroup,mnumber,email) Values (:name,:fname,:address,:city,:age,:bgroup,:mnumber,:email)");
                 $q->bindValue('name',$name);
                 $q->bindValue('fname',$fname);
                 $q->bindValue('address',$address);
                 $q->bindValue('city',$city);
                 $q->bindValue('age',$age);
                 $q->bindValue('bgroup',$bgroup);
                 $q->bindValue('mnumber',$mnumber);
                 $q->bindValue('email',$email);
                }
              ?>        
        </div></center>
        </div><br><br><br><br><br><br><br>
        <div class="footer"><br><h2 align="center">Copyright@Manu_Gupta&Siddhant_Krashak</h2>
          <p align="center"><a href="logout.php"><font color="White">Logout</a></p>
         </div>
</div>
</div>
</body>
</html>