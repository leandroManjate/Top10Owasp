<?php
// FILE: protect_vulnerability_display_errors.php
// protecting against common vulnerabilities -- unplanned information disclosure

// simulates turning display errors on
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// simulates turning display errors off
//ini_set('display_errors', 0);

// now here is some code with errors

$name = $_GET['name'];
$value = array(1,2,3,4,5);
$list = '';

if ($value[5] == 0) {
	$error = 'No Value!';
}

foreach ($list as $item) {
	$check .= 'Item :' . $item;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Protect Against Vulnerabilities</title>
</head>
<body>
<h1>protect_vulnerability_display_errors.php</h1>

<h3>TEST</h3>

<br />Name: <?php echo $name; ?>
<br />Check: <?php echo $check; ?>
<br />Value: <?php echo sum($value); ?>

<p>
To Do:
<br />Turn display errors on and off
</body>
</html>
