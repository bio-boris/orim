<html>
<?php

//header.php

?>
<body>
<?php

include 'view/bulk.php';

$bulk = new bulk_interface();

echo $bulk->generateBody();



//footer.php        

?>
</body>
</html>

