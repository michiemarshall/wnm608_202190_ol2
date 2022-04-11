<?php 

include "../lib/php/functions.php";
$users = file_get_json("../data/users.json");





function showUserPage ($user) {
$classes = implode(", ",$user->classes);

//heredoc
echo <<<HTML

<div class="card soft">
<nav class="nav nav-crumbs">
	<ul>
	<li><a href="../admin/users.php" class="back"> Back to User List </a></li>
	</ul>
</nav>


<div class="form-control">
	<h2> $user->name </h2>
	<form>

		<div>
			<strong>Type</strong>
			<input type="text" placeholder="$user->type" class="form-input">
		</div>

		<div>
			<strong>Email</strong>
			<input type="text" placeholder="$user->email" class="form-input">
		</div>
<br>
		<div>
			<strong>Enrolled Classes</strong>
			<input type="number" placeholder="$classes" class="form-input">
		</div>
	</form>
</div>
<br>
		<div class="form-control">
			<input type="button" class="form-button" value="Submit">
		</div>
</div>

HTML;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> Users </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="https://use.typekit.net/leq4zby.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM Sans"> 
	<link rel="stylesheet" href="../lib/css/styleguide.css">
	<link rel="stylesheet" href="../lib/css/gridsystem.css">
	<link rel="stylesheet" href="../css/storetheme.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body>
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-stretch">
				<h1>Teaphoria</h1>
				<h2> Admin Dashboard </h2>
			</div>
			<nav class="nav-flex flex-none">
				<ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="../admin/users.php">User List</a></li>
					<li><a href="admin/users.php?id=new">Add New User</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
			<div class="card soft">


		<?php

		if(isset($_GET['id']))  {
			showUserPage($users[$_GET['id']]);
		} else {
		?>

			<h2>Users List</h2>

			<nav class="nav">
			<ul>

			<?php

			foreach($users as $i=>$user) {
				echo "
				<li>
					<a href='../admin/users.php?id=$i'>$user->name</a>
				</li>
				";
			}
			?>
			</ul>
			</nav>
			</div>

			<?php 
			}
			?>

	</div>
	</div>
	
</body>
</html>