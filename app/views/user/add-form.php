<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <?= css(['assets/css/default.css', 'assets/css/style.css']) ?>
</head>
<body>
    <div class="add-form">
        <h1 class="heading-title">Add new user</h1>
        <form action="./create/" method="POST">
        <div>
            <input name='name' placeholder="Name" required>
        </div>
        <div>
            <input name="email" placeholder="Email" required>
        </div>
        <div>
            <button type='submit' class="btn-add">Add</button>
            <a href='./list' class="btn-cancel">Cancel</a>
        </div>
    </div>
</body>
</html>