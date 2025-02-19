

    <section id="FormAndImg">
        <div id="HupOneForm">
            <img id="violet" src="images/png/20-03-05-Hup_One_violet_CL.png" alt="H'up One violet">
            <img id="vert" src="images/png/20-03-05-Hup_One_emeraude_CL.png" alt="H'up One vert">
            <img id="bleu" src="images/png/20-03-05-Hup_One_bleu_CL.png" alt="H'up One bleu">
        </div>
        
        
        <form id="contact_form" action="envoieMail.php" method="post">
        
            <div class="inputs">
                <label for="lastname">Votre Nom</label>
                <input id="lastname" class="input_text" name="lastname" value="" type="text">
            </div>
            
            <div class="inputs">
                <label for="firstname">Votre Pr&eacute;nom</label>
                <input id="firstname" class="input_text" name="firstname" value="" type="text">
            </div>

            <div class="inputs">
                <label for="company">Votre Soci&eacute;t&eacute;</label>
                <input id="company" class="input_text" name="company" value="" type="text">
            </div>

            <div class="inputs">
                <label for="mail">Votre adresse mail</label>
                <input id="mail" class="input_text" name="mail" type="mail">
            </div>

            <div class="inputs">
                <label for="phone">Votre num&eacute;ro de t&eacute;l&eacute;phone</label>
                <input id="phone" class="input_text" name="phone" value="" type="number">
            </div>

            <div class="inputs">
                <label for="message">Votre message</label>
                <input id="message" class="input_text" name="message" value="" type="textarea">
            </div>
                
            <input class="btn_form" id="btn_envoyer" value="ENVOYER" type="submit" name="btn_envoyer">
            <P id="champs_obligatoires">Tous les champs sont obligatoires</P>

                
        </form> 
        
    </section>   

        


    
        
        
    
