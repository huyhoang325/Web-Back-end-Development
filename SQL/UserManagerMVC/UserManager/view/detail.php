<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title><?php echo $user->name; ?></title>
    </head>
    <body>
        <h1><?php echo $user->name; ?></h1><br>
        <div>
            <span class="label">Email:</span>
            <?php echo $user->email; ?><br>
            <span class="label">Password:</span>
            <?php echo $user->password; ?><br>
            <span class="label">Role:</span>
            <?php echo $user->role; ?>
        </div>
    </body>
</html>