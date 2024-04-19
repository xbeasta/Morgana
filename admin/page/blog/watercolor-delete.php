<?php

	include "../config.php";

	$delete_id = $_GET['watercolor-delete'];

	$db->query("DELETE FROM watercolor WHERE id = '$delete_id'");

	header("location:index.php?watercolor");

?>