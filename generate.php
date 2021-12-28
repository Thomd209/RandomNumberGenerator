<?php
require_once 'classes/NumberGenerator.php';
require_once 'index.php';
require_once 'number/generate.php';
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Generate number</title>
        <link rel="stylesheet" href="assets/bootstrap/bootstrap.css"></link>
        <link rel="stylesheet" href="assets/css/style.css"></link>
    </head>
    <body>
        <a href="retrieve.php" class="link-generate">Найти число по id</a>
        <h1 class="title-generate">Генерация случайного числа</h1>
        <form method="post" class="form-generate">
            <button type="submit" class="btn-generate btn btn-primary">Сгенерировать число</button>
        </form>
        <table class="table table-generate">
            <thead>
                <tr>
                    <th>id</th>
                    <th>number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php if (isset($data)): ?>
                        <td><?= $data['id'] ?></td>
                        <td><?= $data['number'] ?></td>
                    <?php endif; ?>
                </tr>
            </tbody>
        </table>
    </body>
</html>


