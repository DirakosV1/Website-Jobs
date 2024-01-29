<?php
    $erreur = "";

    session_start() ;

    if(isset($_POST["buttonregister"])){
        if(isset($_POST['email']) && isset($_POST['password'])) {
            $email = htmlspecialchars($_POST['email']);  
            $password = htmlspecialchars($_POST['password']);  

            $nom_serveur = "localhost";
            $utilisateur = "root";
            $mot_de_passe = "";
            $nom_base_donnees = "shop";
            $con = mysqli_connect($nom_serveur, $utilisateur, $mot_de_passe, $nom_base_donnees);

            $stmt = mysqli_prepare($con, "SELECT * FROM users WHERE email=? AND password=?");
            mysqli_stmt_bind_param($stmt, "ss", $email, $password);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            if(mysqli_stmt_num_rows($stmt) > 0){
                echo '<script>window.location.href = "welcome.php";</script>';
                $_SESSION['email'] = $email ;
                exit();
    
            } else {
                $erreur = "Adresse email ou mot de passe incorrects !";
            }
            
            mysqli_stmt_close($stmt);
            mysqli_close($con);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Web Zephyr Designer</title>
    <link rel="stylesheet" href="connection.css">
</head>

<body>
    
    <header class="header">
        <a href="../index/index.html" class="logo">Web Zephyr Designer</a>
        <i class='bx bx-menu'></i>
            <nav class="navbar">
                <a href="../index/index.html" class="categorie">Accueil</a>
                <a href="#" class="categorie">Services</a>
                <a href="#" class="categorie">A propos</a>
                <a href="./connection.php" class="categorie">Connexion</a>
            </nav>
    </header>


    <div class="login-light"></div>
    <div class="login-box">
        <form action="" method="POST">
            <div class="light"></div>

            <h2>Login</h2>

            <?php
                if(isset($erreur)) {
                    echo "<p class='erreur-message'>" . htmlspecialchars($erreur) . "</p>";
                }
            ?>

            <div class="input-box">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
                <input type="email" name="email" required>
                <label>Email</label>
                <div class="input-line"></div>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" name="password" required>
                <label>Password</label>
                <div class="input-line"></div>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button class="buttonregister" type="submit" name="buttonregister">Login</button>
            <div class="register-link">
                <p>Don't have an account? <a href="#">Register</a></p>
            </div>
        </form>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>