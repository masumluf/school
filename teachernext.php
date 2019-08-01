<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print Report</title>
<link rel="stylesheet" href="css/report.css" />

</head>
<?php
//error_reporting(E_ERROR | E_PARSE);
include('db.php');
if(isset($_POST['submit'])){
	$var=$_POST['teacher_name'];
	$var4=$_POST['datepicker'];
	$var5=$_POST['age'];
	$var6=$_POST['address'];
	$var7=$_POST['experi'];
	$var8=$_POST['telephone'];
	$var9=$_POST['emergency'];
	//$var11=$_POST['pic_upload'];
	//$var10=$_POST['num10'];

	
$fileName = $_FILES["uploaded_file"]["name"]; // The file name
$fileTmpLoc = $_FILES["uploaded_file"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["uploaded_file"]["type"]; // The type of file it is
$fileSize = $_FILES["uploaded_file"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["uploaded_file"]["error"]; // 0 for false... and 1 for true
$fileName = preg_replace('#[^a-z.0-9]#i', '', $fileName); 
$kaboom = explode(".", $fileName); // Split file name into an array using the dot
$fileExt = end($kaboom); // Now target the last array element to get the file extension
 $fileName = time().rand().".".$fileExt;
// START PHP Image Upload Error Handling --------------------------------------------------
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
} else if($fileSize > 5242880) { // if file size is larger than 5 Megabytes
    echo "ERROR: Your file was larger than 5 Megabytes in size.";
    unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
    exit();
} else if (!preg_match("/.(gif|jpg|png)$/i", $fileName) ) {
     // This condition is only if you wish to allow uploading of specific file types    
     echo "ERROR: Your image was not .gif, .jpg, or .png.";
     unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
     exit();
} else if ($fileErrorMsg == 1) { // if file upload error key is equal to 1
    echo "ERROR: An error occured while processing the file. Try again.";
    exit();
}
// END PHP Image Upload Error Handling ----------------------------------------------------
// Place it into your "uploads" folder mow using the move_uploaded_file() function
$moveResult = move_uploaded_file($fileTmpLoc, "teacher_pic/$fileName");
// Check to make sure the move result is true before continuing
if ($moveResult != true) {
    echo "ERROR: File not uploaded. Try again.";
    exit();
}
/*
mysql_query("INSERT INTO student_bio( `student_name`, `student_father_name`, `student_mother_name`, `dob`, `age`, `address`, `group`, `telephone`, `emer`, `pic`, `reg_id`, `case`) VALUES('$var','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9','$fileName','$var_rand3','$var11')")or die('<div class="wrong"><img src="images/error.png" />Oops something is worng you may left any required field</div>'.mysql_error());*/

}

?>



<body>
 
<div class="main-container">

  <div class="header">
 <img src="images/header.png" width="947" height="306" style="margin-left:30px;" /></div>
   <hr  class="style-two"/>
   <div>
    
        <table width="900" border="0" align="center">
  <tr>
    <td>&nbsp;</td>
    <td><b style="margin-left:55px;">Admission Form</b> </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right">
    <div class="student_pic">
     <img src="<?php echo "student_pic/$fileName" ?>" >
    </div>
    
    </td>
  </tr>
  <tr>
    <td>Registration No:</td>
    <td>
    <div class="result-php">
      <?php echo $var_rand3; ?>
    </div>
    </td>
  </tr>
  <tr>
    <td>Admission Date:</td>
    <td>
    <div class="result-php">
     <?php echo date('d-m-Y'); ?>
    </div>
    </td>
  </tr>
  <tr>
    <td width="300">
    Student's Name:
    </td>
    <td width="600">
     <div class="result-php">
      <?php echo $var; ?>
    </div>
    </td>
  </tr>
  <tr>
    <td>
    Father's Name:
    </td>
    <td><div class="result-php"> <?php echo $var2; ?> </div></td>
  </tr>
  <tr>
    <td>
    Mother's Name:
    </td>
    <td><div class="result-php"> <?php echo $var3; ?> </div></td>
  </tr>
  <tr>
    <td>
    Date Of Birth:</td>
    <td><div class="result-php"> <?php echo $var4; ?> </div></td>
  </tr>
  <tr>
    <td>Age:</td>
    <td><div class="result-php"> <?php echo $var5; ?> </div></td>
  </tr>
  <tr>
    <td>Address:</td>
    <td><div class="result-php"> <?php echo $var6; ?> </div></td>
  </tr>
  <tr>
    <td>Group:</td>
    <td><div class="result-php"> <?php echo $var7; ?> </div></td>
  </tr>
  <tr>
    <td>Telephone Number:</td>
    <td><div class="result-php"> <?php echo $var8; ?> </div></td>
  </tr>
  <tr>
    <td>Emergency Number:</td>
    <td><div class="result-php"> <?php echo $var9; ?> </div></td>
  </tr>
  <tr>
    <td>Gurdian's Sign:</td>
    <td><div class="result-php"><br /></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="button" onclick="window.print()" value="Print This Copy"  class="print" name="goback"/></td>
  </tr>
</table>

   
   </div>

</div>

</div>

</body>
</html>
