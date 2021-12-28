<?php
use Thomd729\Random\NumberRecipient;

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $data = NumberRecipient::retrieve($id, $pdo);

    if (empty($data)) {
        $error = 'Нет числа с таким id';
    }
} else {
    $error = 'Поле пустое или было введено не число';
}

