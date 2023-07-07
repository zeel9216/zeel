<?php
    $fruits = array(
        array("Banana","5 dozen","2 dozen"),
        array("Apple","6 KG","3 KG"),
        array("Kiwi","3 KG","1 KG"),
        array("Grapes","10 KG","5 KG")
        );

    echo $fruits[0][0] . ": In stock: " . $fruits[0][1] . ", sold: " . $fruits[0][2] . ".<br>";
    echo $fruits[1][0] . ": In stock: " . $fruits[1][1] . ", sold: " . $fruits[1][2] . ".<br>";
    echo $fruits[2][0] . ": In stock: " . $fruits[2][1] . ", sold: " . $fruits[2][2] . ".<br>";
    echo $fruits[3][0] . ": In stock: " . $fruits[3][1] . ", sold: " . $fruits[3][2] . ".<br>";


    $array1 = array(
        "first" => array("first_first" => 20),
        "second" => array("second_first" => 20),
        "second_second" => array(
            "second_second_first" => "sub sub array"
        )
    );

    echo "<pre>";
    print_r($array1);

    // sorting

    $arr = [50,60,100];
    print_r($arr);

    rsort($arr);
    print_r($arr);

    ksort($arr);
    print_r($arr);

    
?>

