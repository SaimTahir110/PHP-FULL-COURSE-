
<?php

$emp = [

    [1, "Saim", "Programmer", "50000"],
    [2, "Tahir", "Computer App", "12000"],
    [3, "Ali", "Manager", "63000"],
    [4, "Hamza", "Sale Man", "88000"],
];

echo "<table boder='2px'>";

foreach ($emp as $V1){
    echo "<tr>";
    foreach ($V1 as $V2){
echo "<td> $V2 </td>";
}
 echo "</tr>";
}
echo "</table>";

?>