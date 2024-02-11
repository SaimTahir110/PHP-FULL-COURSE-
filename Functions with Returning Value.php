
<?php
function sum ($math, $eng, $urdu){
    $s = $math + $eng + $urdu;
    return $s;
}
function persetage ($st){
    $per = $st / 3;
    echo $per . "%";
}

$total = sum (88, 77, 63);
persetage($total);

?>