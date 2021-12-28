<?php

namespace Thomd729\Random;

class NumberRecipient
{
    public static function retrieve(int $id, object $pdo)
    {
        $query = 'SELECT number, datetime FROM number WHERE id = ?';
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);

        return $stmt->fetch();
    }
}