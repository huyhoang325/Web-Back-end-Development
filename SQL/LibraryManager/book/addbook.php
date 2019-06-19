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
	<h3>Add Book</h3>	
	<form action="" method="post">
		<table>
			<tr>
				<td><b>Book Name:</b></td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td><b>Category:</b></td>
				<td>
					<select name="category">
					<?php 
						$category = $db->getArray('category');
						foreach ($category as $value) { 
						?>
						<option value="<?php echo  $value['id']; ?>">
							<?php echo $value['categoryName']; ?>
						</option>
						<?php 
						} 
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td><b>Image:</b></td>
				<td><input type="text" name="image"></td>
			</tr>
			<tr>
				<td><b>Price:</b></td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr>
				<td><b>Quanlity:</b></td>
				<td><input type="text" name="quanlity"></td>
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
 	if(isset($_POST["category"])) { $category = $_POST['category']; }
 	if(isset($_POST["image"])) { $image = $_POST['image']; }
 	if(isset($_POST["price"])) { $price = $_POST['price']; }
 	if(isset($_POST["quanlity"])) { $quanlity = $_POST['quanlity']; }
 	
	$data=  [
    'bookName'     => $name,
    'categoryId' => $category,
    'image'    => $image,
    'price'    => $price,
    'quanlity' => $quanlity
	];

	if($db->insert('book', $data)){
	    echo 'Thêm thành công';
	    header('Location: ./displaybook.php');
	}else {
	    echo "Lỗi: " .$db->error();
	} 
}
?>