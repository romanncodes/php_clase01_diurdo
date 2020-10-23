<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="index.php">Home</a>
    <h1>Formularios en PHP</h1>

    <form action="controllers/Controlador.php" method="POST">
        <input type="text" name="nombre" placeholder="Tu Nombre">
        <br>
        <input type="text" name="edad" placeholder="Edad">
        <br>
        <button>Saludar</button>
    </form>

    <p>
        <?php
        session_start();
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>

    </p>



</body>

</html>