<?php

	// Stores the file name
	echo ($name = $_FILES["file"]["name"]."</br>");

	// Store the file extension or type
	echo ($type = $_FILES["file"]["type"]."</br>");

	// Store the file size
	echo ($size = $_FILES["file"]["size"]."</br>");

	echo ($name = $POST["name"]."</br>");

echo "hello";





?>