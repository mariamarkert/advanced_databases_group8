<?php

putenv("ORACLE_HOME=/u01/app/oracle/product/11.2.0/xe");
putenv("LD_LIBRARY_PATH=/u01/app/oracle/product/11.2.0/xe/lib");
$conn = oci_connect("ramzi", "ramzi", "(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = i-0f06f5dca6a8fdad7)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = XE)
    )
  )"
);


if (!$conn) {
    $e = oci_error();
	echo $e['message'];
   	
    
}

?>
