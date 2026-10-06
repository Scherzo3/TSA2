<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Task</title>
    <link rel="stylesheet" href="<?= base_url('css/site.css') ?>">
</head>
<body>
<main class="container">
    <h1>Add New Task</h1>

    <?php if ($errors !== []): ?>
        <ul class="error-list">
            <?php foreach ($errors as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post" action="<?= site_url('tasks/create') ?>">
        <div class="form-field">
            <label for="title">Title</label>
            <input id="title" type="text" name="title" maxlength="150" value="<?= esc($old['title'] ?? '') ?>" required>
        </div>

        <div class="form-field">
            <label for="task_date">Task Date</label>
            <input id="task_date" type="date" name="task_date" value="<?= esc($old['task_date'] ?? date('Y-m-d')) ?>" required>
        </div>

        <div class="form-actions">
            <button type="submit">Save Task</button>
            <a class="button button-light" href="<?= site_url('tasks') ?>">Cancel</a>
        </div>
    </form>
</main>
</body>
</html>
