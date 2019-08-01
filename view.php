<?php
require_once('database.php');
$get_id=$_GET['notice_id'];

//echo $get_id;

$result = mysql_query("SELECT * FROM notice WHERE notice_id='$get_id'; ");  
while($row=mysql_fetch_array($result))
	
	{


?>

<p style="font-size:16px; font-weight:bold"><?php echo $row['notice_heading']; ?></p>
<p></p>
<div style="padding:10px; background-color:#ffffc6; border:1px dashed #000">
<?php echo $row['notice_body']; ?>
<p style="font-size:11px; color:#969696">Date of Uploaded: <?php echo $row['notice_date']; ?> </p>
</div>

<?php  } ?>