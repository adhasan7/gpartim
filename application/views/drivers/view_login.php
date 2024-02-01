<!-- application/views/login_view.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Include any additional CSS styles or links here -->
</head>
<body>

    <div>
        <h2>Login</h2>
        <?php echo form_open('drivers/process'); ?>
        
        <label for="username">Username:</label>
        <input type="text" name="username" name="post" required>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        
        <button type="submit">Login</button>
        
        <?php echo form_close(); ?>
    </div>

    <!-- Include any additional scripts or links here -->

</body>
</html>
