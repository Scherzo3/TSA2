<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Today's Tasks</title>
    <link rel="stylesheet" href="<?= base_url('css/site.css') ?>">
</head>
<body>
<main class="container">
    <h1>Today's Tasks</h1>
    <p><a class="button" href="<?= site_url('tasks') ?>">View All Tasks</a></p>

    <?php if ($tasks === []): ?>
        <p class="empty-message">No tasks planned for today.</p>
    <?php else: ?>
        <?php foreach ($tasks as $task): ?>
            <div class="task-item">
                <span class="task-title"><?= esc($task['title']) ?></span>
                <span><?= esc(ucfirst($task['status'])) ?></span>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</main>
</body>
</html>
