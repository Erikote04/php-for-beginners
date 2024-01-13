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

    function filterByAuthor($books, $author) {
        $filteredBooks = [];
        foreach ($books as $book) {
            if ($book['author'] === $author) {
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    }
    ?>

    <ul>
        <?php foreach (filterByAuthor($books, 'Jordan B. Peterson') as $book): ?>
            <li>
                <a href="<?= $book['purchaseURL'] ?>">
                    <?= $book['title'] ?> (<?= $book['releaseYear'] ?>) 
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>