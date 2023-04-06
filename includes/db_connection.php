<?php
// DB connection
$con = mysqli_connect("3.85.170.231:3306", "root", "my-secret-pw", "software_security");
if (!$con) { echo "server not connected"; }
if($con){ }
else{ echo "Failed to Connectt";}
?>