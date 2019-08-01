<?php
session_start();

$checking=$_SESSION['user'];
$val=$checking;
$security_pass=strlen($checking);
if($security_pass==0){
	header('Location: teacher_login.php');
}

?>

 
  <?php require_once('database.php'); 
	  
	  
	$result = mysql_query("SELECT *FROM teacher_info WHERE email='$checking';");  
while($row=mysql_fetch_array($result))
	
	{
	 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $row['teacher_name']; ?></title>
<link rel="stylesheet" href="css/teacher_profile.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/tinymce/tinymce.min.js">
  </script>
  <script type="text/javascript">
tinymce.init({
        selector: "textarea",
        plugins: [
                "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons template textcolor paste fullpage textcolor"
        ],

        toolbar1: " bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | inserttime preview | forecolor backcolor",
        toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

        menubar: false,
        toolbar_items_size: 'small',

        style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],

        templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
        ]
});
</script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<script type="text/javascript" >
 $(document).ready(function() { 
            $('#sub').click(function(){ 
				$("#preview").html('');
				$("#preview").html('<img src="busy.gif"  alt="Uploading...."/>');
			$("#imageform").ajaxForm({
						target: '#preview'
		}).submit();
	});
}); 
</script>
<style>
input { border:1px dashed #009595; background-color:#f5f0de}
</style>
</head>

<body>
<div class="container"><!--main container starat-->


<!--start header part -->

    <div class="header">
       <div class="leftcolm">
           <img src="<?php echo "teacher_pic/".$row['pic']; ?>" >
           <div class="caption"><a href="teacher_pic_change.php">Edit Picture</a></div>
       </div>
       <script type="text/javascript">
	   $('.leftcolm').mouseenter(function() {
    $(this).find('.caption').fadeIn(500);
});

$('.leftcolm').mouseleave(function() {
    $(this).find('.caption').fadeOut(500);
});
	   </script>
       <div class="rightcolm">
             <ul>
               <li><strong>BUSY BEES INTERNATIONAL SCHOOL</strong></li>
               <li style="font-family:Arial, Helvetica, sans-serif; font-size:11px;">(Teachers Profile)</li>
                 <li style="margin-top:50px;"><b><?php echo $row['teacher_name']; ?></b></li>
             </ul>
       </div>
    </div>

<!--end header part -->



<!--start middle part -->

   <div class="middle">
      <div class="leftclm" style="height:630px;">
         
            <ul>
               <li><a href="teacher.php">HOME</a></li>
                 <li><a href="file_share.php">FILE SHARING</a></li>
                   <li><a href="teacher.php">ARCHIVE</a></li>
                     <li><a href="mail.php">MAIL</a></li>
                     <li><a href="result.php">RESULT UPDATE</a></li>
                
                 <li><a href="setting.php">SETTING</a></li>
                 <li><a href="teacher.php?logout">LOG OUT</a></li>
            </ul>
         
      </div>
     <div class="rightclm" style="height:650px;">
           <div class="acco" style="margin-left:-15px;">
             <table width="700" border="0" style="border:1px solid #002346">
             <form id="imageform"  method="post" action="edit_next.php">
  <tr>
    <td colspan="3">
    <div class="edit">Information Editing Panel</div>
    </td>
    </tr>
  <tr>
    <td height="41" colspan="3" bgcolor="#009595" style="text-align:center; color:#fff; font-size:12px; font-weight:bold">You Only Could Edit Selected Information which is available below</td>
    </tr>
  <tr style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-size:14px;">
    <td height="19">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-size:14px;">
    <td width="148" height="39">Telephone Number</td>
    <td width="7">:</td>
    <td width="529"><input name="tele" type="text" value="<?php echo $row['telephone']; ?>" style="width:400px; height:40px" /></td>
  </tr>
  <tr style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-size:14px;">
    <td height="41">Email Address</td>
    <td>:</td>
    <td><input type="email" name="mail" value="<?php echo $row['email']; ?>" style="width:400px; height:40px" /></td>
  </tr>
  <tr style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; font-size:14px;">
    <td height="129">Experiences</td>
    <td>:</td>
    <td> <textarea name="content" style="width:100%"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div id='preview' align="center">
</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" id="sub" value="Submit"/></td>
  </tr>
  </form>
</table>

          </div>
      </div>
   </div>


<!--end middle part -->



<!--start footer part -->

  <div class="footer">
      <div style="text-align:center; margin-top:5px;">
         All right reserved @<a href="http://www.vin-rack.com/" target="_new" style="color:#fff">Vinrack Communication Ltd</a>
      </div>
  </div>

<!--end footer part -->







</div><!--main container end-->
</body>
</html>

<?php } ?>

<?php 
if(isset($_GET['logout'])){
	session_destroy();
	header('Location: teacher_login.php');
}

?>