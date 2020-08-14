<?php 
    include "../app/configuracao.php";
    include '../app/Libraries/Rota.php';
    include '../app/Libraries/Controller.php';
    include '../app/Controllers/Paginas.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sweet & Healthy Cafe</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=URL?>/public/css/main.css">
    <link rel="stylesheet" href="<?=URL?>/public/css/templates/templ_header.css">
    <link rel="stylesheet" href="<?=URL?>/public/css/home_content.css">
    <link rel="stylesheet" href="<?=URL?>/public/css/templates/templ_footer.css">
    <link rel="stylesheet" href="<?=URL?>/public/css/socials/socials.css">
    <link rel="stylesheet" href="<?=URL?>/public/css/cadastro_login/cadastro_login.css">

    <!-- Sources -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    
</head>
<body>
    <?php 
        include '../app/Views/header.php';
        $rota = new Rota();
        include '../app/Views/footer.php';
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>