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
            'purchaseURL' => 'https://example.com'
        ],
        [
            'title' => 'Atomic Habits',
            'author' => 'James Clear',
            'purchaseURL' => 'https://example.com'
        ],
    ]
        ?>
    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <a href="<?= $book['purchaseURL'] ?>">
                    <?= $book['title'] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>