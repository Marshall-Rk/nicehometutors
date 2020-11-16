<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-save']))
{
 // variables for input data
     $Name = $_POST['Name'];
      $Phone = $_POST['Phone'];
      $Age = $_POST['Age'];
      $E-mail = $_POST['E-mail'];
      $Subject = $_POST['Subject'];
      $Address = $_POST['Address'];
      $Message = $_POST['Message'];
    // variables for input data

 // sql query for inserting data into database
 
$sql_query="INSERT INTO TutorForm (`Name`,`Phone`,`Age`,`E-mail`,`Subject`,`Address`,`Message`) VALUES('".$Name."','".$Phone."','".$Age."','".$E-mail."','".$Subject."','".$Address."','".$Message."')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('TutorForm added Successfully ');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Core PHP Crud functions By PHP Code Builder</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
        <label>Core PHP Crud functions - <a href="http://www.crudgenerator.in" target="_blank">By PHP Code Builder</a></label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post" enctype="multipart/form-data" >
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to main page</a></td>
    </tr>



      <tr>
    <td>
    <input type="text" class="form-control" id="Name" name="Name" required placeholder="Name">
    </td>
    </tr>
    <tr>
    <td>
    <input type="number" class="form-control" id="Phone" name="Phone" required placeholder="Phone">
    </td>
    </tr>
    <tr>
    <td>
    <input type="number" class="form-control" id="Age" name="Age" required placeholder="Age">
    </td>
    </tr>
    <tr>
    <td>
    <input type="email" class="form-control" id="E-mail" name="E-mail" required placeholder="E-mail">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="Subject" name="Subject" required placeholder="Subject">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="Address" name="Address" required placeholder="Address">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="Message" name="Message" required placeholder="Message">
    </td>
    </tr>
  



    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>