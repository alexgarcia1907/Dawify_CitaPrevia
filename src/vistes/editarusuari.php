<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Todo APP</title>
  </head>
  <body>

    <?php include "navegacio.php" ?>
    <div class="container">
      <div class="row justify-content-center mt-4">
        <div class="col-md-8">
        <div class="card text-white bg-info mb-3">
            <div class="card-header">Editar: Actualitza les dades de l'usuari</div>
            <div class="card-body">
              <p class="card-text">
                <form action="index.php" method="post">
                <input type="hidden" name="r" value="actualitzar_usuari">
                <input type="hidden" name="codi" value="<?=$usuari["id"];?>">
                  <div class="form-group">
                    <label for="inputUsuari2">Usuari: </label>
                    <?=$usuari["nom"];?>
                  </div>
                  <div class="form-group">
                    <label for="inputCorreu">Correu:</label>
                    <input name="correu" type="text" class="form-control" id="inputCorreu" value="<?=$usuari["correu"];?>">
                  </div>

                  <div class="form-group">
                    <label for="inputRol">Rol:</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rol" id="rol1" value="admin" <?php if($usuari["rol"]=='admin'){ echo "checked='checked'"; } ?>)>
                        <label class="form-check-label" for="rol1">Admin</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="rol" id="rol2" value="" <?php if($usuari["rol"]!='admin'){ echo "checked='checked' "; } ?>>
                        <label class="form-check-label" for="rol2">Usuari</label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Actualitzar</button>
                </form>
              </p>
            </div>
          </div>     
        </div>
      </div>





    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
