<?php

$conn = new PDO('mysql:host=sql.computerstudi.es;dbname=', '', '');
$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>