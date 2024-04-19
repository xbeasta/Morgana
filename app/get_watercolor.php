<?php

	require '../config.php';

	$data = [];
	$sql = $db->query("SELECT * FROM watercolor ORDER BY id DESC LIMIT 3");

	while($row = $sql->fetch_object()) {
		$data[] = $row;
	}

	echo json_encode($data);

?>