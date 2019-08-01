<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admission Panel</title>
<link rel="stylesheet" href="css/admin.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script>
$(function() {

	var $placeholder = $('input[placeholder]');

	if ($placeholder.length > 0) {

		var attrPh = $placeholder.attr('placeholder');

		$placeholder.attr('value', attrPh)
		  .bind('focus', function() {

			var $this = $(this);

			if($this.val() === attrPh)
				$this.val('').css('color','#171207');

		}).bind('blur', function() {

			var $this = $(this);

			if($this.val() === '')
				$this.val(attrPh).css('color','#333');

		});

	}

});
</script>
</head>

<body>
<div class="main-container">

               <div class="search">
               
               <div id="search_box">
                   <div class="wrapper">
	        <input type="text" id="search" name="search" placeholder="Search for Students" />
	        <button type="submit" class="search_btn"><img src="images/search.png" title="Search" /></button>
	    </div>
        
        </div>
        <div id="stu_result" class="rem"></div>
               </div>
               
               <script>
			    $("#search").keyup(function () {
  
  var num =$('#search').val();

  
  $.post('stu_result.php',{num:num},function(data){
	  //addClass('loading'); 
				$('#stu_result').html(data);
				//removeClass('loading');
				
		});
		if(num==0)
		{
		$('#stu_result').html("");	
		}
		});
		
			   </script>
</div>
</body>
</html>