<?php
	session_start();
	session_unset();
	session_destroy();
	/* se env�a al index con una variable x=3, que le indica que
	ha cerrado la sesi�n */
	header('location:../index.php?x=3');
?>
