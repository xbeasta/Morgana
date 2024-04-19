<?php

	include '../config.php';

	$delete_id = $_GET['graphicsdesign-delete'];

	$db->query("DELETE FROM graphicsdesign WHERE id = '$delete_id'");

	header("location:index.php?graphicsdesign");

?>