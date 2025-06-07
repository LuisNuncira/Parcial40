
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
   <link rel="stylesheet" href="/Parcial40/public/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Lista de empleados</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Salario Base</th>
                    <th>Porcentaje de comision</th>
                    <th>Salario total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?php echo htmlspecialchars($employee->getId()); ?></td>
                    <td><?php echo htmlspecialchars($employee->getName()); ?></td>
                    <td><?php echo htmlspecialchars($employee->getBaseSalary()); ?></td>
                    <td><?php echo htmlspecialchars($employee->getCommissionPct()); ?>%</td>
                    <td><?php echo htmlspecialchars($employee->calculateTotalSalary()); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="/Parcial40/index.php?action=register">Registrar nuevo empleado</a>
    </div>
</body>
</html>