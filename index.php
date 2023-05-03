<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="resources/form_handler.php" method="get">
        <label for="text">Testo da censurare</label>
        <textarea name="text" id="text" cols="30" rows="8" placeholder="Qui puoi inserire il tuo testo.."></textarea>
        <label for="censorde">Inserire la parola da censurare</label>
        <input type="text" id="censored" name="censored" placeholder="ES: inserire">
        <button type="submit">CENSURALA</button>
    </form>

</body>

</html>