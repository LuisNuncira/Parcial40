<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar empleados</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Registrar empleados</h1>
        <form action="/Parcial40/index.php?action=register" method="POST">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="baseSalary">Salario base:</label>
                <input type="number" id="baseSalary" name="baseSalary" required>
            </div>
            <div class="form-group">
                <label for="commissionPct">Porcentaje de comision:</label>
                <input type="number" id="commissionPct" name="commissionPct" step="0.01" required>
            </div>
            <button type="submit">Registrar</button>
        </form>
    </div>
</body>
</html>