<!DOCTYPE html>
<hr color = "darkblue" size = "20">
<h1 align="center"> Welcome to UOIT! </h1>
<hr color = "darkblue" size="20">
<?php 
$xyz = new DateTime("now", new DateTimeZone('America/Toronto'));
echo $xyz -> format('m/d/Y, H:i:s');
?>
<hr color="darkblue" size="4">
<form action='datastore.php' method="post">
<p>
<label for="strFirstname">Firstname: </label>
<input type="text" name="a" id="strFirstName"></input></p>
<p>
<label for="strSurname">Surname: </label>
<input type="text" name="b" id="strSurname"></input></p>
<p>
<label for="strUsername">User Name: </label>
<input type="text" name="c" id="strUsername"></input></p>
<p>
<label for="strPassword">Password: </label>
<input type="password" name="d" id="strPassword"></input></p>
</p>
<label for="strCellNumber">Cellphone: </label>
<input type="number" name="e" id="strCellNumber"></input></p>
</p>
<p>
<input type="submit"/>
</p>
</form>

