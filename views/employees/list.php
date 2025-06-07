<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Employee List</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Base Salary</th>
                    <th>Commission Percentage</th>
                    <th>Total Salary</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?php echo htmlspecialchars($employee->id); ?></td>
                    <td><?php echo htmlspecialchars($employee->name); ?></td>
                    <td><?php echo htmlspecialchars($employee->baseSalary); ?></td>
                    <td><?php echo htmlspecialchars($employee->commissionPct); ?>%</td>
                    <td><?php echo htmlspecialchars($employee->calculateTotalSalary()); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="register.php">Register New Employee</a>
    </div>
</body>
</html>