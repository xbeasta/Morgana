<?php

	require '../../config.php';

	$data = [];
	$sql = $db->query("SELECT * FROM admin ORDER BY id DESC");

	while($row = $sql->fetch_object()) {
		$data[] = $row;
	}

	echo json_encode($data);

?>