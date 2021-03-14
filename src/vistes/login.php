<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../public/estils.css" rel="stylesheet" type="text/css" media="all"/>
    <title>Entra</title>
</head>
<body>
    <div class="contenidor">
        <div class="contenidor1">
            <div class="titol">
            </div>
            <div class="contingut">
                <div class="login">
                    <h5 class="font-weight-bold">Registre</h5>
                        <div class="formulari">
                            <form action="index.php?r=register" method="post">
                                <label>Introdueix el teu email:</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <input name="mail" type="text" class="form-control" placeholder="Correu" aria-label="Correu" aria-describedby="basic-addon1">
                                </div>
                                <label>Introdueix el teu usuari:</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input name="usuarireg" type="text" class="form-control" placeholder="Usuari" aria-label="Usuari" aria-describedby="basic-addon1">
                                </div>
                                <label>Introdueix la contrasenya:</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                                    </div>
                                    <input name="contrasenyareg" type="password" class="form-control" placeholder="Contrasenya" aria-label="Contrasenya" aria-describedby="basic-addon1">
                                </div>
                                <label>Confirma la contrasenya:</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                                    </div>
                                    <input name="contrasenya2reg" type="password" class="form-control" placeholder="Confirma contrasenya" aria-label="Contrasenya" aria-describedby="basic-addon1">
                                </div>
                                <button name="enviareg" type="submit" class="enviem btn btn-dark">Registra't</button>
                            </form>
                        </div>
                </div>
                <div class="registre">
                    <h5 class="font-weight-bold">Inici</h5>
                    <div class="formulari">
                        <form action="index.php?r=vlogin" method="post">
                        <label>Introdueix el teu usuari:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                            </div>
                            <input name="usuarilogin" type="text" class="form-control" placeholder="Usuari" aria-label="Usuari" aria-describedby="basic-addon1">
                        </div>
                        <label>Introdueix la contrasenya:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                            </div>
                            <input name="contrasenyalogin" type="password" class="form-control" placeholder="Contrasenya" aria-label="Contrasenya" aria-describedby="basic-addon1">
                        </div>
                        <button name="envialogin" type="submit" class="enviem btn btn-dark">Entra</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>

