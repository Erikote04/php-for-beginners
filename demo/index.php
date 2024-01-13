<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>

<body>
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

    function filter($items, $fn) {
        $filteredItems = [];
        foreach ($items as $item) {
            if ($fn($item)) {
                $filteredItems[] = $item;
            }
        }
        return $filteredItems;
    }

    $filteredBooks = array_filter($books, function($book) {
        return $book['author'] === 'Jordan B. Peterson';
    });
    ?>

    <ul>
        <?php foreach ($filteredBooks as $book): ?>
            <li>
                <a href="<?= $book['purchaseURL'] ?>">
                    <?= $book['title'] ?> (<?= $book['releaseYear'] ?>) 
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>