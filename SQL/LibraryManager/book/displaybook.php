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
	<h3>Book List</h3>	
	<a href="../book/addbook.php">Add</a>
	<table style="width:100%" border="1">
		<thead>
		    <tr>
		      	<th>STT</th>
		      	<th>Book Name</th>
		      	<th>Category</th>
		      	<th>Image</th>
		      	<th>Price</th>
		      	<th>Quality</th>
		      	<th>Action</th>
		    </tr>
		</thead>
		<?php
			$data = $db->getArray('book');
			$id = 0;
			foreach ($data as $value) {
			$id += 1;
		?>
			<tbody>
		    	<tr>
					<th><?php echo $id; ?></th>
			      	<td><?php echo $value['bookName']; ?></td>
			      	<td>
			      		<?php 
						$category = $db->getArray('category');
						foreach ($category as $value2) { 
							if ($value['categoryId'] === $value2['id']) {
								echo $value2['categoryName'];
							}
						} 
						?>	
			      	</td>
			      	<td align="center"><img src="<?php echo $value['image']; ?>" width="60px" height="60px"></td>
			      	<td><?php echo number_format($value['price']); ?></td>
			      	<td align="center"><?php echo $value['quanlity']; ?></td>
			      	<td align="center"><a href="editbook.php?id=<?php echo $value['id']?>">Update</a>|<a href="deletebook.php?id=<?php echo $value['id']?>">Delete</a></td>
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

