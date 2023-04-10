<?php

if(isset($_POST['val'])) {
	$val = $_POST['val'];
	echo"<table class='multiplication-table'>";
	echo "<tr><th></th>";
	for($j = 1; $j <= $val; $j++) {
		echo "<th>" . $j . "</th>";
	}
	echo "</tr>";
	for ($i = 1; $i <= $val; $i++) {
		echo "<tr><th>" . $i . "</th>";
		for ($k = 1; $k <= $val; $k++) {
			echo "<td>" . ($i * $k) . "</td>";
		}
		echo "</tr>";
		
	}
	echo "</table>";
}

?>
