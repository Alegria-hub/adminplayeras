<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/superhero/bootstrap.min.css" integrity="sha384-HnTY+mLT0stQlOwD3wcAzSVAZbrBp141qwfR4WfTqVQKSgmcgzk+oP0ieIyrxiFO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles2.css">
    <title>Iniciar sesión</title>
    <style>
        .btnTam {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center mt-5 mb-5">
            <h2>Iniciar Sesión</h2>
        </div>
        <form method="POST" action="data/login.php">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <label for="">Correo:</label>
                    <input type="email" name="email" class="form-control" placeholder="Dirección de correo electrónico" required>
                </div>


                <div class="col-lg-12 mb-5">
                    <label for="">Contraseña:</label>
                    <input type="password" name="pass" class="form-control" placeholder="Contraseña" required>
                </div>


                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary btnTam" name="entrar">Entrar</button>
                </div>
            </div>
    </div>
    </form>
    </div>
</body>

</html>