<?php
include_once("functions.php");
$insertdata=new DB_conn();

if(isset($_POST['submit']))
{

if(isset($_POST['edit'])&&!empty($_POST['edit'])){
$edit_id = $_POST['edit'];
}

$first_name=$_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$education=$_POST['education'];
$experience_desc=$_POST['experience_desc'];
$applying_position=$_POST['applying_position'];

if(isset($_POST['applied_before'])&&!empty($_POST['applied_before'])){
$applied_before = "YES";    
}else{
$applied_before = "No";    
}

$add_date = date("Y/m/d");
$added_by = 'admin';

$update_date = date("Y/m/d");
$updated_by = 'admin';


if(isset($edit_id)&&!empty($edit_id)){

$sql = $insertdata->update_candidate($first_name, $middle_name, $last_name, $email, $contact, $gender, $education, $dob, $experience_desc, $applying_position, $applied_before, $update_date, $updated_by, $edit_id );

if($sql){
echo "Data Updated";
header('Location: edit_candidate.php?edit='.$edit_id);
}else{
echo "Something gone wrong Please Fill Form Again";
header('Location: edit_candidate.php?edit='.$edit_id );
}

}else{

$sql = $insertdata->insert($first_name, $middle_name, $last_name, $dob, $email, $experience_desc, $applying_position, $applied_before, $contact, $gender, $education, $add_date, $added_by);

if($sql){
echo "Data inserted";
header('Location: candidate_data.php');
}else{
echo "Something gone wrong Please Fill Form Again";
header('Location: edit_candidate.php');
}


}





}

?>