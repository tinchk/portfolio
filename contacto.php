<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php"; ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <p>Te invito a que te contactes enviandome un mensaje o comuniques por whatsapp</p>
            </div>
            <div class="col-6">
                <form action="" method="post">
                    <div>
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="pt-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="contacto@correo.com"
                            class="form-control">
                    </div>
                    <div class="pt-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="1155558888"
                            class="form-control">
                    </div>
                    <div class="pt-3">
                        <textarea name="txtMensaje" id="txtMensaje" class="form-control"
                            placeholder="Escribir mensaje"></textarea>
                    </div>
                    <div class="pt-3">
                        <button type="submit" name="btnEnviar" id="btnEnviar" class="btn">ENVIAR</button>
                    </div>
                </form>
            </div>
    </main>
    <footer class="container mt-auto py-4">
        <div class="row">
            <div class="col-3">
                <a href="https://github.com"><i class="fa-brands fa-github"></i></a>
                <a href="https://linkedin.com"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-3">
                Sponsor <a href="https://depcsuite.com/">DePC suite</a>
            </div>
            <div class="col-3">
                <a href="mailto:marty20@yahoo.com.ar">marty20@yahoo.com.ar</a>
            </div>
            <a href="https://api.whatsapp.com/send?phone=+541121766798" target="_blank"><i
                    class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i></a>
    </footer>
</body>

</html>