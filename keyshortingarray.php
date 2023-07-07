<?php  
    echo "The Original array is:<br>";
    $a = array("Krimit" => 50, "Surendra" => 10, "Jemit" => 30, "Bhavesh" => 25);
    echo "<pre>";
    print_r($a);
    echo "After sorting...<br>";
    ksort($a);
    echo "<pre>";
    print_r($a);
    echo "<br>";
    rsort($a);
    echo "<pre>";
    print_r($a);
?>