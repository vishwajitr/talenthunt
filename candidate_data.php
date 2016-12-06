<?php
include_once("functions.php");
$displaydata=new DB_conn();
$data = $displaydata->display_candidate();
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table border='1' width="400">
<?php
echo "<tr>";
// echo "<td></td>";
echo "<td>First Name</td>";
echo "<td>Last Name</td>";
echo "<td></td>";
echo "<tr>";
while($row = mysql_fetch_array($data)){
	echo "<tr>";
	// echo "<td><input type='checkbox' name='checkbox[]' value='".$row['cand_id']."'></td>";
	echo "<td>".$row['first_name']."</td>";
	echo "<td>".$row['last_name']."</td>";
	echo '<td><a href="edit_candidate.php?edit='.$row['cand_id'].'">Edit</a></td>';
	echo "</tr>";
}
?>
</table>
<!-- <input type="submit" name="delete" value="delete"> -->
</form>