<?php

	include "../config.php";

	$delete_id = $_GET['follow-delete'];

	$db->query("DELETE FROM home WHERE id = '$delete_id'");

	header("location:index.php");

?>