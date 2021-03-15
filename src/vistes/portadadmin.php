<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="estils.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="footer.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="querys.css" rel="stylesheet" type="text/css" media="all"/>
    <title>Calendari</title>
</head>
<body>
    <div class="barrikaadmin"></div>
    <div class="botoadmins">
    <form action="index.php" method="post">
        <button type="submit" class="confug">TANCA SESSIÓ</button>
        <input type="hidden" name="r" value="clusession">
    </form>
    <form action="index.php" method="post">
        <button type="submit" class="confug">GESTIÓ DE CITES</button>
        <input type="hidden" name="r" value="configadmin">
    </form>
    <form action="index.php" method="post">
        <button type="submit" class="confug">USUARIS</button>
        <input type="hidden" name="r" value="llistausuaris">
    </form>
    </div>
    
    <div class= "calendari">
        <?php
    
            echo($calendar);
            echo($modals);
        ?>
    </div>
    
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>

 

  $(document).ready(function(){
        $("button.dia").on("click", function(e){
             e.preventDefault();
             var dia = $(e.target).data(dia);
             if (document.getElementById("containsmodal") != null) {
                document.getElementById("containsmodal").remove();
             }             
             $("#0Modal div.modal-body").load("index.php?r=dia&dia="+dia.dia);
             $("#0Modal").modal("show");
            
        })
     });
  
    </script>
    <?php
    include 'footer.php';
    ?>
</body>
</html>