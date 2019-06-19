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
	<h3>Edit Borrow Order</h3>	
	<?php 
		require ('../database/DB.php');
		$db = new Database();
		$id = intval($_GET['id']);
		$value = $db->getRowArray('borroworder', $id);
		if($value){
	?> 
	<form action="" method="post">
		<table>
			<tr>
				<td><b>Student Name:</b></td>
				<td>
					<select name="student">
					<?php $student = $db->getArray('student');
					foreach ($student as $value1) { 
						?>
						<option value="<?php echo  $value1['id']; ?>"
							<?php echo ($value['studentNumber'] === $value1['id']) ? 'selected="selected"':'';?>>
							<?php echo $value1['studentName']; ?>
						</option>
						<?php 
						} 
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td><b>Book Name:</b></td>
				<td>
					<select name="book">
					<?php 
						$book = $db->getArray('book');
						foreach ($book as $value2) { 
						?>
						<option value="<?php echo  $value2['id']; ?>"
							<?php echo ($value['bookNumber'] === $value2['id']) ? 'selected="selected"':'';?>>
							<?php echo $value2['bookName']; ?>
						</option>
						<?php 
						} 
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td><b>Borrow Date:</b></td>
				<td><input type="date" name="date" value="<?php echo  $value['borrowDate']; ?>"></td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" value="Edit"></td>
			</tr>
		</table>	
	</form>
	<?php 
		}else {
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
 	if(isset($_POST["student"])) { $student = $_POST['student']; }
 	if(isset($_POST["book"])) { $book = $_POST['book']; }
 	if(isset($_POST["date"])) { $date = $_POST['date']; }

	$data= [
		'studentNumber' => $student,
		'bookNumber' => $book,
		'borrowDate' => $date
	];

	if($db->update('borroworder', $data, $id)){
	    echo 'Thêm thành công';
	    header('Location: ./displayborroworder.php');
	}else {
	    echo "Lỗi: " .$db->error();
	} 
}
