<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Válido</title>
</head>
<body>
    <form method="post" action="">
        <label for="email">Coloque uma email:</label>
        <input type="text" name="email" id="email" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            
            function validaEmail($email) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    return "<h1>O email é valido</h1>";
                } else {
                    return "<h1>o email é invalido</h1>";
                }
            }
           
            echo validaEmail($email);
        }
    ?>
</body>
</html>