<?php
// login.php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id, username, password FROM userdata WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            $_SESSION['is_admin'] = $is_admin;
            header("Location: home.php");
            exit();
        } else {
            
            echo "Pogrešni unos.";
        }
    } else {
        echo "Korisnik sa unesenom adresom nije prepoznat.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava</title>
    <link rel="stylesheet" href="styles/login_register.css">
</head>
<body>
    <div class="form-container">
        <h2>PRIJAVA</h2>
        <form method="POST" action="">
            <div>
                <input type="email" name="email" id="email-input" placeholder="Email adresa" required>
                <input type="password" name="password" id="password-input" placeholder="Lozinka" required>
                <br>
                <button type="submit">Prijava</button>
            </div>
        </form>
        <p>Nemate račun? <a href="register.php">Registrirajte se ovdje</a></p>
    </div>
</body>
</html>
