<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Password</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to the external CSS file -->
</head>
<body>
    <div class="form-container">
        <h2>Enter the Password</h2>
        <form action="validate_password.php" method="POST">
            <input type="password" name="password" required>
            <button type="submit">Enter</button>
        </form>
        <?php
        if (isset($_GET['error']) && $_GET['error'] == 'true') {
            echo '<p>Try Again</p>';
        }
        ?>
    </div>
</body>
</html>
