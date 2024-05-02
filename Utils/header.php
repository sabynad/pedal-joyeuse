<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./Content/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <title>Bibliothèque</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary ml-5">
                <a class="navbar-brand" href="?controlleur=home&action=home">Accueil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                </button>
                
                <?php
                    // une fois connecter sois je suis dans l'admin ou l'utilisateur
                    if(isset($_SESSION['nom'])){
                        if($_SESSION['Statut']=='Admin')
                        {  
                        include('header_admin.php');

                        }else{
                        include('header_user.php');
                        } 
                    }else{ 

                ?>

                <a href="?controller=home&action=user_connexion" class="btn btn-warning">Connexion</a>
                
                <?php
                    }
                ?>        
            </nav>   
        </header>
    </body>
</html>