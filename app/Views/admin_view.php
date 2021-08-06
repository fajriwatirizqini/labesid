<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
</head>
<body> 
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>password</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($admin as $row):?>
            <tr>
                <td><?= $row['user_name'];?></td>
                <td><?= $row['user_password'];?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>