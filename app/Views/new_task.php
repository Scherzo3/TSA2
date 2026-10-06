<!DOCTYPE html>
<html>
<head>
    <title>New Task</title>
</head>
<body>

<h1>Add New Task</h1>

<?php if ($errors !== []): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form method="post" action="<?= site_url('tasks/create') ?>">
    <p>Title</p>
    <input type="text" name="title" maxlength="150" value="<?= esc($old['title'] ?? '') ?>" required>

    <p>Task Date</p>
    <input type="date" name="task_date" value="<?= esc($old['task_date'] ?? date('Y-m-d')) ?>" required>

    <br><br>

    <button type="submit">
        Save Task
    </button>

</form>

</body>
</html>