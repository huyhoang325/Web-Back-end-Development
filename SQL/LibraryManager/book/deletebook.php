<?php
require ('../database/DB.php');
$db = new Database();

$id = intval($_GET['id']);
if($db->delete('book', $id)){
    echo 'Xóa thành công';
	header('Location: ./displaybook.php');
}else {
    echo "Lỗi: " .$db->error();
} 
?>