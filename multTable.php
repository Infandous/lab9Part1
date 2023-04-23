<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset="UTF-8">
		<h1>Multiplication table</h1>
	</head>

	<body>

		<form action="" method="post">
            		<label for="n">Enter an integer:</label>
            		<input type="number" name="n" id="n">
           		<input type="submit" value="Generate Table">
        	</form>
		<?php
			$n = intval($_POST['n']);
			echo "<h1>Multiplication Table for {$n}</h1>";
            		echo "<table border='1'>";

            		for ($i = 1; $i <= $n; $i++) {
                		echo "<tr>";
                		for ($j = 1; $j <= $n; $j++) {
                    			echo "<td>" . $i * $j . "</td>";
                		}
                		echo "</tr>";
            		}	

            		echo "</table>";
			
		?>
	</body>
</html>
