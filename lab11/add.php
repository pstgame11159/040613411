<?php
	if(!$_GET["c"])
	{
		$a = $_GET["a"];
		$b = $_GET["b"];
		echo "<b>ผลลัพธ์</b> คือ ";
		echo $a + $b;
	}
	else if($_GET["c"])
	{
		$a = $_GET["a"]*30;
		$b = $_GET["b"]*70;
		$c = $_GET["c"]*30;
		echo "<b>ผลลัพธ์</b> คือ ";
		echo $a + $b+$c;

	}


?>