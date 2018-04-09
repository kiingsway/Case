<?php
	// Conectando ao banco
	$db = new mysqli('localhost', 'root', '', 'dbregistro');
	if ($db->conneect_error) {
		die($db->conneect_error);
	}

	if (isset($_POST['btnMudarStatus'])){
		$query = "UPDATE dbusuarios SET `status` = 0 WHERE `login` = 'king1'";
		$query->execute();

		if ($db->query($sql) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error updating record: " . $db->error;
		}
		$db->close();
	}


?>