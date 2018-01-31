<?php
require("session_status.php");
session_start();
session_destroy();
header("Location: index.php");
echo '<h1>You have been successfully logout</h1>';
?>
