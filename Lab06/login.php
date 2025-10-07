<?php include 'header.inc'; ?>

<h2>Login Page</h2>

<form action="process.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br><br>

    <!-- Hidden field -->
    <input type="hidden" name="token" value="Y1234567"> <!-- first initial + student ID -->

    <input type="submit" value="Login">
</form>

<?php include 'footer.inc'; ?>