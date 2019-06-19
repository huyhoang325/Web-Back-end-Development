<?php
require_once 'Database.php';

class UserGateway extends Database
{

	public function selectAll($order)
	{
		if (!isset($order)) {
			$order = 'name';
		}
		$pdo = Database::connect();
		$sql = $pdo->prepare("SELECT * FROM user ORDER BY $order ASC");
		$sql->execute();
		// $result = $sql->fetchAll(PDO::FETCH_ASSOC);

		$users = array();
		while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {

			$users[] = $obj;
		}
		return $users;
	}

	public function selectById($id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("SELECT * FROM user WHERE id = ?");
		$sql->bindValue(1, $id);
		$sql->execute();
		$result = $sql->fetch(PDO::FETCH_OBJ);
		
		return $result;
	}

	public function insert($name, $email, $password, $role)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("INSERT INTO user (name, email, password, role) VALUES (?, ?, ?, ?)");
		$result = $sql->execute(array($name, $email, $password, $role));
	}

	public function edit($name, $email, $password, $role, $id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("UPDATE user set name = ?, email = ?, password = ?, role = ? WHERE id = ? LIMIT 1");
		$result = $sql->execute(array($name, $email, $password, $role, $id));
	}

	public function delete($id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("DELETE FROM user WHERE id = ?");
		$sql->execute(array($id));
	}
}

?>
