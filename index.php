<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Association Sauvegarde Environnement </title>
    <!-- Bootstrap CSS -->
    <link href="design/css/bootstrap.min.css" rel="stylesheet">
    <!-- Our CSS -->
    <link rel="stylesheet" href="design/style.css">
</head>

<body>
    <!------------------------------------------BODY---------------------------------------->
    <header class="sticky-top">
        <!--------------------NAVBAR----------------------->
        <div class="bgMenu">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container">
                    <a href="index.php" class="navbar-brand font-weight-bolder">
                        <img class=" d-inline-block" width="70vw" height="65vh" src="images/earth_logo.png" alt="Logo">
                        <span class="fst-italic">A.S.E</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navBarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link active text-capitalize">acceuil</a>
                            </li>
                            <li class="nav-item">
                                <a href="events.php" class="nav-link text-capitalize">événements</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!----------------------BREADCRUMB---------------->
            <div class="container">
                <ol class="breadcrumb rounded bgFooter">
                    <li class="breadcrumb-item active fst-italic text-white mx-1">Acceuil</li>
                </ol>
            </div>
        </div>
    </header>

    <section>
        <!--------------Blockquote Header----- Titre------->
        <div class="container">
            <blockquote class="mx-md-3 mx-lg-5 blockquote text-center bgFooter">
                <h1>Asso Sauvegarde Environnement</h1>
                <footer class="blockquote-footer text-white-50 pt-1">
                    <cite title="Source Title ">Nous entreprenons des actions dans le but de péréniser la vie des éléphants du delta de l'Okavango</cite>
                </footer>
            </blockquote>
        </div>


        <!------------------ CARD ------------------------->
        <div class="container">
            <div class="row pt-1">
                <!------------------ CARD elephants------------------------->
                <div class="col-lg-6 col-md-12 pt-3 order-lg-1 order-2">
                    <div class="card1 card p-1">
                        <img class=" card-img-top rounded-3 " src="images/elephant_famille.png " alt="elephant3_image ">
                        <div class="card-body">
                            <h5 class="card-title text-center "> Une Famille <span class="text-capitalize">éléphants </span>au coeur du Delta <br> <span class="font-italic font-weight-lighter">"Botswana"</span></h5>
                            <p class="card-text text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum, nunc sit amet malesuada aliquet, nibh lacus aliquet felis, et blandit sapien magna at elit. Donec vitae fringilla ex, non pulvinar tortor. Aliquam tempor efficitur augue. Fusce
                                efficitur eu lacus ac mollis. Proin in condimentum lacus. Cras purus nisi, fringilla eget dolor et, mollis aliquet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec dui malesuada, tincidunt orci sed,
                                accumsan erat. Sed at lectus ut orci egestas maximus nec sed ante. Aliquam erat volutpat. Praesent dapibus metus condimentum euismod dapibus. Proin eros arcu, accumsan sed ligula a, venenatis malesuada elit.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#botswana">Voir la Carte du Delta</button>
                        </div>
                    </div>
                </div>
                <!------------------ CARD VictoriaFalls---------------------->
                <div class=" col-lg-6 col-md-12 pt-3 pb-3 order-lg-2 order-3 ">
                    <div class="card1 card p-1">
                        <img class=" card-img-top rounded-3" src="images/victoria_falls.png " alt="victoria_chute_image">
                        <div class="card-body">
                            <h5 class="card-title text-center"> Les chutes Victoria <br><span class="font-italic font-weight-lighter ">"Zimbabwe"</span></h5>
                            <p class="card-text text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum, nunc sit amet malesuada aliquet, nibh lacus aliquet felis, et blandit sapien magna at elit. Donec vitae fringilla ex, non pulvinar tortor. Aliquam tempor efficitur augue. Fusce
                                efficitur eu lacus ac mollis. Proin in condimentum lacus. Cras purus nisi, fringilla eget dolor et, mollis aliquet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec dui malesuada, tincidunt orci sed,
                                accumsan erat. Sed at lectus ut orci egestas maximus nec sed ante. Aliquam erat volutpat. Praesent dapibus metus condimentum euismod dapibus. Proin eros arcu, accumsan sed ligula a, venenatis malesuada elit.
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <button type="button" class="btn btn-secondary " data-bs-toggle="modal" data-bs-target="#victoriaModal">Voir Carte</button>
                        </div>
                    </div>
                </div>
                <!------------------- CARD Evenements------------------------->
                <div class=" col pt-3 order-lg-3 order-1 pb-4">
                    <div class="card p-1 ">
                        <div class="card-header d-inline-flex align-items-center">
                            <img class="rounded-circle " src="images/Donate.png " alt="donate_image " style="height: 5vh; width: 5vh;">
                            <h4 class="mx-auto card-title text-capitalize"> Nos évenements</span>
                            </h4>
                        </div>
                        <div class="card-footer text-center p-4">
                            <a href="events.php" class="btn btn-outline-success">Voir nos <span class="text-capitalize ">évenements</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!----------------------------------------------------------FOOTER Index Page------------------------------------------>
    <footer class="bgMenu pt-2 pb-2">
      <div class="container bgFooter rounded-3">
        <div class="row pt-2 justify-content-center">
          <div class="col-6 text-white text-center">
            <label for="newsMail" class="font-italic font-weight-lighter form-label">Abonnez-vous à notre
              Newsletter!</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" placeholder="e-mail" aria-label="mailaddress" id="newsMail" required>
              <div class="input-group-append">
                <button type="submit" class="btn ms-2 btn-outline-light">Valider</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-white justify-content-end pe-2">
          © A.S.E Copyright
        </div>
      </div>
    </footer>

    <!----------------------------------------------------LES FENETRES MODAL------------------------------------------->

    <!------------------------ Modal BOTSWANA --------------->
    <div class="modal fade" id="botswana">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delta de l'Okavango <span class="font-italic font-weight-bold ">" Botswana "</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer">
                    </button>
                </div>
                <div class="modal-body text-center">
                    <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2544595.2292869827!2d23.606172590335923!3d-19.360745310856828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1610219076565!5m2!1sfr!2sfr" width="600 " height="450 "
                        frameborder="0 " style="border:0; " allowfullscreen=" " aria-hidden="false " tabindex="0 "></iframe>

                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class=" btn btn-outline-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-success " data-bs-toggle="tooltip" data-placement="top" title="Bientôt Disponible">Faire un Don</button>
                </div>
            </div>
        </div>
    </div>
    <!------------------------- Modal ZIMBABWE -------------->
    <div class="modal fade" id="victoriaModal">
        <div class=" modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Les chutes Victoria <span class="font-italic font-weight-bold">" Zimbabwe "</span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer">
                    </button>
                </div>
                <div class="modal-body text-center">
                    <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d30863.169606649793!2d25.856056666044825!3d-17.910071673641156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1610219862944!5m2!1sfr!2sfr" width="600 " height="450 "
                        frameborder="0 " style="border:0; " allowfullscreen=" " aria-hidden="false " tabindex="0 "></iframe>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class=" btn btn-outline-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-success " data-bs-toggle="tooltip" data-placement="top" title="Bientôt Disponible ">Faire un Don</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="design/js/bootstrap.bundle.min.js"></script>
    <!-- Our JavaScript -->
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>


</body>

</html>