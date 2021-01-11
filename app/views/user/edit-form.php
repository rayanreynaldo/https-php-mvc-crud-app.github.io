<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <?= css(['assets/css/default.css', 'assets/css/style.css']) ?>
</head>
<body>
    <div class="edit-form">
        <?php foreach($data['user'] as $user): ?>

            <h1 class="heading-title">Edit user <?= $user['name'] ?></h1>

            <form action="../update/<?= $user['id'] ?>" method="POST">
            <div>
                <input name='id' placeholder="ID" readonly value="<?= $user['id']?>">
            </div>
            <div>
                <input name='name' placeholder="Name" value="<?= $user['name']?>" required>
            </div>
            <div>
                <input name='email' placeholder="Email" value="<?= $user['email']?>" required>
            </div>
            <div>
            <div>
                <button type="submit" class="btn-update">Update</button>
                <a href="../list" class="btn-cancel">Cancel</a>
            </div>
            </form>

        <?php endforeach; ?>
    </div>
</body>
</html>