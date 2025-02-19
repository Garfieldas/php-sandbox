<?php
echo 'Hi';

/* ?> is not required if you have html in separate file
*/
echo 'hi';

echo '<h1>Title</h1>';

print 'hello from print';

echo 'one line', 'second line';
?>
<!-- shorthand -->
<?= 'hi' ?>
<?php

$name = 'Peter';
$surname = 'Griffin';
?>
<h1>
<?=  $name ?>
</h1>