<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <?= css(['assets/css/default.css', 'assets/css/style.css']) ?>
</head>
<body>
    <div class="user-list">
        <h1 class="heading-title">User Lists</h1>
        <table class="user-list-table">
            <thead>
                <tr>
                    <th><a href="add" class="show-add-form">Add</a>&nbsp; Options</th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php if($data['users']->num_rows >= 1) : ?>
                    <?php foreach($data['users'] as $user) : ?>
                        <tr>
                            <td>
                               <a href="edit/<?= $user['id'] ?>" class="show-edit-form">Edit</a>&nbsp;
                               <a href="drop/<?= $user['id'] ?>" class="show-drop-form">Delete</a>
                            </td>
                            <td> <?= $user['id'] ?> </td>
                            <td> <?= $user['name'] ?> </td>
                            <td> <?= $user['email'] ?> </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>    
                    <tr>
                        <td colspan="4">No user's yet!</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>