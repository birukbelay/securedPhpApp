<?php

if (isset($_POST['submit'])) {
	session_start();
    echo "start";
	session_unset();
    echo "unset";
	session_destroy();
    echo "destroyed";
	header("Location: ../../../index.php?logout=sucess");
	exit();
}
else {
	header("Location: ../../../index.php?logout=lerror");
	exit();
}