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
	<h3>Edit Book</h3>	
	<?php 
		require ('../database/DB.php');
		$db = new Database();
		$id = intval($_GET['id']);
		$value = $db->getRowArray('book', $id);
		if($value){
	?> 
	<form action="" method="post">
		<table>
			<tr>
				<td><b>Book Name:</b></td>
				<td><input type="text" name="name" value="<?php echo $value['bookName']; ?>"></td>
			</tr>
			<tr>
				<td><b>Category:</b></td>
				<td>
					<select name="category">
					<?php 
						$category = $db->getArray('category');
						foreach ($category as $value2) { 
						?>
						<option value="<?php echo  $value2['id']; ?>"
							<?php echo ($value['categoryId'] == $value2['id']) ? 'selected="selected"':'';?>>
							<?php echo $value2['categoryName']; ?>
						</option>
						<?php 
						} 
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td><b>Image:</b></td>
				<td><input type="text" name="image" value="<?php echo $value['image']; ?>"></td>
			</tr>
			<tr>
				<td><b>Price:</b></td>
				<td><input type="text" name="price" value="<?php echo $value['price']; ?>"></td>
			</tr>
			<tr>
				<td><b>Quanlity:</b></td>
				<td><input type="text" name="quanlity" value="<?php echo $value['quanlity']; ?>"></td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" value="Edit"></td>
			</tr>
		</table>	
	</form>
	<?php 
		}
		else {
		    echo 'Lỗi: ' . $db->error(); 
		}
	?> 
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
	if($db->update('book', $data, $id)){
	    echo 'Thêm thành công';
	    header('Location: ./displaybook.php');
	}else {
	    echo "Lỗi: " .$db->error();
	} 
}
?>