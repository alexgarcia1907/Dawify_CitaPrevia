<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="estils.css" rel="stylesheet" type="text/css"/>
    <link href="footer.css" rel="stylesheet" type="text/css" media="all"/>
    <title>Llistat d'usuaris</title>
  </head>
  <body>
  <div class="barrikaadmin"></div>

  <div class="titol">
    <div class="container">
        <div class="col-lg-12 align-self-end">
            <div class="tit">
                <p class="text-white font-weight-bold">Gestió d'usuaris:</p>
            </div>
            <hr class="divider my-3"/>
        </div> 
    </div>
    <div class="bototorna">
      <a type="button" class="btn btn-primary tornausu" href="index.php">Tornar enrere</a>
    </div>
  </div>
  
  <div class="usullis">
  <div class="header-config">
  <h5>Usuaris</h5>
  </div>
    <table class="tablius">
        <thead>
          <tr class="setmana">
            <th>Codi</th>
            <th>Usuari</th>
            <th>Email</th>
            <th>Rol</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($llistat as $actual) { ?>
          <tr>
            <td><?=$actual["id"];?></td>
            <td><?=$actual["nom"];?></td>
            <td><?=$actual["correu"];?></td>
            <td><?=$actual["rol"];?></td>
            <td><a href="index.php?r=editar_usuari&id=<?=$actual["nom"];?>"><button class="btn btn-danger ediusu">Editar</button></a></td>
            <td><a href="index.php?r=esborrar_usuari&delete=<?=$actual["id"];?>"><button class="btn btn-danger eliusu">Esborrar</button></a></td>
          </tr>
        <?php } ?>
        </tbody>
    </table>
  </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <?php
    include 'footer.php';
    ?>
  </body>
</html>

