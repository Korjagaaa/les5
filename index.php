<?php
$file_name = 'table.json';
$file_name = json_decode(file_get_contents($file_name),true);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style type="text/css">
    table {
        border: solid 1px black;
        border-collapse: collapse;
    }
    th {
        border: solid 1px black;
    }
    tr:nth-child(1) {
        font-size: 26px;
    }
</style>
<body>
    <table>
            <tr>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Адрес</th>
                <th>Телефон</th>
            </tr>
            <?php foreach ($file_name as $item) {  ?>
            <tr>
                <th><?php echo $item['firstName'] ?></th>
                <th><?php echo $item['lastName'] ?></th>
                <th><?php echo $item['address'] ?></th>
                <th><?php echo $item['phoneNumber'] ?></th>
            </tr>
            <?php } ?>
    </table>
</body>
</html>