<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="stylesheet" href="<?= base_url('css/site.css') ?>">
</head>
<body>
<main class="container">
    <h1>Profile</h1>
    <div class="task-item">
        <strong>Name</strong>
        <span><?= esc($user['full_name'] ?? '') ?></span>
    </div>
    <div class="task-item">
        <strong>Email</strong>
        <span><?= esc($user['email'] ?? '') ?></span>
    </div>
    <p><a class="button button-light" href="<?= site_url('tasks') ?>">Back to Tasks</a></p>
</main>
</body>
</html>
