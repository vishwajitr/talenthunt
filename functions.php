<?php

session_start();
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'talenthuntdb');

class DB_conn {

    function __construct() {

        $conn = mysql_connect(DB_SERVER, DB_USER, DB_PASS) or die('localhost connection problem' . mysql_error());
        mysql_select_db(DB_NAME, $conn);
    }

    public function insert($first_name, $middle_name, $last_name, $dob, $email, $experience_desc, $applying_position, $applied_before, $contact, $gender, $education, $add_date, $added_by) {
        $query = mysql_query("INSERT INTO `candidates` (`first_name`, `middle_name`, `last_name`, `email`, `dob`, `experience_desc`, `applying_position`, `applied_before`, `contact`, `gender`,`education`,`add_date`, `added_by`) VALUES ('$first_name', '$middle_name', '$last_name', '$dob' ,'$email', 'experience_desc', '$applying_position', '$applied_before', '$contact', '$gender' ,'$education' , '$add_date','$added_by');");
        return $query;
    }

    public function display_candidate() {
        return $query = mysql_query("SELECT * FROM `candidates`");
    }

    public function display_candidate_byid($id) {
        $query = 'SELECT * FROM `candidates` where `cand_id`= ' . $id . ';';
        return mysql_query($query);
    }

    public function update_candidate($first_name, $middle_name, $last_name, $email, $contact, $gender, $education, $dob, $experience_desc, $applying_position, $applied_before, $update_date, $updated_by, $edit_id ) {
        $query = mysql_query("UPDATE `candidates` SET `first_name` = '$first_name', `middle_name` = '$middle_name',`last_name` = '$last_name', `email` = '$email', `contact` = '$contact', `gender` = '$gender', `education` = '$education',`dob` = '$dob',`experience_desc` = '$experience_desc',`applying_position` = '$applying_position',`applied_before` = '$applied_before', `update_date` = '$update_date' , `updated_by` = 'admin' WHERE `candidates`.`cand_id` = '$edit_id'");
        return $query;
    }

    public function save($data) {
        if (isset($_GET['edit']) && !empty($_GET['edit'])) {
            $data['editid'] = $_GET['edit'];
        }

        if (isset($data['editid']) && !empty($data['editid'])) {
            $query = 'UPDATE `users` SET `firstname` = "' . $data['fname'] . '", `lastname` = "' . $data['lname'] . '" WHERE `id` = ' . $data['editid'];
            mysql_query($query);

            echo "Data Upadted Successfully";
        } else {
            $query = 'INSERT INTO `users` (`firstname`, `lastname`) VALUES ("' . $data['fname'] . '", "' . $data['lname'] . '")';
            mysql_query($query);
            echo "Data Added Successfully";
        }
    }

    public function delete($data) {
        $count = count($data);
        for ($i = 0; $i < $count; $i++) {
            $del_id = $data[$i];
            $query = 'DELETE FROM `users` WHERE `users`.`id` = ' . $del_id . ';';
            mysql_query($query);
            echo "Data Deleted Successfully";
        }
    }

}
