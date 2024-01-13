<?php
$books = [
    [
        'title' => '12 Rules for Life',
        'author' => 'Jordan B. Peterson',
        'releaseYear' => 2018,
        'purchaseURL' => 'https://example.com'
    ],
    [
        'title' => 'Beyond Order',
        'author' => 'Jordan B. Peterson',
        'releaseYear' => 2021,
        'purchaseURL' => 'https://example.com'
    ],
    [
        'title' => 'Atomic Habits',
        'author' => 'James Clear',
        'releaseYear' => 2018,
        'purchaseURL' => 'https://example.com'
    ],
];

function filter($items, $fn)
{
    $filteredItems = [];
    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
}

$filteredBooks = array_filter($books, function ($book) {
    return $book['author'] === 'Jordan B. Peterson';
});

require "index.view.php";