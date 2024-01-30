<?php
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
    <title>S'enregistrer | Web Zephyr Designer</title>
    <link rel="stylesheet" href="./inscription.css">
</head>

<body>
    
    <header class="header">
        <a href="../index/index.html" class="logo">Web Zephyr Designer</a>
        <i class='bx bx-menu'></i>
            <nav class="navbar">
                <a href="../index/index.html" class="categorie">Accueil</a>
                <a href="../index/index.html#Services" class="categorie">Services</a>
                <a href="../index/index.html#Apropos" class="categorie">A propos</a>
                <a href="../connection/connection.php" class="categorie">Connexion</a>
            </nav>
    </header>

    <div class="login-light"></div>
    <div class="login-box">
        <form action="" method="POST">
            <div class="light"></div>

            <h2>Créer un compte</h2>

            <?php
    if (isset($_POST["buttonregister"])) {
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["repeat_password"];

    // Hachage du mot de passe
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();

    // Vérifier si tous les champs sont remplis
    if (empty($firstName) OR empty($lastName) OR empty($phone) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
        array_push($errors, "<div class='erreur-message'>Veuillez remplir toutes les cases !</div>");
    }

    // Valider le format de l'email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "<div class='erreur-message'>Email invalide</div>");
    }

    // Vérifier la longueur du mot de passe
    if (strlen($password) < 8) {
        array_push($errors, "<div class='erreur-message'>Le mot de passe doit contenir au moins 8 caractères !</div>");
    }

    // Vérifier si les mots de passe correspondent
    if ($password !== $passwordRepeat) {
        array_push($errors, "<div class='erreur-message'>Les mots de passe ne correspondent pas !</div>");
    }

    // Vérifier si l'email est déjà utilisé
    require_once "../database.php";
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $rowCount = mysqli_num_rows($result);

        if ($rowCount > 0) {
            array_push($errors, "Cet email est déjà utilisé !");
        }

        // Afficher les erreurs s'il y en a, sinon insérer l'utilisateur dans la base de données
        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
        } else {
            $sql = "INSERT INTO users (prenom, nom, email, numero, password) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($stmt, $sql)) {
                mysqli_stmt_bind_param($stmt, "sssss", $firstName, $lastName, $email, $phone, $passwordHash);
                mysqli_stmt_execute($stmt);
                header("Location: ../users_connect/index.php");
            } else {
                die("Une erreur s'est produite");
            }
        }
    }
}
?>

            <div class="input-box">
                <span class="icon">
                    <ion-icon name="body"></ion-icon>
                </span>
                <input type="text" name="firstname" required>
                <label>Prénom</label>
                <div class="input-line"></div>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="happy"></ion-icon>
                </span>
                <input type="text" name="lastname" required>
                <label>Nom</label>
                <div class="input-line"></div>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
                <input type="text" name="email" required>
                <i class="uil uil-envelope email-icon"></i>
                <label>Email</label>
                <div class="input-line"></div>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="call"></ion-icon>
                </span>
                <input type="tel" name="phone" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" required>
                <label>Numéro de téléphone</label>
                <div class="input-line"></div>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" name="password" required>
                <label>Mot de passe</label>
                <div class="input-line"></div>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" name="repeat_password" required>
                <label>Confirmer le mot de passe</label>
                <div class="input-line"></div>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">  Se souvenir</label>
                <a href="#">Mot de Passe oublié ?</a>
            </div>
            <button class="buttonregister" type="submit" name="buttonregister">S'enregistrer</button>
            <div class="register-link">
                <p>Déjà un compte ? <a href="../connection/connection.php">Se connecter</a></p>
            </div>
        </form>
    </div>
                
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>