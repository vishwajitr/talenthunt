<?php
include('operations.php');

$objofindex = new operations;
$displaydata = $objofindex->display();
if(isset($_POST['delete'])&&!empty($_POST['delete'])){
$data = $_POST['checkbox'];	
$objofindex->delete($data);
echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
}
?>
<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="edit.php">Add User</a></li>
</ul>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table border='1' width="400">
<?php
echo "<tr>";
echo "<td></td>";
echo "<td>First Name</td>";
echo "<td>Last Name</td>";
echo "<td></td>";
echo "<tr>";

while($row = mysql_fetch_array($displaydata)){
	echo "<tr>";
	echo "<td><input type='checkbox' name='checkbox[]' value='".$row['id']."'></td>";
	echo "<td>".$row['firstname']."</td>";
	echo "<td>".$row['lastname']."</td>";
	echo '<td><a href="edit.php?edit='.$row['id'].'">Edit</a></td>';
	echo "</tr>";
}

echo "http";
?>
</table>
<input type="submit" name="delete" value="delete">
</form>