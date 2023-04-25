<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAF0lEQVRIx2NgGAWjYBSMglEwCkbBSAcACBAAAeaR9cIAAAAASUVORK5CYII=" rel="icon" type="image/x-icon">
    <title>TO-DO-LIST</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="forms-box">
    <div class="forms-container">
        <form action="add.php" method="POST">
                <input type="text" placeholder="Enter your goals" class="main-input" name="title" required>
            <!-- <input type="submit" value="Add"> -->
            <div id="line"></div>
        </form>
    </div>
    <ul class="width-full">

        <?php

        //Подключаем базу данных из файла db.php
        $dsn = 'mysql:host=localhost;dbname=to-do-list';
        $pdo = new PDO($dsn, 'root', '');

        //Берем все элементы из базы данных, из таблицы list
        $query = $pdo->query('SELECT * FROM `list` ORDER BY `id` DESC');

        //Цикл который выводит все элементы, значения
        while($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo '<div><li>'. $row->title .' <a href="delete.php?id='.$row->id.'" id="card-link-click">X</a></li>' . ' </div>';

        }
        ?>
    </ul>
</div>
</body>

</html>