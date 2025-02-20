<?php

$array = Array('John', 'Mike', 'You');
$ages = [30, 20, 40, 200];


function inspect($value){
    echo '<prev>';
    var_dump($value);
    echo '</prev>';
}

$ages[] = 999;

unset($ages[3]);

$ages = array_values($ages);

inspect($array);
inspect($ages);
?>