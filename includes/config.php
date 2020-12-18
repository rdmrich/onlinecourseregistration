<?php
define('DB_SERVER','sql204.epizy.com');
define('DB_USER','epiz_27484668');
define('DB_PASS' ,'FaMs2DeHHwJX');
define('DB_NAME','epiz_27484668_onlinecourseregistration');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>