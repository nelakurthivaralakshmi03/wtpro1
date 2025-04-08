<?php

function mynum($a){

return 2*($a);

}

$a = 2;
echo mynum($a);

$student = array(1, 2, 3, 4, 5, 6);
$result = array_map("mynum", $student); // Apply function to each array value

echo "Array result: ";
print_r($result);

?>