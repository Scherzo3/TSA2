<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
</head>
<body>

<h1>Task List</h1>

<p><a href="<?= site_url('tasks/new') ?>">Add task</a></p>
<p><a href="<?= site_url('logout') ?>">Log out</a></p>

<?php foreach ($tasks as $task): ?>
    <div>
        <span><?= esc($task['title']) ?></span>
        <a href="<?= site_url('tasks/edit/' . $task['id']) ?>">Edit</a>
        <form method="post" action="<?= site_url('tasks/delete/' . $task['id']) ?>" style="display: inline">
            <button type="submit" onclick="return confirm('Delete this task?')">Delete</button>
        </form>
    </div>
<?php endforeach; ?>

</body>
</html>
