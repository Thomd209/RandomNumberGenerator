<?php
use Thomd729\Random\NumberGenerator;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number = generateNumber();
    $date = generateDate();
    add($number, $date, $pdo);

    $numberGenerator = new NumberGenerator($number);
    $data = $numberGenerator->generate($pdo);
}

function generateNumber(): int
{
    return rand(0, 1000);
}

function generateDate(): string
{
    $date = new DateTime('now', new DateTimeZone('Europe/Moscow'));
    return $date->format('Y-m-d H:i:s');
}

function add(int $number, string $date, object $pdo): void
{
    $query = 'INSERT INTO number (number, datetime) VALUES (?, ?)';
    $stmt = $pdo->prepare($query);
    $stmt->execute([$number, $date]);
}

