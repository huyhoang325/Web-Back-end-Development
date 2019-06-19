<?php

require_once ROOT_PATH . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'UserGateway.php';
require_once ROOT_PATH.DIRECTORY_SEPARATOR.'model'.DIRECTORY_SEPARATOR.'Database.php';

class UserService extends UserGateway
{

	private $UserGateway = null;

	public function __construct()
	{
		$this->UserGateway = new UserGateway();
	}

	public function getAllUser($order) {
	    try { 
	        self::connect();
	        $res = $this->UserGateway->selectAll($order);
	        self::disconnect();
	        return $res; 
	    } catch (Exception $e) { 
	        self::disconnect();
	        throw $e; 
	    } 
	} 

	public function getUser($id)
	{
		try {
			self::connect();
			$result = $this->UserGateway->selectById($id);
			self::disconnect();
			return $result;
		} catch(Exception $e) {
			self::disconnect();
			throw $e;
		}
		return $this->UserGateway->selectById($id);
	}

	public function createNewUser($name, $email, $password, $role)
	{
		try {
			self::connect();
			$result = $this->UserGateway->insert($name, $email, $password, $role);
			self::disconnect();
			return $result;
		} catch(Exception $e) {
			self::disconnect();
			throw $e;

		}
	}

	public function editUser($name, $email, $password, $role, $id)
	{
		try {
			self::connect();
			$result = $this->UserGateway->edit($name, $email, $password, $role, $id);
			self::disconnect();
		}catch(Exception $e) {
			self::disconnect();
			throw $e;
		}
	}

	public function deleteUser($id)
	{
		try {
			self::connect();
			$result = $this->UserGateway->delete($id);
			self::disconnect();
		} catch(Exception $e) {
			self::disconnect();
			throw $e;
		}
	}
}

?>
