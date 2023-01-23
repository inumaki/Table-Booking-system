
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin Login</title>
</head>
<body>
	
<div class="panel">
		<div class="state"><br><i class="fa fa-unlock-alt"></i><br><h1>Admin Login</h1></div>
		<form action="./database/login.php" method="post">
		<div class="form">
			<input placeholder='Name' name="name"type="text" required>
			<input placeholder='Password' name="password" type="password" required>
			<input class="login" type="submit" name="submit">
		</div>
		</form>
	
	</div>
    
</body>
</html>