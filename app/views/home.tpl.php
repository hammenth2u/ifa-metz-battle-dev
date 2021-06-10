<?php $url = 'http://localhost/ifa-metz-battle-dev/public' ?>


<div id="h">
    <div class="container">
      <div class="row row-centered">
        <div class="col-md-8 col-md-offset-2">
          <div class="row row-centered">
            <img src="<?=$url?>/assets/img/uefa.png" class="uefa-logo"/>
          </div>
          <h1>JEU CONCOURS</h1>
          <h5>Tentez de gagner un prix</h5>
          <div class="countdown-header">
            <div class="countdown" data-date="2021/06/12"></div>
          </div>
          <div class="centered">
            <a class="btn btn-primary btn-large-custom" href="<?=$url?>/game" role="button">JOUER</a>
          </div>
          
        </div>
      </div>
      <!--/row-->
    </div>
    <!--/container-->
  </div>
  <!--/H-->
  <div class="mb-5 p-3 text-center div-grey">
      <h2 class="centered">Guide de participation</h2>
  </div>
  <div class="row mb-3">
  <div class="col-sm-4">
    <div style="display:block" class="text-center block">
      <img width="100px" src="<?=$url?>/assets/img/btn-play.png" alt="">
      <p style="font-weight:700; text-transform:uppercase">Jouer</p>
    </div>
  </div>
  <div class="col-sm-4">
    <div style="display:block" class="text-center block">
      <img width="80px" src="<?=$url?>/assets/img/btn-register.png" alt="">
      <p style="font-weight:700; text-transform:uppercase">S'inscrire</p>
    </div>
  </div>
  <div class="col-sm-4">
    <div style="display:block" class="text-center block">
      <img width="100px" src="<?=$url?>/assets/img/btn-share.png" alt="">
      <p style="font-weight:700; text-transform:uppercase">Partager</p>
    </div>
  </div>
</div>


 <div class="mb-5 p-3 text-center div-grey">
      <h2 class="centered">Présentation des prix</h2>
  </div>

<div class="container mb-5">

  <!--
  <a href="https://twitter.com/share?hashtags=UEFA2020,bookingcom&text=WOUAW ! Toi aussi tente de gagner un voyage" target="_blank">
    Partager via Twitter
  </a>
  <a href="https://www.facebook.com/sharer/sharer.php?u=url.test" target="_blank">
    Partager via Facebook
  </a>
  -->
  
  <table class="table table-bordered table-grey table-p">
    <thead>
      <tr>
        <th>Prix</th>
        <th>Description</th>
        <th>Détails</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1er prix</td>
        <td>Expérience suite aux premières loges lors de la finale</td>
        <td>
          <ul>
            <li>Hébergement dans un hôtel 5 étoiles</li>
            <li>Déjeuner offert</li>
            <li>Transport aller-retour</li>
            <li>Coupon de 250 offert</li>
            <li>Nourriture et boissons avant et pendant le match</li>
            <li>Transfert aller et retour entre votre hôtel et le stade Wembley</li>
            <li>Visite du stade de Wembley après le match</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td>2ème prix</td>
        <td>2 billets pour les matchs de l’UEFA EURO 2020 pendant les phases de groupes, les huitièmes de finale et les quarts de finale (avec nourriture et boissons offertes)</td>
        <td>
          <ul>
            <li>Hébergement 2 nuit pour 2 personnes dans un hôtel 4 étoiles</li>
            <li>Nourriture et boissons avant et pendant le match</li>
            <li>Transfert aller et retour entre votre hôtel et le stade Wembley</li>
            <li>Assurance voyages pendant l'evenement</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td>3ème prix</td>
        <td>2 billets pour l’un des matchs de l’UEFA EURO 2020 pendant les phases de groupes, les huitièmes de finale, les quarts de finale, les demi-finales ou la finale </td>
        <td>
          <ul>
            <li>Hébergement 2 nuit pour 2 personnes dans un hôtel 4 étoiles</li>
            <li>Transfert aller et retour entre votre hôtel et le stade Wembley</li>
          </ul>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<div id="contact"></div>
<div class="mb-5 p-3 text-center div-grey">
  <h2 class="centered">Formulaire de contact</h2>
</div>
<div>
  <div class="container mb-5">
    <div class="row row-centered">
      <div class="col-md-8 col-md-offset-2">
        <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

          <div class="form-group">
            <input type="name" name="name" class="form-control" id="contact-name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Saisir au moins 4 caractères" >
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" id="contact-email" placeholder="Votre email" data-rule="email" data-msg="Merci de saisir une adresse email valide">
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Saisir au moins 8 caractères">
            <div class="validate"></div>
          </div>

          <div class="form-group">
            <textarea class="form-control" name="message" id="contact-message" placeholder="Votre message" rows="5" data-rule="required" data-msg="Le contenu ne doit pas être vide"></textarea>
            <div class="validate"></div>
          </div>

          <div class="loading"></div>
          <div class="error-message"></div>
          <div class="sent-message">Votre message a été envoyé. Merci !</div>

          <div class="form-send">
            <button type="submit" class="btn btn-large">Envoyer</button>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>
<!-- / contact -->