

<!DOCTYPE html>
<html>

<head>
	<title>TODO LIST TASKL</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

	<div class="heading">
		<h2 style="font-style: 'Hervetica';">TODO LIST TASK PAGE 1</h2>
	</div>


	<form method="post" action="next.php" class="input_form">
		
		<input type="text" name="task" class="task_input"required >
		<br/>
		<br/>

		<input type="datetime-local" name="tsk" class="task_input" required>
		<br/>
		<br/>
		<button type="submit" name="submit" id="add_btn" class="add_btn">Submit</button>
		
		<button type="reset" name="submit" id="add_btn" class="add_btns" >Clear</button>

	
		 
	</form>
	


</body>
</html>