<?php  
    $x = 0;
    while($x < 10){
        if($x == 4){
            break;
        }
        echo "The number is : $x <br>";
        $x++;
    }

    echo "<br>";

    $x = 0;
    while($x < 10){
        if($x == 4){
            $x++;
            continue;
        }
        echo "The number is : $x <br>";
        $x++;
    }
?>