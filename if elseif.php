<?php
$per = 129;

if ($per >= 80 && $per <= 100) {
    echo"you are in Marit.";

}elseif ($per >= 60 && $per <80) {
    echo"you are in 1st Division.";

}elseif ($per >= 40 && $per <60) {
    echo"you are in 2st Division.";

}elseif ($per >= 30 && $per <40) {
    echo"you are in 3rd Division.";

}elseif ($per < 30) {
    echo"Sorry You are Fail.";

}else {
    echo "plz enter Your Correct Persentage";
}
?>