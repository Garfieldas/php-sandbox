<?php

class MathUtility
{
    public static $pi = 3.14;

    public static function add(...$args){
        return array_sum($args);
    }
}

echo MathUtility::$pi;
echo '<br>';
echo MathUtility::add(2,5,10,44,100);


?>