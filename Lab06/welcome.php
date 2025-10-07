<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include 'header.inc'; ?>

<h2>Welcome Page</h2>
<p>Welcome, <strong><?php echo htmlspecialchars($_SESSION['user']); ?></strong>!</p>

<form action="logout.php" method="POST">
    <button type="submit">Logout</button>
</form>

<?php include 'footer.inc'; ?>
