<?php
$test = " ";
$count = 0;
for ($i = 0; $i < strlen($test); $i++) {
    if ($test[$i] ===" ") {
        $count++;
    } else {
        break;
    }
}
if ($count == strlen($test)) {
    echo "Unknown";
} else {
    echo $test;
}
?>