<?php

	// $salt = "isefjfehi2736582KUFED";

	$row['id'] = 73;

	echo md5(md5($row['id'])."password");

?>