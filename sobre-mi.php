<?php
$verif = "sobre-mi";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi">
    <header class="container">
        <?php include_once "menu.php"; ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pb-1 py-5">
                <h1>Sobre-mi</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6 py-5 px-5">
                <p>Incentivado por alcanzar mis metas en el mundo de "la tecnología", las cuales son mi afán </p>
            </div>
            <div class="col-6 text-end py-3 px-5">
                <img src="images/imageArm1.jpg" alt="armonia-paz">
            </div>
        </div>
        <div id="tecno" class="container">
          <div class="row">
            <div class="col-12 pb-3">
                <h2>tecnologias</h2>
            </div>
         <div class="row">
            <div class="col-6 text-center">
                <img src="images/logos.jpg" alt="lenguajes de programación" class="img-fluid">
            </div>
            <div class="col-6 text-center">
                <img src="images/php-logo.webp" alt="lenguaje php logo" class="img-fluid">
            </div>
        </div>
     </div>
   </div>          
       <div id="cv" class="container">
            <div class="row">
            <div class="col-12 text-justify pt-3">
                <h3>Mi Curriculum</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium nostrum dolor temporibus esse ipsum. Rerum ea amet repudiandae aspernatur tempore dignissimos voluptas. Eos repellendus aliquid, dolor eveniet quia ipsa. Impedit?</p>
            </div>
          </div>
       </div> 
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