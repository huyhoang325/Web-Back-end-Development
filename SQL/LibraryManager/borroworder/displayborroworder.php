<?php
	require ('../database/DB.php');
	$db = new Database();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Library Manager</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/main.css">
<body>
	<div class="scrolltop">
		<h2 href="#home">Library Manager</h2>
	</div>
	<hr>
	<?php include '../layout/header.php';?>
	<hr>
	<div class="scrollmid">
	<h3>Borrow Books List</h3>	
	<a href="../borroworder/addborroworder.php">Add</a>
	<table style="width:100%" border="1">
		<thead>
		    <tr>
		      	<th>STT</th>
		      	<th>Student Name</th>
		      	<th>Book Name</th>
		      	<th>Borrow Date</th>
		      	<th>Action</th>
		    </tr>
		</thead>
		<?php
			$data = $db->getArray('borroworder');
			$id = 0;
			foreach ($data as $value) {
			$id += 1;
		?>
			<tbody>
		    	<tr>
					<th><?php echo $id; ?></th>
			      	<td>
			      		<?php 
						$student = $db->getArray('student');
						foreach ($student as $value2) { 
							if ($value['studentNumber'] === $value2['id']) {
								echo $value2['studentName'];
							}
						} 
						?>	
			      	</td>
			      	<td>
			      		<?php 
						$book = $db->getArray('book');
						foreach ($book as $value3) { 
							if ($value['bookNumber'] === $value3['id']) {
								echo $value3['bookName'];
							}
						} 
						?>	
			      	</td>
			      	<td><?php echo $value['borrowDate']; ?></td>
			      	<td align="center"><a href="editborroworder.php?id=<?php echo $value['id']?>">Update</a>|<a href="deleteborroworder.php?id=<?php echo $value['id']?>">Delete</a></td>
		    	</tr>
		  	</tbody>
		<?php 
			} 
		?>
		</table><br>
	</div>
	<hr>
	<?php include '../layout/footer.php';?>
</body>
</html>

