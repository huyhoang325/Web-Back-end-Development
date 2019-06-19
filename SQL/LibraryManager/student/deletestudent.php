<?php
require ('../database/DB.php');
$db = new Database();

$id = intval($_GET['id']);
if($db->delete('student', $id)){
    echo 'Xóa thành công';
	header('Location: ./displaystudent.php');
}else {
    echo "Lỗi: " .$db->error();
} 
?>