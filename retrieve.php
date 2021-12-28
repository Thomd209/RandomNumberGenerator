<?php
require_once 'classes/NumberRecipient.php';
require_once 'index.php';
require_once 'number/retrieve.php';
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
        <a href="generate.php" class="link-search">Сгенерировать число</a>
        <h1 class="title-search">Поиск числа по id</h1>
        <form method="get" class="form-search">
            <label for="id">Найти сгенерированное число:</label>
            <input type="text" name="id" id="id">
            <button type="submit" class="btn-search btn btn-dark">Найти число</button>
        </form>
        <table class="table table-search">
            <thead>
            <tr>
                <th>number</th>
                <th>Date and time</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <?php if (!empty($data)): ?>
                        <td><?= $data['number'] ?></td>
                        <td><?= $data['datetime'] ?></td>
                    <?php endif; ?>
                </tr>
            </tbody>
        </table>
        <?php if (!empty($error) && !empty($_GET)): ?>
            <span class="error"><?= $error ?></span>
        <?php endif; ?>
    </body>
</html>
