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

<style>
    p {
        margin-top: 1rem;
        line-height: 1.4rem;
    }

    .spazio {
        margin-left: 2rem;
        background-color: lightcoral;
        padding: .4rem;
        border-radius: 10px;
    }
</style>

<body>
    <h2>Testo Originale</h2>
    <p>
        <?php
        echo $text;
        ?>
        <span class="spazio">
            <?php
            echo "Il paragrafo è lungo: " . strlen($text) . " caratteri";
            ?>
        </span>
    </p>
    <h2>Teso censurato</h2>
    <p>
        <?php
        echo $text_censord;

        ?>
        <span class="spazio">
            <?php
            echo "Il nuovo paragrafo è lungo: " . strlen($text_censord) . " caratteri";
            ?>
        </span>
    </p>
</body>

</html>