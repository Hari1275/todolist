
<?php 
	

	$db = mysqli_connect("localhost", "root", "", "todo");


	if (isset($_POST['submit'])) {

		
			$task = $_POST['task'];
			$taskss=$_POST['tsk'];
			$query = "INSERT INTO `tasks`(`task`, `task1`) VALUES ('$task','$taskss')";
			mysqli_query($db, $query);
			header('location: next.php');
		
	}	

	
	if (isset($_GET['del_task'])) {
		$id = $_GET['del_task'];

		mysqli_query($db, "DELETE FROM tasks WHERE id=".$id);
		header('location: next.php');
	}

	
    $tasks = mysqli_query($db, "SELECT * FROM tasks");
    ?>








<html>

<head>
	<title>TODO LIST TASKL</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>


<body>

<div class="heading">
		<h2 style="font-style: 'Hervetica';">TODO LIST TASK PAGE 2</h2>
	</div>
	

	<table>
		<thead>
			<tr>
				<th>Numbers</th>
				<th>Tittles</th>
				<th>Date and Time</th>
				<th style="width: 60px;">Action</th>
			</tr>
		</thead>

		<tbody>
			<?php $i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
				<tr>
					<td> <?php echo $i; ?> </td>
					<td class="task"> <?php echo $row['task'];?> </td>
					<td class="task"> <?php echo $row['task1'];?> </td>
					<td class="delete"> 
						<a href="next.php?del_task=<?php echo $row['id'] ?>">Delete</a> 
					</td>
				</tr>
			<?php $i++; } ?>	
		</tbody>
	</table>

</body>
</html>