<?php
// DB connection
$con = mysqli_connect("localhost", "root", "", "Demo_projects");
if (!$con) { echo "server not connected"; }
if($con){ }
else{ echo "Failed to Connect";}
?>