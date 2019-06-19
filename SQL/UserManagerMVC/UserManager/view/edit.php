<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style>
            <?php include 'css.css';?>
        </style>
		<title>
			<?php echo htmlentities($title); ?>
		</title>
	</head>
	<body>
		<h2>Edit User</h2>
		<?php
			if ($errors) {
				echo '<ul class="errors">';
				foreach ($errors as $field => $error) {
					echo '<li>' . htmlentities($error) . '</li>';
				}
				echo '</ul>';
			}
		?>
		
		<form method="post" action="">
				<label for="name">Name: </label><br>
					<input type="text" name="name" value="<?php echo htmlentities($user->name); ?>">
				<br>
                <label for="email">Email: </label><br>
                    <input type="email" name="email" value="<?php echo htmlentities($user->email); ?>">
                <br>
                <label for="password">Password: </label><br>
                    <input type="text" name="password" value="<?php echo htmlentities($user->password); ?>">
                <br>
                <label for="role">Role: </label><br>
                    <select name="role">
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                <br>
			<input type="hidden" name="form-submitted" value="1">
			<input type="submit" value="Edit">
			<input type="button" value="Cancel" onclick="location.href='index.php'">
		</form>
	</body>
</html>