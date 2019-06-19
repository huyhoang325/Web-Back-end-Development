<?php
require ('../database/DB.php');
$db = new Database();

$id = intval($_GET['id']);
if($db->delete('category', $id)){
    echo 'Xóa thành công';
	header('Location: ./displaycategory.php');
}else {
    echo "Lỗi: " .$db->error();
} 
?>