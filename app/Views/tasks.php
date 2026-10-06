<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task List</title>
    <link rel="stylesheet" href="<?= base_url('css/site.css') ?>">
</head>
<body>
<main class="container">
    <h1>Task List</h1>

    <p class="page-links">
        <a class="button" href="<?= site_url('tasks/new') ?>">Add task</a>
        <a href="<?= site_url('logout') ?>">Log out</a>
    </p>

    <?php if ($tasks === []): ?>
        <p class="empty-message">No tasks yet. Add a task to get started.</p>
    <?php else: ?>
        <?php foreach ($tasks as $task): ?>
            <div class="task-item">
                <span class="task-title"><?= esc($task['title']) ?></span>
                <div class="task-actions">
                    <a class="button button-light" href="<?= site_url('tasks/edit/' . $task['id']) ?>">Edit</a>
                    <form method="post" action="<?= site_url('tasks/delete/' . $task['id']) ?>" onsubmit="return confirm('Delete this task?')">
                        <button class="button-delete" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</main>
</body>
</html>
