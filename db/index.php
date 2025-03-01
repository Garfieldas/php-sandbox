<?php

require 'database.php';

// Prepare a Select statement
$stmt = $pdo->prepare('SELECT * FROM posts');

// Execute
$stmt->execute();

// Fetch results
$results = $stmt->fetchAll();

?>

<?php foreach($results as $result) : ?>
<h1>Post title <?= $result['title'] ?></h1>
<p>Post number: <?= $result['id'] ?></p>
<br>
<p>Body: <?= $result['body'] ?></p>
<br>
<p>Created_at: <?= $result['created_at'] ?> </p>
<br>
<?php endforeach; ?>