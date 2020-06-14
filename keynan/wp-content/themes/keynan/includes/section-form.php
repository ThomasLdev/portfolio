<?php if( have_posts() ): while( have_posts() ): the_post();?>

 <div class="container">
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="form-group">
                 
                        <input type="name" class="form-control" id="InputName" placeholder="Nom">
                      </div>

                    <div class="form-group">
                   
                      <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Mail">
                      <small id="emailHelp" class="form-text text-muted">Cette adresse ne sera communiquée à aucun tiers =)</small>
                    </div>

                    <div class="form-group">
                  
                      <input type="phone" class="form-control" id="InputPhoneNumber" placeholder="Numéro (facultatif)">
                    </div>

                    <div class="form-group">
               
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                      </div>

                      <div class="form-group">
                        <label for="avatar">Chargez votre CV (pdf, jpeg, png)</label>
                        <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
                      </div>
                      
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                  </form>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm-5 bg-light d-flex flex-column justify-content-center align-items-center">
            <h2>Coordonnées Utiles</h2>
            <p class="text-center">Keynan 
                19 – 21 rue Gardenat Lapostol
                92150 - Suresnes
                FRANCE</p>
                
                <p> En appelant notre Ligne Infos
                Jours et heures : <hr/>
                Du lundi au vendredi de 9h00 à 18h00
                au :  01 82 52 12 81
                </p>
        </div>
        <div class="col-sm-7">
            <div id="map"></div>
        </div>
        
    </div>
</div>

    <?php endwhile; else: endif;?>