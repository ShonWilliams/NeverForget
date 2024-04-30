<?php

$user = 'root';

$pass = '1Chipper!';

$db = 'neverforget';

$db = new mysqli('localhost', $user, $pass, $db) or die('Unable to connect to database.');

echo'Connected !';

?>