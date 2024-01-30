<?php
// Configuration de la base de données
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "shop";

// Connexion à la base de données
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Vérification de la connexion
if (!$conn) {
    die("Erreur de connexion à la base de données: " . mysqli_connect_error());
}

// Démarrage de la session
session_start();
if (isset($_SESSION["user"])) {
    header("Location: ../users_connect/index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | Web Zephyr Designer</title>
    <link rel="stylesheet" href="connection.css">
</head>

<body>
    
    <header class="header">
        <a href="../index/index.html" class="logo">Web Zephyr Designer</a>
        <i class='bx bx-menu'></i>
            <nav class="navbar">
                <a href="../index/index.html" class="categorie">Accueil</a>
                <a href="../index/index.html#Services" class="categorie">Services</a>
                <a href="../index/index.html#Apropos" class="categorie">A propos</a>
                <a href="./connection.php" class="categorie">Connexion</a>
            </nav>
    </header>


    <div class="login-light"></div>
    <div class="login-box">
        <form action="" method="POST">
            <div class="light"></div>

            <h2>Connexion</h2>

            <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "../database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: ../users_connect/index.php");
                    die();
                }else{
                    echo "<div class='erreur-message'>Mot de passe invalide</div>";
                }
            }else{
                echo "<div class='erreur-message'>Email Introuvable</div>";
            }
        }
?>

            <div class="input-box">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
                <input type="text" name="email" required>
                <label class="babel">Email</label>
                <div class="input-line"></div>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" name="password" required>
                <label class="babel">Mot de Passe</label>
                <div class="input-line"></div>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">  Se souvenir</label>
                <a href="#">Mot de Passe oublié ?</a>
            </div>
            <button class="buttonregister" type="submit" value="login" name="login">Login</button>
            <div class="register-link">
                <p>Pas de compte ? <a href="../inscription/inscription.php">S'enregistrer</a></p>
            </div>
        </form>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>