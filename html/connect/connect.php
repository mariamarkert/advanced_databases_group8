<?php
/*	putenv("ORACLE_HOME=/u01/app/oracle/product/11.2.0/xe/");
 	$conn = oci_connect("ramzi", "ramzi",'(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = i-01a024e3b3b3e2b33)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = XE)
    )
  )'
);

	$conn = oci_connect("ramzi", "ramzi", "xe");

	if (!$conn) {
    	$e = oci_error();
		echo $e['message'];
   	}
*/
ini_set('session.save_path', '/data');
putenv("ORACLE_HOME=/u01/app/oracle/product/11.2.0/xe");
putenv("LD_LIBRARY_PATH=/u01/app/oracle/product/11.2.0/xe/lib");
$conn = oci_connect("ramzi", "ramzi", "(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST = i-01a024e3b3b3e2b33)(PORT = 1521))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME = XE)
    )
  )");

if (!$conn) {
    $e = oci_error();
	echo $e['message'];
   	
    
}

?>
