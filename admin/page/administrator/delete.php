<?php

	if(isset($_GET["administrator-delete"])){
		$id_admin = $_GET["administrator-delete"];
		$db->query("DELETE FROM admin WHERE id = '$id_admin'");
		header("location:index.php?administrator");
	}

?>