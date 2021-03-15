<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="estils.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="footer.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="querys.css" rel="stylesheet" type="text/css" media="all"/>
    <title>Configuració reserves</title>
</head>
<body>
    <div class="barrikaadmin"></div>

    <div class="titol">
    <div class="container">
        <div class="col-lg-12 align-self-end">
            <div class="tit">
                <p class="text-white font-weight-bold">Configuració de reserves:</p>
            </div>
            <hr class="divider my-3"/>
        </div> 
    </div>
    <div class="bototorna">
      <a type="button" class="btn btn-primary tornausu" href="index.php">Tornar enrere</a>
    </div>
    </div>

    <div class="conf">
        <?php
            echo($datos);
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?php
    include 'footer.php';
    ?>
</body>
</html>