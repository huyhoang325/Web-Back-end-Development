<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>User Manager</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<style>
            <?php include 'css.css';?>
        </style>
	</head>
	<body>
		<h2 style="text-align: center; color: green">User Manager</h2>
        <div><a href="index.php?op=new"><button style="font-size:15px; color: blue">Add User <i class="fa fa-plus-square"></i></button></a></div><br>
        <table id="user">
				<thead>
					<tr>
						<th><a href="?orderby=name">Name<i class='fas fa-sort-alpha-down' style='font-size:13px'></i></a></th>
						<th><a href="?orderby=email">Email<i class='fas fa-sort-alpha-down' style='font-size:13px'></i></a></th>
                        <th><a href="?orderby=password">Password<i class='fas fa-sort-alpha-down' style='font-size:13px'></i></a></th>
                        <th><a href="?orderby=role">Role<i class='fas fa-sort-alpha-down' style='font-size:13px'></i></a></th>
                        <th>&nbsp</th>
						<th>&nbsp</th>
					</tr>
				</thead>
			
				<tbody>
					<?php foreach ($user as $users) : ?>
						<tr>	
							<td><a href="index.php?op=show&id=<?php echo $users->id; ?>"><?php echo htmlentities($users->name); ?></a></td>
							<td><?php echo htmlentities($users->email); ?></td>
                            <td><?php echo htmlentities($users->password); ?></td>
                            <td><?php echo htmlentities($users->role); ?></td>
                            <td><a style="color: blue" href="index.php?op=edit&id=<?php echo $users->id; ?>">Edit</a></td>
							<td><a href="index.php?op=delete&id=<?php echo $users->id; ?>" onclick="return confirm('Are You Sure?');">Delete</a></td>
						</tr>
					<?php endforeach; ?>
				</tbody>		
			</table>
	</body>
</html>