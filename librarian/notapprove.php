<?php
	include "../config.php";

	$id = $_GET["id"];
	mysqli_query($link, "update student_registration set status = 'no' where id = $id");

?>

<script>
	window.location = "student_display_info.php"
</script>