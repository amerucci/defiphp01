<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Défi PHP - 04</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-between mb-3">

            <div class="logo-acs"><img src="https://www.accesscodeschool.fr/wp-content/uploads/2018/10/logo_acs_noir.png" style="max-height: 66px; max-width: 200px;" />
            </div>


            <div class="logo-ofp"> <img src="https://www.onlineformapro.com/wp-content/uploads/2020/01/logo-03.svg" style="max-height: 66px; max-width: 200px;" />
            </div>

        </div>

        <div class="jumbotron">
            <h1>Défi PHP - 04</h1>
            <p>
                Créer une fonction permettant de calculer automatiquement l'air d'un rectangle.
            </p>
        </div>
        <div id="resultat">
            <form method="GET">
                <input type="text" name="longueur" placeholder="Saisisez la longueur">
                <input type="text" name="largeur" placeholder="Saisisez la largeur">
                <button>Calculer l'air</button>
            </form>

            <?php

            
        include "functions.php" ;


        $lesfilms = array("Star Wars" , "iron Man", "Indiana Jones", "Les Mystères de l'Ouest", "V pour Vendetta");
        $lesfilmsquejaimepas = array("Star Wars 2" , "iron Man 3", "Indiana Jones 4 ");


        afficheLesFilmsQueJAime($lesfilms);

        afficheLesFilmsQueJAime($lesfilmsquejaimepas);





       

            

            ?>
        </div>

    </div>

</body>

</html>