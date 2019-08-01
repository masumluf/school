  <?php
	  $dbLink = mysql_connect('localhost', 'root', '');				
      $db_selected = mysql_select_db('school', $dbLink);


	  $handle = fopen('testww.csv', 'r');
	while(($fileop=fgetcsv($handle,100,","))!==false){
		   	$stu_id=$fileop[0];
		    $subject=$fileop[1];
		    $marks=$fileop[2];
			
			$checkUserID = mysql_query("SELECT `student_id`,`sub_name`,`marks` FROM class_test_result WHERE  teacher_name= 'masum' &&");

while($test = mysql_fetch_array($checkUserID))

if ($test ) {
echo "GTFO BRO";
}

		
		}
		


		
            ?>
			
                   
          