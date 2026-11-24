<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Update</th>
            </tr>
        </thead>

        <?php
        foreach($users as $user){
        ?>

            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['surname'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><a href="delete.php?id=<?= $user['id'] ?>">Delete</a></td>
            </tr>

        <?php
        }
        ?>

    </table>

</body>
</html>