<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Product</title>
</head>
<body>
     <table border="1px">
        <tr>
            <th>Name</th>
            <th>Date Create</th>
            <th>Description</th>
            <th>active</th>
        </tr>
        <?php foreach ($product as $pdc ) :  ?>
            <tr>
                <td><?=$pdc['name']?></td>
                <td><?=$pdc['date_create']?></td>
                <td><?=$pdc['description']?></td>
                <td><?=$pdc['active']?></td>
            </tr>
            <?php endforeach;?>
     </table>
</body>
</html>