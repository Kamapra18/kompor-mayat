<?php
session_start();
include "servis/database.php";
$login_massage = "";

if (isset($_SESSION["is_login"])) {
    header("location: dashboard.php");
    exit();
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        if (password_verify($password, $data["password"])) {
            $_SESSION["username"] = $data["username"];
            $_SESSION["user_id"] = $data["id"]; 
            $_SESSION["is_login"] = true;

            header("location: dashboard.php");
            exit();
        } else {
            $login_massage = "Akun tidak ditemukan";
        }
    } else {
        $login_massage = "Akun tidak ditemukan";
    }
    $stmt->close();
    $db->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
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
                <span>Login</span>
            </div>
            <?php if (!empty($login_massage)): ?>
                <div class="error-message">
                    <?= htmlspecialchars($login_massage) ?>
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
                    <div class="forgot">
                        <a href="#">Forgot password?</a>
                    </div>
                </div>
                <div class="input-box">
                    <button type="submit" name="login" class="input-sumbit" value="Login">Login</button>
                </div>
                <div class="register">
                    <span>Don't have an account? <a href="register.php">Register</a></span>
                </div>
            </form>
        </div>
    </div>

</body>
</html>