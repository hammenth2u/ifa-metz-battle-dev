<div id="h">
    <div class="container">
      <div class="row row-centered">
        <div class="col-md-8 col-md-offset-2">
          <div class="row row-centered">
            <img src="<?=$_SERVER['BASE_URI']?>/assets/img/uefa.png" class="uefa-logo"/>
          </div>
          <h1>JEU CONCOURS</h1>
          <h5>GAGNEZ PLEIN DE TRUCS</h5>
          <div class="countdown-header">
            <div class="countdown" data-date="2021/06/12"></div>
          </div>
          <div class="centered">
            <a class="btn btn-primary btn-large-custom" href="#" role="button">JOUER</a>
          </div>
          
        </div>
      </div>
      <!--/row-->
    </div>
    <!--/container-->
  </div>
  <!--/H-->
 <div class="mb-5 p-3 text-center div-grey">
      <h2 class="centered">Présentation des prix</h2>
  </div>

<div class="container mb-5">
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
        <td>Voyage au centre de la place</td>
        <td>
          <ul>
            <li>Hébergement dans un hôtel 5 étoiles</li>
            <li>Déjeuner offert</li>
            <li>Transport aller-retour</li>
            <li>Coupon de 500€ offert</li>
            <li>Visite du stade de la France</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td>2ème prix</td>
        <td>Descente aux Enfers</td>
        <td>
          <ul>
            <li>Pour 1 personne</li>
            <li>Il fait chaud</li>
            <li>On peut manger des patates</li>
          </ul>
        </td>
      </tr>
      <tr>
        <td>3ème prix</td>
        <td>Bisou sur la tête à Zizou</td>
        <td>
          <ul>
            <li>Son gros crâne chauve là</li>
            <li>Une gaufre au Nutella offerte</li>
          </ul>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<!-- 
  <div class="container ptb">
    <div class="row">
      <div class="col-md-6">
        <h2>We are working hard to launch our awesome new site.</h2>
        <BR/>
        <h4>LOREM IPSUM IS SIMPLY DUMMY TEXT.</h4>

        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content
          here, content here', making it look like readable English.</p>
        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
        <p><button class="btn btn-conf btn-blue">Learn More</button></p>
      </div>
      /col-md-6
      <div class="col-md-6">
        <img src="<?=$_SERVER['BASE_URI']?>/assets/img/browser.png" class="aligncenter" width="350">
      </div>
      /col-md-6
    </div>
    /row
  </div>
</container> -->


  <div class="mb-5 p-3 text-center div-grey">
    <h2 class="centered">Formulaire de contact</h2>
  </div>
  <div id="contact p-0">
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