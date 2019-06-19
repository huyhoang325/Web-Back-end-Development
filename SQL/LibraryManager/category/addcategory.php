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
	<h3>Add Category</h3>	
	<form action="" method="post">
		<table>
			<tr>
				<td><b>Category Name:</b></td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" value="Add"></td>
			</tr>
		</table>	
	</form>
</div>
	<hr>
	<?php include '../layout/footer.php';?>
</body>
</html>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 	if(isset($_POST["name"])) { $name = $_POST['name']; }

	$data= ['categoryName' => $name];

	if($db->insert('category', $data)){
	    echo 'Thêm thành công';
	    header('Location: ./displaycategory.php');
	}else {
	    echo "Lỗi: " .$db->error();
	} 
}
?>