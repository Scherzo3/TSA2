<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>

<h1>Edit Task</h1>

<form method="post" action="<?= site_url('tasks/update/' . $task['id']) ?>">

    <p>Title</p>
    <input type="text" name="title" value="<?= esc($task['title']) ?>" required>

    <p>Task Date</p>
    <input type="date" name="task_date" value="<?= esc($task['task_date']) ?>" required>

    <br><br>

    <button type="submit">
        Update Task
    </button>

</form>

</body>
</html>