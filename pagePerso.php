<?php
session_start();
if(!isset($_SESSION['idClient'])){
    header('Location:espaceClient.php');
}
require("connexion.php");

$title = "Espace personnel";
include("header.php");
$idClient=$_SESSION['idClient'];

if (isset($_POST["espacePerso"])){
    $civilite = htmlspecialchars($_POST["civilite"]);
    $nom = htmlspecialchars($_POST["lastname"]);
    $prenom = htmlspecialchars($_POST["firstname"]);
    $societe = htmlspecialchars($_POST["company"]);
    $mail = htmlspecialchars($_POST["mail"]);
    $telephone = htmlspecialchars($_POST["phone"]);

    $update_sql='UPDATE clients SET civilite = :civilite, nom = :nom, prenom = :prenom, societe = :societe, mail = :mail, tel = :tel WHERE id=:id';
    $updateClient= $base -> prepare($update_sql);
    $updateClient->execute(array(':civilite' => $civilite, ':nom' => $nom, ':prenom' => $prenom, 'societe' => $societe, ':mail' => $mail, ':tel' => $telephone, ':id' => $idClient));

}


$sql='SELECT * FROM clients WHERE id=:id';
//je prépare ma requete
$pageClient=$base->prepare($sql);
//execute la requete en respectant la condition
$pageClient->execute(array(':id'=>$idClient));
$resultat=$pageClient->fetch();
?>

    <div id="pagePerso">
        <p>Bonjour <?php echo ucwords($resultat['civilite']).' '. strtoupper($resultat['nom']); ?></p>

        <form id="espacePerso" action="" method="post" >
            <!-- <div id="form"> -->
            <div class="inputs">
                    <label for="civilite">Civilité</label>
                    <select name="civilite" id="civilite">
                        <option id="Madame" value="Madame">Madame</option>
                        <option id="Monsieur" value="Monsieur">Monsieur</option>
                    </select>
                    
                </div>

                <div class="inputs">
                    <label for="lastname">Votre Nom</label>
                    <input id="lastname" class="input_text" name="lastname" value="<?php echo $resultat['nom'] ?>" type="text" required >
                </div>
        
                <div class="inputs">
                    <label for="firstname">Votre Pr&eacute;nom</label>
                    <input id="firstname" class="input_text" name="firstname" value="<?php echo $resultat['prenom'] ?>" type="text" required >
                </div>

                <div class="inputs">
                    <label for="company">Votre Soci&eacute;t&eacute;</label>
                    <input id="company" class="input_text" name="company" value="<?php echo $resultat['societe'] ?>" type="text" required >
                </div>

                <div class="inputs">
                    <label for="mail">Votre adresse mail</label>
                    <input id="mail" class="input_text" name="mail" value="<?php echo $resultat['mail'] ?>" type="mail" required>
                </div>

                <div class="inputs">
                    <label for="phone">Votre num&eacute;ro de t&eacute;l&eacute;phone</label>
                    <input id="phone" class="input_text" name="phone" value="<?php echo $resultat['tel'] ?>" type="number" required >
                </div>

            
            <!-- </div> -->
                <input id="espacePerso" name="espacePerso" value="ENVOYER" type="submit">
                <p id="champs_obligatoires">Tous les champs sont obligatoires</p>

        </form>
    </div>

    <footer>
        <?php include("footer.php");?>
    </footer>
</body>
<script>
    var civilite = "<?php echo $resultat['civilite']; ?>";
    console.log(civilite);
    console.log(document.getElementById(civilite));
    document.getElementById(civilite).selected='selected';
</script>
</htmll>
