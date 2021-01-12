<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actors</title>
</head>
<body>
    <?php
    foreach ($actors as $actor) {?>
        <li><?= $actor->getFirst_name()?></li>
        <li><?= $actor->getLast_name()?></li>
        <?php } ?>
</body>
</html>