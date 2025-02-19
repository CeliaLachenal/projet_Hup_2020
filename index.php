<?php 
    session_start();
    $title = "Les m&eacute;gots par terre vous d&eacute;goutent ? - h'up";
    include("header.php");
?>
    
    
    <main>
        <div id="imgSousHeader">

            <div id="fond_hupNoir">
                <img id="hupNoir" src="images/png/20-03-05-Hup_One_noir_sans_ombre_CL.png">
            </div>
        
            <section id="titresSousHeader">
                <h1>Les m&eacute;gots par terre vous d&eacute;goutent ?</h1>
                <h2>H'UP ONE</h2>
                
                <h3>La solution design et &eacute;cologique pour vos zones fumeurs</h3>
                <button class="boutonDecouvrir" ><a href="produit.php">DECOUVRIR</a></button>
            </section>
        </div>
        
            
            <!-- ********PARTIE CONCERNANT LA 1ERE DECOUPE SOMBRE : vidéo du concept et image du h'up one gris********** -->
        <div id="decoupeFonce1">
            
            <section id="contenuDecoupe1">
                <div id="concept">
                    <h4>H'UP ONE : LE CENDRIER CONNECT&Eacute;</h4>
                    
                    <img src="images/png/videoConceptSansOmbre.png" alt="vidéo du concept de H'up ">
                    <button  class="boutonDecouvrir"><a href="produit.php">DECOUVRIR</a></button>
                    
                </div>
                
                <div id="hupOne">
                    <img src="images/png/20-03-05-Hup_One_gris_sans_ombre_CL.png" alt=" le H'up One gris">
                </div>
            </section>

        </div> <!--div id decoupeFonce1-->
        
        
<!-- *******1ERE ZONE BLANCHE : formulaire de contact****** -->
        <div id="decoupeBlc">
            <section id="contenuDecoupeBlc">
                <h4>le h'up one vous int&eacute;resse ? contactez nous !</h4>
                <?php include("contact.php");?>
            </section>
            
        </div>
        
        
<!-- ***********2ème PARTIE SOMBRE : chiffres clé*************  -->

        <div id="decoupeFonce2">
            
            
            <section id="contenuDecoupeFonce2">
                <h4>quelques chiffres</h4><br>

                <section class="carresBlc">
                    <div class="chiffres">
                        <h5>30<br>Milliards</h5>
                        <p>de m&eacute;gots jet&eacute;s <br> par terre <br> par an en France</p>
                    </div>

                    <div class="chiffres">
                        <h5>1<br>m&eacute;got<br>=</h5>
                        <p><strong>500 Litres</strong> <br> d'eau pollu&eacute;s</p>
                    </div>

                    <div class="chiffres">
                        <h5>1<br>m&eacute;got</h5>
                        <p>met jusqu’à <br> <strong>10 ans</strong> <br>  pour se d&eacute;grader</p>
                    </div>

                    <div class="chiffres">
                        <h5>1<br>m&eacute;got</h5>
                        <p>contient jusqu’à <br> <strong>4000</strong>  substances <br> toxiques</p>
                    </div>
                </section>

            </section>    

        </div>


        
    <!-- ******** PARTIE CONCERNANT LE FOOTER*********** -->

    <footer>
        <?php include("footer.php");?>
    </footer>

    </main> 
</body>
</html>
