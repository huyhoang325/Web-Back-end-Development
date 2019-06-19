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
	<h3>Categories List</h3>	
	<a href="../category/addcategory.php">Add</a>
	<table style="width:100%" border="1">
		<thead>
		    <tr>
		      	<th>STT</th>
		      	<th>Category Name</th>
		      	<th>Action</th>
		    </tr>
		</thead>
		<?php
			$data = $db->getArray('category');
			$id = 0;
			foreach ($data as $value) {
			$id += 1;
		?>
			<tbody>
		    	<tr>
					<th><?php echo $id; ?></th>
			      	<td><?php echo $value['categoryName']; ?></td>
			      	<td align="center"><a href="editcategory.php?id=<?php echo $value['id']?>">Update</a>|<a href="deletecategory.php?id=<?php echo $value['id']?>">Delete</a></td>
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

