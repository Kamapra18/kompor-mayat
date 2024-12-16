<?php
session_start();
include "servis/database.php"; 

$register_message = ""; 
if (isset($_SESSION["is_login"])) {
    header("location: dashboard.php");
    exit();
}

if (isset($_POST['register'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username) || empty($password)) {
        $register_message = "Username dan password tidak boleh kosong!";
    } else {
        try {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $db->prepare("INSERT INTO users (username, password, create_at) VALUES (?, ?, NOW())");
            $stmt->bind_param("ss", $username, $hashed_password);


            if ($stmt->execute()) {
                $register_message = "Daftar Akun Berhasil, Silahkan Login";
            } else {

                if ($db->errno === 1062) {
                    $register_message = "Username sudah digunakan.";
                } else {
                    $register_message = "Terjadi kesalahan: " . $stmt->error;
                }
            }

            $stmt->close(); 
        } catch (Exception $e) {
            $register_message = "Kesalahan sistem: " . $e->getMessage();
        }
    }
}

$db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <header class="container">
        <h3>
            YADNYA <span>KREMASI</span>
        </h3>
        <div class="logo">
            <!-- <img src="logo.png" alt="Logo"> -->
        </div>
        <div class="nav">
            <a href="index.php">Back</a>
        </div>
    </header>
    <div class="wrapper">
        <div class="login-box">
            <div class="login-header">
                <span>Sign Up</span>
            </div>
            <?php if (!empty($register_message)): ?>
                <div class="error-message">
                    <?= htmlspecialchars($register_message) ?>
                </div>
            <?php endif; ?>
            <form action="" method="POST">
                <div class="input-box">
                    <input type="text" name="username" id="user" class="input-field" required>
                    <label for="user" class="label">username</label>
                    <i class="fa-regular fa-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" id="pass" class="input-field" required>
                    <label for="pass" class="label">Password</label>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="remember-forgot">
                    <div class="remember-me">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                </div>
                <div class="input-box">
                    <button type="submit" name="register" class="input-sumbit" value="register">Sign Up</button>
                </div>
                <div class="register">
                    <span>have an account? <a href="login.php">Login</a></span>
                </div>
            </form>
        </div>
    </div>

</body>
</html>