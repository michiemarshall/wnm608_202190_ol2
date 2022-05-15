<?php 



include "../lib/php/functions.php";

$filename = "../data/users.json";
$users = file_get_json($filename);

$empty_user = (object)[
	     "name"=>"",
	     "type"=>"",
 	    "email"=>"",
  	   "classes"=>[]
];




if(isset($_GET['action'])){
    switch($_GET['action']){

        case "update":
            $users[$_GET['id']]->name = $_POST['user-name'];
            $users[$_GET['id']]->type = $_POST['user-type'];
            $users[$_GET['id']]->email = $_POST['user-email'];
            $users[$_GET['id']]->classes = explode(", ", $_POST['user-classes']);
        
            file_put_contents($filename,json_encode($users));
            header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
            break;
        case "create":
            $empty_user->name = $_POST['user-name'];
            $empty_user->type = $_POST['user-type'];
            $empty_user->email = $_POST['user-email'];
            $empty_user->classes = explode(", ", $_POST['user-classes']);

            $id = count($users);

            $users[] = $empty_user;
        
            file_put_contents($filename,json_encode($users));
            header("location:{$_SERVER['PHP_SELF']}?id=$id");
            break;
        case "delete":
            array_splice($users,$_GET['id'],1);
            file_put_contents($filename,json_encode($users));
            header("location:{$_SERVER['PHP_SELF']}");
            break;
    }
}







function showUserPage ($user) {

$id = $_GET['id'];

$addoredit = $id == "new" ? "Add" : "Edit";

$createorupdate = $id == "new" ? "create" : "update";

$classes = implode(", ",$user->classes);


//heredoc
$display = <<<HTML


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


$form = <<<HTML
<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
    <h2>$addoredit User</h2>
    <div>
        <label class="form-label" for="user-name">Name</label>
        <input name="user-name" id="user-name" type="text" placeholder="Enter the User Name" value="$user->name" class="form-input">
    </div>
    <div>
        <label class="form-label" for="user-type">Type</label>
        <input name="user-type" id="user-type" type="text" placeholder="Enter the User Type" value="$user->type" class="form-input">
    </div>
    <div>
        <label class="form-label" for="user-email">Email</label>
        <input name="user-email" id="user-email" type="search" placeholder="Enter the User Email" value="$user->email" class="form-input">
    </div>
    <div>
        <label class="form-label" for="user-classes">Classes</label>
        <input name="user-classes" id="user-classes" type="text" placeholder="Enter the Classes, comma deparated" value="$classes" class="form-input">
    </div>
    <div class="form-control">
        <input class="form-button" type="submit" value="Save Changes">
    </div>
</form>

HTML;

	$output = $id == "new" ? $form :
    "<div class='grid gap'>
        <div class='col-xs-12 col-md-7'>$display</div>
        <div class='col-xs-12 col-md-5'>$form</div>
    </div>
    "; 

	$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";

echo <<<HTML

<nav class="display-flex">
    <div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">&#60; Back</a></div>
    <div class="flex-none">$delete</div>
</nav>
$output


HTML;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title> Users </title>

	<meta charset="UTF-8">
    <?php include "../parts/meta.php";?>
</head>

<body>

	<?php include "../parts/nav.php";?>
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