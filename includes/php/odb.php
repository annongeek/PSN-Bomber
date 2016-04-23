<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'passionngu');
define('DB_USERNAME', 'passionngu');
define('DB_PASSWORD', 'm4Ryv*06');
define('ERRMSG', 'Something is wrong here!');

try {
$odb = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
}
catch( PDOException $Exception ) {
	die(ERRMSG);
}

function error($string)
{
return '
<div class="callout callout-danger">
<h4>ERROR!</h4>
<p>'.$string.'</p>
</div>
';
}

function success($string)
{
return '
<div class="callout callout-success">
<h4>SUCCESS!</h4>
<p>'.$string.'</p>
</div>
';
}

define('DIRECT', TRUE);
require 'funcs.php';
?>
