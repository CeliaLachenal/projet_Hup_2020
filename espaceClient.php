<?php
session_start();

if(isset($_SESSION['idClient'])){
    header('Location:pagePerso.php');
}

require("connexion.php");
$message='';

$title = "Connexion";
include("header.php");

//inscription
if (isset($_POST["inscription_envoyer"])){
    $civilite = htmlspecialchars($_POST["civilite"]);
    $nom = htmlspecialchars($_POST["lastname"]);
    $prenom = htmlspecialchars($_POST["firstname"]);
    $societe = htmlspecialchars($_POST["company"]);
    $mail = htmlspecialchars($_POST["mail"]);
    $telephone = htmlspecialchars($_POST["phone"]);
    $mdp = password_hash(htmlspecialchars($_POST["mdp"]), PASSWORD_DEFAULT);

    //je test si le mail est déja en bdd
    $sql_test= 'SELECT * FROM clients WHERE mail = :mail';
    $test = $base -> prepare($sql_test);
    $test -> execute(array(':mail'=> $mail));
    $count = $test -> rowCount();

    if ($count === 0){
        // si le mail n'est pas présent en bdd j'ajoute la personne
        //je mets en place ma requête préparée pour insérer un nouveau client

    $sql= 'INSERT INTO clients (civilite, nom, prenom, societe, mail, tel, mdp) VALUES (:civilite, :nom, :prenom, :societe, :mail, :tel, :mdp)';
    $insert= $base -> prepare($sql);
    $insert->execute(array(':civilite' => $civilite, ':nom' => $nom, ':prenom' => $prenom, 'societe' => $societe, ':mail' => $mail, ':tel' => $telephone, ':mdp' => $mdp));

    }
    else{
        $message = 'une personne est déjà enregistrée sous ce mail';
    }  

}


//connexion

if (isset($_POST["connexion_envoyer"])){
    $mail = htmlspecialchars($_POST["mail"]);
    $mdp = htmlspecialchars($_POST["mdp"]);
    $sql = 'SELECT id,mail, mdp FROM clients WHERE mail = :mail';
    $connect = $base -> prepare($sql);
    $connect -> execute(array(':mail'=> $mail));
    $resultat = $connect->fetch();

    if(!$resultat OR !password_verify($mdp, $resultat['mdp'])){
        $message = 'connexion echec';
    }
    else{
        //je recupère l'id du client pour le rattacher à sa session
        $_SESSION["idClient"] = $resultat['id'];
        header('Location:pagePerso.php');
        //$message = 'connexion ok';
    }

}
?>


<section id="logSign">
    <div id="decoupeConnexion">
        <h4>Connexion</h4>
        <form action="" method="post">
            <div class="inputs">
                <label for="mail">Votre adresse mail</label>
                <input id="mail" class="input_text" name="mail" type="mail" required>
            </div>

    
            <div class="inputs">
                <label for="mdp">Votre mot de passe</label>
                <input id="mdp" class="input_text" name="mdp" value="" type="password" required >
            </div>

            <input class="btn_form" id="connexion_envoyer" name="connexion_envoyer" value="ENVOYER" type="submit">
    
        </form> 
    </div>
    
    <div id="decoupeInscription">
        <h4>Inscription</h4>
        <form id="inscription_form" action="" method="post" >

            <div class="form-group">
                <label for="civilite">Civilité</label>

                <select name="civilite" id="civilite">
                    <option value="Madame">Madame</option>
                    <option value="Monsieur">Monsieur</option>
                </select>
                        
            </div>

            <div class="form-group inputs">
                <label for="lastname">Votre Nom</label>
                <input id="lastname" class="form-control input_text" name="lastname" value="" type="text" required >
            </div>
            
            <div class="inputs">
                <label for="firstname">Votre Pr&eacute;nom</label>
                <input id="firstname" class="input_text" name="firstname" value="" type="text" required >
            </div>

            <div class="inputs">
                <label for="company">Votre Soci&eacute;t&eacute;</label>
                <input id="company" class="input_text" name="company" value="" type="text" required >
            </div>

            <div class="inputs">
                <label for="mail">Votre adresse mail</label>
                <input id="mail" class="input_text" name="mail" type="mail" required>
            </div>

            <div class="inputs">
                <label for="phone">Votre num&eacute;ro de t&eacute;l&eacute;phone</label>
                <input id="phone" class="input_text" name="phone" value="" type="number" required >
            </div>

            <div class="inputs">
                <label for="mdp">Votre mot de passe</label>
                <input id="mdp" class="input_text" name="mdp" value="" type="text" required >
            </div>
                
            
            <input class="btn_form" id="inscription_envoyer" name="inscription_envoyer" value="ENVOYER" type="submit">
            <P id="champs_obligatoires">Tous les champs sont obligatoires</P>

        </form> 
    </div> 
</section>


<div>
    <?php
        echo $message;
    ?>
</div>


<footer>
        <?php include("footer.php");?>
</footer>
</body>
</htmll>