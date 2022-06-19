<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo - XSS</title>
</head>
<body>
    <h1>Exemplo - XSS</h1>
    <form method="post">
        <h3>Submete um script de alert: (alert('XSS TEST')) para o formulário.</h3>
        <input
            width="200"
            type="text"
            value="<script>alert('XSS TEST')</script>"
            placeholder="alert('XSS TEST')"
            name="xss-test">
        <button type="submit">Enviar XSS</button>
    </form>

    <hr>

    <h1>Exemplo - Evitando XSS</h1>
    <form method="post">
        <h3>Submete um script de alert: (alert('XSS TEST')) para o formulário.</h3>
        <h3>Evita que o script XSS seja executado.</h3>
        <input
            width="200"
            type="text"
            value="<script>alert('XSS TEST')</script>"
            placeholder="alert('XSS TEST')"
            name="no-xss-test">
        <button type="submit">Enviar XSS</button>
    </form>
</body>
</html>


<?php
if (isset($_POST['xss-test'])) {
    echo $_POST['xss-test'];
}

if (isset($_POST['no-xss-test'])) {
    echo "<b>Removendo as tags do html e do php de uma string</b> <br>";
    echo strip_tags($_POST['no-xss-test'], "<strong><a>");

    echo "<br><br><b>Convertendo todos os caracteres da string em entidades HTML</b> <br>";
    echo htmlentities($_POST['no-xss-test']);
}
?>