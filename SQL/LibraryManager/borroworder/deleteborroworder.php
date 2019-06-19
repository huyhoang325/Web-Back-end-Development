<?php
require ('../database/DB.php');
$db = new Database();

$id = intval($_GET['id']);
if($db->delete('borroworder', $id)){
    echo 'Xóa thành công';
	header('Location: ./displayborroworder.php');
}else {
    echo "Lỗi: " .$db->error();
} 
?>