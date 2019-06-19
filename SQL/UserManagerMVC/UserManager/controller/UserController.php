<?php
require_once ROOT_PATH . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'UserService.php';


class UserController
{

	private $UserService = null;

	
		public function __construct()
	{
		$this->UserService = new UserService();
	}

	public function redirect($location)
	{
		header('Location: ' . $location);
	}

	public function handleRequest()
	{
		$op = isset($_GET['op']) ? $_GET['op'] : null;

		try {

			if (!$op || $op == 'list') {
				$this->listUser();
			} elseif ($op == 'new') {
				$this->saveUser();
			} elseif ($op == 'edit') {
				$this->editUser();
			} elseif ($op == 'delete') {
				$this->deleteUser();
			} elseif ($op == 'show') {
				$this->showUser();
			} else {
				$this->showError("Page not found", "Page for operation " . $op . " was not found!");
			}
		} catch(Exception $e) {
			$this->showError("Application error", $e->getMessage());
		}
	}

	public function listUser()
	{
		$orderby = isset($_GET['orderby']) ? $_GET['orderby'] : null;
		$user = $this->UserService->getAllUser($orderby);
		include ROOT_PATH . '../view/show.php';

	}

	public function saveUser()
	{
		$title = 'Add User';

		$name    = '';
		$email  = '';
		$password  = '';
		$role  = '';

		$errors = array();

		if (isset($_POST['form-submitted'])) {

			$name 	 = isset($_POST['name']) 	? trim($_POST['name']) 	  : null;
			$email 	 = isset($_POST['email']) 	? trim($_POST['email']) 	  : null;
			$password 	 = isset($_POST['password']) 	? md5(trim($_POST['password'])) 	  : null;
			$role  = isset($_POST['role']) 	? trim($_POST['role'])   : null;
	
			try {
				$this->UserService->createNewUser($name, $email, $password, $role);
				$this->redirect('index.php');
				return;
			} catch(ValidationException $e) {
				$errors = $e->getErrors();
			}
		}

		include ROOT_PATH . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'add.php';
	}

	public function editUser()
	{
		$title  = "Edit User";

		$name    = '';
		$email  = '';
		$password  = '';
		$role  = '';

		$id      = $_GET['id'];

		$errors = array();

		$user = $this->UserService->getUser($id);

		if (isset($_POST['form-submitted'])) {

			$name	 = isset($_POST['name']) 	? trim($_POST['name']) 	  : null;
			$email 	 = isset($_POST['email']) 	? trim($_POST['email']) 	  : null;
			$password 	 = isset($_POST['password']) 	? md5(trim($_POST['password'])) 	  : null;
			$role 	 = isset($_POST['role']) 	? trim($_POST['role']) 	  : null;

			try {
				$this->UserService->editUser($name, $email, $password, $role, $id);
				$this->redirect('index.php');
				return;
			} catch(ValidationException $e) {
				$errors = $e->getErrors();
			}
		}
		// Include in the view of the edit form
		include ROOT_PATH . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'edit.php';
	}

	public function deleteUser()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : null;
			if (!$id) {
				throw new Exception('Internal error');
			}
			$this->UserService->deleteUser($id);

			$this->redirect('index.php');
	}

	public function showUser()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : null;

		$errors = array();

		if (!$id) {
			throw new Exception('Internal error');
		}
		$user = $this->UserService->getUser($id);

		include ROOT_PATH . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'detail.php';
	}

	public function showError($title, $message)
	{
		include ROOT_PATH . 'view/error.php';
	}
}

?>
