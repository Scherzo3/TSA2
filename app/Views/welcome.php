<h1>Today's Tasks</h1>

<?php foreach ($tasks as $task): ?>
    <p><?= $task['title']; ?></p>
<?php endforeach; ?>