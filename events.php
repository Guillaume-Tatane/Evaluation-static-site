

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
    <!--    -----------------    Header PAGE    ------->
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
                                <a href="index.php" class="nav-link text-capitalize">acceuil</a>
                            </li>
                            <li class="nav-item">
                                <a href="events.php" class="nav-link active text-capitalize">événements</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!----------------------BREADCRUMB---------------->
            <div class="container">
                <ol class="breadcrumb rounded bgFooter">
                    <li class="breadcrumb-item mx-1"><a href="index.php" class="text-decoration-none text-white-50 fst-italic">Acceuil</a></li>
                    <li class="breadcrumb-item active"><span class="text-capitalize fst-italic text-white">événements</span></li>
                </ol>
            </div>
        </div>
    </header>

    <section>
        <!--------------Blockquote Header----------->
        <div class="container pb-1">
            <blockquote class="mx-md-3 mx-lg-5 blockquote text-center bgFooter">
                <h1>Asso Sauvegarde Environnement</h1>
                <footer class="blockquote-footer text-white-50 pt-1">
                    <cite title="Source Title ">Nous entreprenons des actions dans le but de péréniser la vie des éléphants du
                        delta de l'Okavango</cite>
                </footer>
            </blockquote>
        </div>
        <div class="container pt-5 pb-5">
            <div class="row pb-2 justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="card">
                        <div class="card-header d-inline-flex align-items-center pt-4">
                            <img class="rounded-circle " src="images/Donate.png " alt="donate_image " style="height: 10vh; width: 10vh;">
                            <h4 class=" mx-auto card-title text-capitalize"> Nos évenements</span>
                            </h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item pt-3 pb-3">
                                    <h2>Journées de sensibilation aux actions de A.S.E:</h2>
                                    <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer cursus ultricies semper. Aliquam vel interdum orci, eu ullamcorper lectus. Pellentesque a massa vel enim suscipit aliquet:
                                      <ul>
                                        <li>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        </li>
                                        <li>
                                            Mauris ultrices augue dignissim, sagittis nisl sed, congue felis.
                                        </li>
                                        <li>
                                            Aliquam blandit est eu ligula aliquam, quis aliquet nunc ultricies.
                                        </li>
                                        <li>
                                            Maecenas non metus elementum, bibendum ex convallis, sollicitudin sapien.
                                        </li>
                                      </ul>
                                      <span class="text-center d-block mt-4">
                                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                          data-bs-target="#inscription">S'inscrire</button>
                                      </span>
                                    </p>
                                </li>
                                <li class="list-group-item pt-4">
                                    <h2>Journées caritative au profit de la recherche: <span class="mx-3 badge rounded-pill bg-success">Prochainement !</span> </h2>
                                    <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pellentesque, lacus non bibendum tincidunt, nibh ipsum maximus lectus, in vestibulum est ligula sit amet sem. Duis lobortis hendrerit enim, ut feugiat velit gravida vel. Maecenas luctus porta
                                      aliquam. Nunc porta nisi sit amet enim luctus consectetur:
                                      <ul>
                                          <li>
                                              Lieu de l'évenements: Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                          </li>
                                      </ul>
                                      <span class="d-block text-center mt-4">
                                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                          data-bs-target="#inscription">S'inscrire</button>
                                      </span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---------------- Le pied de page  ------------------>

    <footer class="bgMenu pt-2 pb-2">
        <div class="container bgFooter rounded-3">
            <div class="row pt-2 justify-content-center">
                <div class="col-6 text-white text-center">
                    <label for="newsMail" class="font-italic font-weight-lighter form-label">Abonnez-vous à notre Newsletter!</label>
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
<!-------------------------------------------  Modal INSCRIPTION   --------------------------------------------------->
<div class="modal" id="inscription">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <img class=" d-inline-block" width="50vw" height="50vh" src="Images/earth_logo.png" alt="Logo">
        <h5 class="modal-title fst-italic text-capitalize mx-2" id="inscriptionModalTitle"> Inscription évenements A.S.E
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close">
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row mb-3">
            <div class="col-md-6 col-auto">
              <label for="name" class="form-label">Nom</label>
              <input type="text" class="form-control" id="name" placeholder="Nom" required>
            </div>
            <div class=" col-md-6 col-auto">
              <label for="firstname" class="form-label">Prénom</label>
              <input type="text" class="form-control" id="firstname" placeholder="Prénom" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label form-label">Votre e-mail</label>
            <div class=" col-sm-10">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input class="form-control" type="email" id="email" aria-describedby="emailHelp" required>
              </div>
              <small id="emailHelp" class=" form-text text-muted fst-italic"> Nous n'utilisons pas vos données à des
                fins publicitaires</small>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-lg-6">
              <label for="address" class="form-label">Adresse</label>
              <input type="text" class="form-control" id="address" placeholder="N° de Rue, Rue">
            </div>
            <div class="col-lg-3">
              <label for="city" class="form-label">Ville</label>
              <input type="text" id="city" class="form-control" placeholder="Ville">
            </div>
            <div class=" col-lg-3">
              <label for="citycode" class="form-label">Code Postal</label>
              <input type="text" id="citycode" class="form-control" placeholder="'ex: 83000'">
            </div>
          </div>
          <div class="row mb-3 justify-content-center">
            <div class="col-8">
              <label for="events" style="font-size: 1.1em;" class="form-label">Choisissez votre <span
                  class="text-capitalize">évenement</span></label>
              <select id="events" required>
                <option value="">Sélectionnez</option>
                <option value="1">Journées Sensibilation</option>
                <option value="2">Journées Caritative</option>
              </select>
            </div>
          </div>
          <div class="row mb-3 justify-content-center">
            <div class="col-8">
              <label for="Comments" class="form-label">Vos Attentes :</label>
              <textarea class="form-control " id="comments" rows="3"></textarea>
            </div>
          </div>
          <div class="row form-check form-switch mx-2">
            <input class="form-check-input" type="checkbox" id="switchValidation" required>
            <label class="form-check-label" for="switchValidation"> J'accepte l'utilisation de mes données et valide mon
              inscription</label>
          </div>
          <hr>
          <div class="row justify-content-around">
            <div class="col-2">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
            </div>
            <div class="col-2">
              <button type="submit" class="btn btn-success">Valider</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

    <!-- Bootstrap JavaScript -->
    <script src="design/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript Pour ToolTip-->
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>


</body>

</html>