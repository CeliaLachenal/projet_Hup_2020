<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- precise a google qu'on est en mobile first -->
    <meta name="description">

    <title><?php echo $title; ?></title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/styles/styleHeaderHup2020.css">
    <link rel="stylesheet" href="/styles/styleIndexHup2020.css">
    <link rel="stylesheet" href="/styles/style_footer.css">
    <link rel="stylesheet" href="/styles/style_espace_client.css">
    <link rel="stylesheet" href="/styles/page_perso.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/png/faviconHup2020.png" />

    <!-- <link rel="stylesheet" href="styleContact.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!--permet le chargement d'une bibliotèque de fonts donc DOIT être placé dans le head et non avant la fermeture du body -->
    <script src="https://kit.fontawesome.com/ebc882e978.js" crossorigin="anonymous"></script> 
</head>




<body>
    <header>
        <!-- boutons réseaux sociaux et menu burger-->
        <nav id="menuHeader">
            <!-- logo -->
            <a id="logoHeader" href="index.php"><img src="images/png/29.02.20logo_hup_bleu_gris.png" alt="Logo H'up"></a>


            <div class="toggle_btn">
                <span></span>
            </div>

            <nav class="menu nav">
                <a href="index.php">Accueil</a>
                <a href="produit.php">Le H'up One</a>
                <a href="application.php">L'appli</a>
                <a href="entreprise.php">H'up</a>
                <a href="index.php#decoupeBlc">Contact</a>
                <a href="espaceClient.php">Espace client</a>

                <?php
                    if (isset($_SESSION['idClient'])){
                        echo '<a href="deconnexion.php">Déconnexion</a>';
                            };
                ?>

                <section id="SocialMedia">
                    <a target="_blank" href="https://www.linkedin.com/in/celia-lachenal-web-developpeur"><i class="fab fa-linkedin-in"></i></a>
                    <a target="_blank"  href="https://www.facebook.com/celia.lachenal"><i class="fab fa-facebook-f"></i></a>
                    <a target="_blank" href="https://www.instagram.com/celialachenal/?hl=fr"><i class="fab fa-instagram"></i></a>
                    <a target="_blank" href="https://www.youtube.com/?hl=fr&gl=FR"><i class="fab fa-youtube"></i></a>
                </section>
                            
            </nav> 
        </nav> <!--fermeture boutonsRéseaux -->
            
                    
        
    </header>
