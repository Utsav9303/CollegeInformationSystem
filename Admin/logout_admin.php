
<?php
require 'config.php';
$_SESSION = [];
session_unset();
session_destroy();
header("Location: loginad_admin.php");
