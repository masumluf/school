<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
  <title>Example: Basic - jWYSIWYG</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="css/jquery.wysiwyg.css" type="text/css" />
  <link rel="stylesheet" href="examples.css" type="text/css" />
  <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src=""></script>
  <script type="text/javascript" src="js/tinymce/tinymce.min.js">
  </script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste moxiemanager"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>



</head>

<body>
  <h1>jWYSIWYG</h1>
  <h2>Example: Basic</h2>
<form method="post" action="somepage">
    <textarea name="content" style="width:100%"></textarea>
</form>
</body>
</html>