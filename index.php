<?php
if (isset($_GET['message'])) {
    echo "<script>alert('" . htmlspecialchars($_GET['message']) . "');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/hom.css">
</head>
<body>
    <div class="text">
        <h1>
            Om Swastyastu
        </h1>
        <h2> 
            Yadnya <span>Kremasi</span>
        </h2>
        <a href="login.php">Click here</a>
    </div>
</body>
</html>