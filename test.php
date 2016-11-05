
<?php
	print_r($_POST);
?>

<form method="POST">
    <input type="checkbox" name="class1" value="si502" checked>
        SI502 - Networked Tech<br>
    <input type="checkbox" name="class2" value="si539">
        SI539 - App Engine<br>
    <input type="checkbox" name="class3">
        SI543 - Java<br>    </p>
				<input type="email" name="email"><br/>
				<input type="color" name="favcolor"><br/>
				<input type="submit" name="c" value="c">
				<input type="submit" name="d" value="click">
</form>

<?php
    	print_r($_POST["c"]);
print_r($_POST["d"]);
?>
