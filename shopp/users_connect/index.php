<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: ../connection/connection.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <title>Home | Web Zephyr Designer</title>
</head>
<body>
    
<!---------------------- BARRE DE NAVIGATION ------------------------>
    
    <header class="header">
        <a href="./index.php" class="logo">Web Zephyr Designer</a>
        <i class='bx bx-menu'></i>
            <nav class="navbar">
                <a href="./index.php" class="categorie">Accueil</a>
                <a href="#Services" class="categorie">Services</a>
                <a href="#Apropos" class="categorie">A propos</a>
                <a href="../logout.php" class="categorie">Logout</a>
            </nav>
    </header>


    <div id="nav_secure"></div>
    <br id="Services">
    <div id="price_section">
        <section class="first_section">
            <div class="pricing-area">
                <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-pricing">
                            <div class="deal-type">standard</div>
                            <div class="deal-amount">
                                <div class="price">                            
                                    <span class="money"><sup>$</sup>19</span>
                                </div>
                                <h4>/year</h4>
                            </div>
                            <ul class="single-deal">
                                <li>50GB Disk Space</li>
                                <li>50 Email Accounts</li>
                                <li>50GB Monthly Bandwidth</li>
                                <li>50 Domains</li>
                                <li>Unlimited Subdomains</li>
                            </ul>
                            <a class="btn">sign up</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-pricing">
                            <div class="deal-type">business</div>
                            <div class="deal-amount">
                                <div class="price">                            
                                    <span class="money"><sup>$</sup>39</span>
                                </div>
                                <h4>/year</h4>
                            </div>
                            <ul class="single-deal">
                                <li>50GB Disk Space</li>
                                <li>50 Email Accounts</li>
                                <li>50GB Monthly Bandwidth</li>
                                <li>50 Domains</li>
                                <li>Unlimited Subdomains</li>
                            </ul>
                            <a class="btn">sign up</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-pricing">
                            <div class="deal-type">premium</div>
                            <div class="deal-amount">
                                <div class="price">                            
                                    <span class="money"><sup>$</sup>59</span>
                                </div>
                                <h4>/year</h4>
                            </div>
                            <ul class="single-deal">
                                <li>50GB Disk Space</li>
                                <li>50 Email Accounts</li>
                                <li>50GB Monthly Bandwidth</li>
                                <li>50 Domains</li>
                                <li>Unlimited Subdomains</li>
                            </ul>
                            <a class="btn">sign up</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>


<!-- AVIS -->
        <br id="Apropos">
        <div id="avis_section">
            <section class="propos">
                <div class="swiper mySwiper container">
                    <div class="swiper-wrapper content">
                        <div class="swiper-slide card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="../picture/luffy.jpeg" alt="">
                                </div>
                                <div class="social-media">
                                    <i class="fa-brands fa-instagram"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                    <i class="fa-brands fa-github"></i>
                                </div>
                                <div class="name-profession">
                                    <span class="name">Esteban SANCHEZ</span>
                                    <span class="profession">Bachelor Cybersécurité et Etical Hacking</span>
                                </div>
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="button">
                                    <button class="A propos">A propos</button>
                                    <button class="Me recruter">Me recruter</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="../picture/luffy.jpeg" alt="">
                                </div>
                                <div class="social-media">
                                    <i class="fa-brands fa-instagram"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                    <i class="fa-brands fa-github"></i>
                                </div>
                                <div class="name-profession">
                                    <span class="name">Ricardo ROSMANINHO HENRIQUES</span>
                                    <span class="profession">Developpeur WEB</span>
                                </div>
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="button">
                                    <button class="aboutMe">A propos</button>
                                    <button class="hireMe">Me recruter</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="../picture/luffy.jpeg" alt="">
                                </div>
                                <div class="social-media">
                                    <i class="fa-brands fa-instagram"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                    <i class="fa-brands fa-github"></i>
                                </div>
                                <div class="name-profession">
                                    <span class="name">Nassim TOUFFAHI</span>
                                    <span class="profession">Bachelor Cybersécurité et Etical Hacking</span>
                                </div>
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="button">
                                    <button class="aboutMe">A propos</button>
                                    <button class="hireMe">Me recruter</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="../picture/luffy.jpeg" alt="">
                                </div>
                                <div class="social-media">
                                    <i class="fa-brands fa-facebook"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                    <i class="fa-brands fa-github"></i>
                                </div>
                                <div class="name-profession">
                                    <span class="name">Someone Name</span>
                                    <span class="profession">Web Developer</span>
                                </div>
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="button">
                                    <button class="aboutMe">About Me</button>
                                    <button class="hireMe">Hire Me</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="../picture/luffy.jpeg" alt="">
                                </div>
                                <div class="social-media">
                                    <i class="fa-brands fa-facebook"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                    <i class="fa-brands fa-github"></i>
                                </div>
                                <div class="name-profession">
                                    <span class="name">Someone Name</span>
                                    <span class="profession">Web Developer</span>
                                </div>
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="button">
                                    <button class="aboutMe">About Me</button>
                                    <button class="hireMe">Hire Me</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="../picture/luffy.jpeg" alt="">
                                </div>
                                <div class="social-media">
                                    <i class="fa-brands fa-facebook"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                    <i class="fa-brands fa-github"></i>
                                </div>
                                <div class="name-profession">
                                    <span class="name">Someone Name</span>
                                    <span class="profession">Web Developer</span>
                                </div>
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="button">
                                    <button class="aboutMe">About Me</button>
                                    <button class="hireMe">Hire Me</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="../picture/luffy.jpeg" alt="">
                                </div>
                                <div class="social-media">
                                    <i class="fa-brands fa-facebook"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                    <i class="fa-brands fa-github"></i>
                                </div>
                                <div class="name-profession">
                                    <span class="name">Someone Name</span>
                                    <span class="profession">Web Developer</span>
                                </div>
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="button">
                                    <button class="aboutMe">About Me</button>
                                    <button class="hireMe">Hire Me</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="../picture/luffy.jpeg" alt="">
                                </div>
                                <div class="social-media">
                                    <i class="fa-brands fa-facebook"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                    <i class="fa-brands fa-github"></i>
                                </div>
                                <div class="name-profession">
                                    <span class="name">Someone Name</span>
                                    <span class="profession">Web Developer</span>
                                </div>
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="button">
                                    <button class="aboutMe">About Me</button>
                                    <button class="hireMe">Hire Me</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="../picture/luffy.jpeg" alt="">
                                </div>
                                <div class="social-media">
                                    <i class="fa-brands fa-facebook"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                    <i class="fa-brands fa-github"></i>
                                </div>
                                <div class="name-profession">
                                    <span class="name">Someone Name</span>
                                    <span class="profession">Web Developer</span>
                                </div>
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="button">
                                    <button class="aboutMe">About Me</button>
                                    <button class="hireMe">Hire Me</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                
            </section>
        
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script src="index.js"></script>
        </div>
    </div>

