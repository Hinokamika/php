<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
</head>
<body>
    <h1>Category List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Edit</th> 
        <?php include 'view_category.php';
        foreach ($category as $categories) { 
            ?>
            <tr>
                <td><?= $categories['id'] ?></td>
                <td><?= $categories['category_name'] ?></td>
                <td>
                    <form action="update_category.php" method="post">
                        <input type="hidden" name="id" value="<?= $categories['id'] ?>">
                        <input type="submit" value="Edit">
                    </form>
                </td>
            </tr>
            
            <?php
        }
        ?>
    </table>
</body>
</html>
