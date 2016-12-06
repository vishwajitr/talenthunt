<?php
include('operations.php');

$objofindex = new operations;

if(isset($_POST) && !empty($_POST)){
	$data['fname'] = $_POST['fname'];
	$data['lname'] = $_POST['lname'];
	$objofindex->save($data);
}
 	
if(isset($_GET['edit']) && !empty($_GET['edit'])){
	$data['editid'] = $_GET['edit'];		
	$data = $objofindex->display_byid($data['editid']);
	$data = mysql_fetch_assoc($data);
	$data['fname'] = $data['firstname'];
	$data['lname'] = $data['lastname'];
}

?>
<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="edit.php">Add User</a></li>
</ul>

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<form method="post" action="">
	<label>First Name</label>
	<input type="text" name="fname" value="<?php if(isset($data['fname'])&!empty($data['fname'])){echo $data['fname']; } ?>">
	<label>Last Name</label>
	<input type="text" name="lname" value="<?php if(isset($data['lname'])&!empty($data['lname'])){echo $data['lname']; } ?>">
	<input type="submit" name="save" value="save" onclick="">
</form>

