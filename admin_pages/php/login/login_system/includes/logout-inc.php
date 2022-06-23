<?php

if (isset($_POST['submit'])) {
	session_start();
    echo "start";
	session_unset();
    echo "unset";
	session_destroy();
    echo "destroyed";
	header("Location: ../index.php");
	exit();
}
else {
	header("Location: ../index.php?login=lerror");
	exit();
}