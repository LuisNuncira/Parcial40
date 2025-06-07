<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de gestión de empleados</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>Sistema de gestión de empleados</h1>
        <nav>
            <ul>
                <li><a href="/Parcial40/index.php?action=register">Registrar empleado</a></li>
                <li><a href="/Parcial40/index.php?action=list">Listar empleado</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php include($view); ?>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Sistema de gestión de empleados</p>
    </footer>
</body>
</html>