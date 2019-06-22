<?php

	foreach ($_POST as $key => $value) {
		$attr[$key] = $value;
	}
	
	echo json_encode($attr);

?>