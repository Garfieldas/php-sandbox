<?php

$numbers = [1, 33, 44, 0, 35];

$sum = array_sum($numbers);

$numbersSize = count($numbers);

$colors = ['red', 'blue', 'green', 'yellow'];

$colors = array_reverse($colors);

array_push($colors, 'purple', 'orange');

$colors = array_replace($colors, [1 => 'pink']);

array_pop($colors);

function toArray($array){
    $string = implode(", ", $array);
    echo $string;
}

$listings = [
[
    'id' => 1,
    'job_title' => 'PHP Developer',
    'company' => 'IBM',
    'contact_email' => 'user@gmail.com',
    'contact_phone' => '86785421',
    'skills' => ['PHP', 'MYSQL', 'Javascript', 'HTML', 'CSS']

],
[
    'id' => 2,
    'job_title' => 'Web designer',
    'company' => 'Apple',
    'contact_email' => 'use2r@gmail.com',
    'contact_phone' => '86784421',
    'skills' => ['Javascript', 'HTML', 'CSS']

],
[
    'id' => 3,
    'job_title' => 'Sales Manager',
    'company' => 'Microsoft',
    'contact_email' => 'user3@gmail.com',
    'contact_phone' => '867854222',
    'skills' => ['Excel', 'Communication', 'Business management']

]
];

array_push($listings,[

        'id' => 4,
        'job_title' => 'Waitress',
        'company' => 'Pizza house',
        'contact_email' => 'user4@gmail.com',
        'contact_phone' => '867421',
        'skills' => ['Service', 'Languages', 'Verbal communication']
])
?>

<h1>
<?= print_r("The sum of the $numbersSize numbers is : $sum")?>
<br/>
</h1>

<h3>
    <?= toArray($numbers) ?>
</h3>
</br>

<h4>
    <?= toArray($colors) ?>
</h4>

<h6>
    <?= print_r($listings) ?>
    <br/>
    <p>Job title is
        <?php 
        echo $listings[1]['job_title'];
        ?>
    </p>
    <p>Skill
        <?php 
        echo $listings[2]['skills'][0];
        ?>
    </p>
</h6>