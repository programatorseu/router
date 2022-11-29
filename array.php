<?php
function filter($array, $fn)
{

    $filtered = [];
    foreach ($array as $element) {
        if ($fn($element)) {
            $filtered[] = $element;
        }
    }
    return $filtered;
}

$teams = [
    [
        "name" => "Boston Celtics",
        "location" => "Boston"
    ],
    [
        "name" => "Cleveland Cavaliers",
        "location" => "Cleveland"
    ],
    [
        "name" => "Los Angeles Clippers",
        "location" => "Los Angeles"
    ],

    [
        "name" => "Los Angeles Lakers",
        "location" => "Los Angeles"
    ]
];
$filtered = filter($teams, function ($team) {
    return $team["location"] === "Cleveland";
});


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Nba Teams</h1>

    <ul>
        <?php foreach ($filtered as $team) : ?>
            <li><?= $team['name'] . ' and location is : ' . $team['location']; ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>