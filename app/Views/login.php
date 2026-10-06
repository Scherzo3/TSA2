<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('css/site.css') ?>">
</head>
<body>
<main class="container">
    <h1>Login</h1>

    <form method="post" action="<?= site_url('login/process') ?>">
        <div class="form-field">
            <label for="username">Username</label>
            <input id="username" type="text" name="username" required>
        </div>

        <div class="form-field">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
        </div>

        <button type="submit">Login</button>
    </form>
</main>
</body>
</html>
