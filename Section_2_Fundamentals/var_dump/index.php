<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Var_dump</title>
</head>

<body>
    <h1><?php
        $balance = 100;

        echo '<pre>';
        var_dump($balance);
        echo '</pre>';

        $message = 'Insufficient balance';

        echo '<pre>';
        var_dump($message);
        echo '</pre>';

        $message = 'Dump and die example';

        echo '<pre>';
        var_dump($message);
        echo '</pre>';
        die();

        echo 'After calling the die function';
        ?></h1>
</body>

</html>