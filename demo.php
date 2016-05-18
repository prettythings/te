<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
require "Queue.php";
$demo = new Queue('Redis','redis');

//var_dump($demo);

$demo -> push('cars');

//$demo -> push('train');

//$demo -> push('plane');

//$res = $demo ->pop();


//var_dump($res);



?>
</body>
</html>