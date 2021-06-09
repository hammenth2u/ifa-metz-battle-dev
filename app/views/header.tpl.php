<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">-->
  <link rel="stylesheet" href="<?=$_SERVER['BASE_URI']?>/assets/css/style.css">
    <!-- Bootstrap CSS File -->
    <link href="<?=$_SERVER['BASE_URI']?>/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Favicons -->
    <link href="<?=$_SERVER['BASE_URI']?>/assets/img/favicon.png" rel="icon">
  <link href="<?=$_SERVER['BASE_URI']?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
 <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>-->
  <link rel="stylesheet" href="<?=$_SERVER['BASE_URI']?>/assets/css/game.css">
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script type="text/javascript" src="<?=$_SERVER['BASE_URI']?>/assets/js/tarteaucitron/tarteaucitron.js"></script>

  <script type="text/javascript">
  tarteaucitron.init({
  "privacyUrl": "", /* Privacy policy url */

  "hashtag": "#tarteaucitron", /* Open the panel with this hashtag */
  "cookieName": "tarteaucitron", /* Cookie name */

  "orientation": "middle", /* Banner position (top - bottom) */

    "groupServices": false, /* Group services by category */
                    
  "showAlertSmall": false, /* Show the small banner on bottom right */
  "cookieslist": false, /* Show the cookie list */
                    
    "closePopup": false, /* Show a close X on the banner */

    "showIcon": true, /* Show cookie icon to manage cookies */
    //"iconSrc": "", /* Optionnal: URL or base64 encoded image */
    "iconPosition": "BottomRight", /* BottomRight, BottomLeft, TopRight and TopLeft */

  "adblocker": false, /* Show a Warning if an adblocker is detected */
                    
    "DenyAllCta" : true, /* Show the deny all button */
    "AcceptAllCta" : true, /* Show the accept all button when highPrivacy on */
    "highPrivacy": true, /* HIGHLY RECOMMANDED Disable auto consent */
                    
  "handleBrowserDNTRequest": false, /* If Do Not Track == 1, disallow all */

  "removeCredit": false, /* Remove credit link */
  "moreInfoLink": true, /* Show more info link */

    "useExternalCss": false, /* If false, the tarteaucitron.css file will be loaded */
    "useExternalJs": false, /* If false, the tarteaucitron.js file will be loaded */

  //"cookieDomain": ".my-multisite-domaine.fr", /* Shared cookie for multisite */
                    
    "readmoreLink": "", /* Change the default readmore link */

    "mandatory": true, /* Show a message about mandatory cookies */
  });
  </script>
  <script type="text/javascript">
    (tarteaucitron.job = tarteaucitron.job || []).push('youtube');
  </script>

  <title>MiniJeu</title>
</head>

<body>
  <header>
    <!-- <div class="top-bar">
      <div class="container-fluid">
        <div class="row d-flex align-items-center">
          <div class="col-sm-7 d-none d-sm-block">
            <ul class="list-inline mb-0">
              <li class="list-inline-item pr-3 mr-0">
                <i class="fa fa-phone"></i> 01 02 03 04 05
              </li>
              <li class="list-inline-item px-3 border-left d-none d-lg-inline-block">J'aime pÃ©ter</li>
            </ul>
          </div>
          <div class="col-sm-5 d-flex justify-content-end">
            Currency Dropdown TODO
          </div>
        </div>
      </div>
    </div> -->
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-color-blue">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?=$_SERVER['BASE_URI']?>/">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Jeu</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
  </header>