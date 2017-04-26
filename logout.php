<?php

//	echo "Logged out successfully";
    
    session_start();
	session_destroy();
header("Location: index.php");
	?>