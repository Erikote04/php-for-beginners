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
        "12 Rules For Life",
        "Beyond Order",
        "Atomic Habits"
    ]
    ?>
    <h1>Recommended Books</h1>
    <ul>
        <?php
        foreach ($books as $book) {
            echo "<li> $book </li>";
        }
        ?>
    </ul>
</body>

</html>