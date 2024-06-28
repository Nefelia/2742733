<?php
$Username = $_POST["Username"];
$UserEmail = $_POST ["Username"];

echo $Username;
echo $UserEmail;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: <?php echo $_GET["color"]?>
    }
</style>
<body>
    <form action="" method="GET">
        <label for="username">Username</label>
        <input type="text" placeholder="Username..." name="Username">
        <br>

        <label for="userEmail" required>UserEmail</label>
        <input type="text" placeholder="UserEmail..." required name="UserEmail">
        <br>

        <label for="color">color</label>
        <input id=color type="text" placeholder="color..." name="color">
        <button type="submit">Enviar</button>
        <br>
    </form>
</body>
</html>