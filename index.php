<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<html>
<head>
<?php
include 'view/header.php';
$header = new generic_header();
echo $header->generic_header();

?>
</head>

<body>
<?php

include 'view/bulk.php';

$bulk = new bulk_interface();

echo $bulk->generateBody();



//footer.php        

?>
</body>
</html>

