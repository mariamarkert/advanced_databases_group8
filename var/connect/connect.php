<?php
	putenv("ORACLE_HOME=/u01/app/oracle/product/11.2.0/xe/");
 	$conn = oci_connect("ramzi", "ramzi", "xe")
		or die("<br>Couldn't connect");
?>
