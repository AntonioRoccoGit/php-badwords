<?php
$text = $_GET['text'];
$censored_word = $_GET['censored'];
$censored = "***";
$text_censord = str_replace($censored_word, $censored, $text);
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
    <p>
        <?php
        echo "$text $censored_word";
        ?>
    </p>
    <p>
        <?php
        echo $text_censord;

        ?>
    </p>
</body>

</html>