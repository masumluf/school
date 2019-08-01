<!DOCTYPE html>
<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
<script>
$(document).ready(function(){
  $("#change").change(function(){
    alert("changed");
  });
});
</script>
</head>
<body>

<input type="text" id="change">
<input type="text" style="background-color:#CC0000">
<p>Write something in the input field, and then press enter or click outside the field.</p>

</body>
</html>
