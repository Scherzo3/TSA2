<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Task</title>
    <link rel="stylesheet" href="<?= base_url('css/site.css') ?>">
</head>
<body>
<main class="container">
    <h1>Edit Task</h1>

    <form method="post" action="<?= site_url('tasks/update/' . $task['id']) ?>">
        <div class="form-field">
            <label for="title">Title</label>
            <input id="title" type="text" name="title" value="<?= esc($task['title']) ?>" required>
        </div>

        <div class="form-field">
            <label for="task_date">Task Date</label>
            <input id="task_date" type="date" name="task_date" value="<?= esc($task['task_date']) ?>" required>
        </div>

        <div class="form-actions">
            <button type="submit">Update Task</button>
            <a class="button button-light" href="<?= site_url('tasks') ?>">Cancel</a>
        </div>
    </form>
</main>
</body>
</html>
