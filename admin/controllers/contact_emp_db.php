<?php
// display contact info of employers from db
session_start();

require ('config/connection.php');

$result = mysqli_query($db_conn, "SELECT * FROM contactemp_ques");

// if the update button is clicked
if (isset($_POST['update-bttn'])) {
	// set all contacted values to No
	$query = mysqli_query($db_conn, "UPDATE contactemp_ques SET contacted = 'No'");

	// record checks as yes
	if (!empty($_POST['contact-check'])) {
		$selected_ids = array();

		foreach ($_POST['contact-check'] as $selected) {
			$selected_ids[] = $selected;
		}

		// Get the ids separated by comma
        $in_clause = implode(", ", $selected_ids);

        // Do only one sql query
        $sql3 = "UPDATE contactemp_ques SET contacted = 'Yes' WHERE answer_id in (".$in_clause.")";
        $result3 = $db_conn->query($sql3);

        $_SESSION['success'] = "Checklist updated successfully!";

        header('location: contact_emp.php');
	}
	
}

?>
