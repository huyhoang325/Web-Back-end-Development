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
	<h3>Edit Student</h3>	
	<?php 
		require ('../database/DB.php');
		$db = new Database();
		$id = intval($_GET['id']);
		$value = $db->getRowArray('student', $id);
		if($value){
	?> 
	<form action="" method="post">
		<table>
			<table>
			<tr>
				<td><b>Student Name:</b></td>
				<td><input type="text" name="name" value="<?php echo $value['studentName']; ?>"></td>
			</tr>
			<tr>
				<td><b>Address:</b></td>
				<td><input type="text" name="address" value="<?php echo $value['address']; ?>"></td>
			</tr>
			<tr>
				<td><b>Email:</b></td>
				<td><input type="text" name="email" value="<?php echo $value['email']; ?>"></td>
			</tr>
			<tr>
				<td><b>Image:</b></td>
				<td><input type="text" name="image" value="<?php echo $value['image']; ?>"></td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" value="Add"></td>
			</tr>
		</table>	
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
 	if(isset($_POST["address"])) { $address = $_POST['address']; }
 	if(isset($_POST["email"])) { $email = $_POST['email']; }
 	if(isset($_POST["image"])) { $image = $_POST['image']; }
 	
	$data=  [
    'studentName'     => $name,
    'address' => $address,
    'email'    => $email,
    'image'    => $image,
	];
	if($db->update('student', $data, $id)){
	    echo 'Thêm thành công';
	    header('Location: ./displaystudent.php');
	}else {
	    echo "Lỗi: " .$db->error();
	} 
}
?>