<?php
include('operations.php');

$objofindex = new DB_conn;
 	
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
	<li><a href="edit.php">Add Candidate</a></li>
</ul>

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<form method="post" action="">
	<label>First Name</label>
	<input type="text" name="fname" value="<?php if(isset($data['fname'])&!empty($data['fname'])){echo $data['fname']; } ?>">
	<label>Middle Name</label>
	<input type="text" name="fname" value="<?php if(isset($data['mname'])&!empty($data['mname'])){echo $data['mname']; } ?>">
	<label>Last Name</label>
	<input type="text" name="lname" value="<?php if(isset($data['lname'])&!empty($data['lname'])){echo $data['lname']; } ?>">
	<br>

	<label>Position Applied for </label>
	<input type="text" name="position_apply" value="<?php if(isset($data['position_apply'])&!empty($data['position_apply'])){echo $data['position_apply']; } ?>">

	<label>Birth Date</label>
	<input type="date" name="birth_date" value="<?php if(isset($data['birth_date'])&!empty($data['birth_date'])){echo $data['birth_date']; } ?>">

	<label>Date of interview</label>
	<input type="date" name="interview_date" value="<?php if(isset($data['interview_date'])&!empty($data['interview_date'])){echo $data['interview_date']; } ?>">
	<label>Last Name</label>
	<input type="text" name="lname" value="<?php if(isset($data['lname'])&!empty($data['lname'])){echo $data['lname']; } ?>">



	<input type="submit" name="save" value="save" onclick="">
</form>

