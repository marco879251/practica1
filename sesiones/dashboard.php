<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include('includes/header.php'); ?>
    <div class="container mt-5">
        <h2>Bienvenido, <?php echo $_SESSION['username']; ?></h2>
        <p>Contenido protegido.</p>
        <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
    </div>
    <?php include('includes/footer.php'); ?>
</body>
</html>
