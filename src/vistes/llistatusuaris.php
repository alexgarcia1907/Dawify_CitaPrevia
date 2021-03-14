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
        <div class="col">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Codi</th>
                <th scope="col">Usuari</th>
                <th scope="col">Email</th>
                <th scope="col">Rol</th>
                <th scope="col">Editar</th>
                <th scope="col">Esborrar</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($llistat as $actual) { ?>
              <tr>
                <td><?=$actual["id"];?></td>
                <td><a href="index.php?r=editar_usuari&id=<?=$actual["id"];?>"><?=$actual["nom"];?></a></td>
                <td><?=$actual["correu"];?></td>
                <td><?=$actual["rol"];?></td>
                <td><a href="index.php?r=editar_usuari&id=<?=$actual["nom"];?>">Editar</a></td>
                <td><a href="index.php?r=esborrar_usuari&delete=<?=$actual["id"];?>">Esborrar</a></td>
              </tr>
            <?php } ?>
            </tbody>
        </table>          
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
