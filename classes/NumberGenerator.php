<?php

namespace Thomd729\Random;

class NumberGenerator
{
    private int $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function generate(object $pdo): array
    {
        $query = 'SELECT id, number FROM number WHERE number = ?';
        $stmt = $pdo->prepare($query);
        $stmt->execute([$this->number]);

        return $stmt->fetch();
    }
}