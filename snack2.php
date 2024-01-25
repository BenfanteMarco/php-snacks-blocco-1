<?php
if(isset($_GET['nome']) && isset($_GET['mail']) && isset($_GET['eta'])){
    $name = $_GET['nome'];
    $email = $_GET['mail'];
    $eta = $_GET['eta'];

    if(strlen($name) > 3 && str_contains($email, '@') && str_contains($email, '.') && is_numeric($eta)){
        echo "Accesso riuscito";
    }
    else{
        echo "Accesso negato";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Snack2</title>
</head>
<body>
    <form action="snack2.php" method="GET">
        <input type="text" name="nome" id="nome">
        <input type="text" name="mail" id="mail">
        <input type="text" name="eta" id="eta">
        <button type="submit">send</button>
    </form>
</body>
</html>