<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/index.css" />
    <title>La page web friendly</title>
  </head>
  <body>
    <?php include_once 'assets/php/navbar.php'; ?>
    <div class="container-fluid">
      <div class="row">
        <div id="containerPrincipal" class="col-md-6 offset-md-3">
          <h1>beFriendly - le design friendly de référence</h1>
          <h3>C'est pas simple et pas rapide :</h3>
          <div class="row">
            <div class="col-6">
              <div id="citation" class="row">
                <p>'La persévérance est la noblesse de l'obstination.'</p>
                <p>-Adrien Decourcelle</p>
              </div>
            </div>
            <div class="col-6">
              <h2>Inscription</h2>
              <form id="formInscription" name="register" action="#" method="POST">
                <label for="eMail">Pseudo</label>
                <input type="password" id="pseudo" name="pseudo" placeholder="votre pseudo. ex: IamSoFriendly10" />
                <label for="age">age</label>
                <input type="number" id="age" name="age" value="17" min="0" max="100" readonly="readonly" step="1" />
                <button type="button" class="btn btn-info" name="up" id="buttonUp">+</button>
                <button type="button" class="btn btn-info" name="down" id="buttonDown">-</button>
                <label for="pseudo">e-mail</label>
                <input type="text" id="eMail" name="e-mail" value="06-30-25-22-78-54" />
                <input type="button" id="buttonFake" class="btn btn-success" value="Se connecter" />
                <input type="submit" id="buttonRegister" class="btn btn-danger" value="x"/>
              </form>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <script src="assets/js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>