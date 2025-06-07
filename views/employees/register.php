<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Employee</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Register Employee</h1>
        <form action="/employee-mvc-app/public/index.php?action=register" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="baseSalary">Base Salary:</label>
                <input type="number" id="baseSalary" name="baseSalary" required>
            </div>
            <div class="form-group">
                <label for="commissionPct">Commission Percentage:</label>
                <input type="number" id="commissionPct" name="commissionPct" step="0.01" required>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>