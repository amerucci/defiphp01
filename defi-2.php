<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Défi PHP - 02</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-between mb-3">

            <div class="logo-acs"><img
                    src="https://www.accesscodeschool.fr/wp-content/uploads/2018/10/logo_acs_noir.png"
                    style="max-height: 66px; max-width: 200px;" />
            </div>


            <div class="logo-ofp"> <img src="https://www.onlineformapro.com/wp-content/uploads/2020/01/logo-03.svg"
                    style="max-height: 66px; max-width: 200px;" />
            </div>

        </div>

        <div class="jumbotron">
            <h1>Défi PHP - 02</h1>
            <p>
                - Créer en HTML un menu déroulant permettant de sélectionner une valeur entre 1 et 10 inclus.<br />
                - Votre page doit comporter un bouton nommé "afficher la table de multiplication"<br />
                - Lors du clic sur ce bouton, vous devez utiliser la valeur du menu déroulant pour faire calculer à PHP,
                de façon dynamique, la table de multiplication correspondante.
                Pour commencer il vous faudra donc créer un formulaire comportant un menu déroulant et un bouton<br />
            </p>
        </div>
        <div id="resultat">
            <form method="get">
                <select name="table">
                    <?php 
                
                /* On créé une option si l'on a deja une valeur dans l'url pour récupérer la table que l'on vient de calculer */
                if(isset( $_GET['table']) && !empty($_GET['table'])){
                    /* On crée l'option */
                    echo '<option value="'.$_GET['table'].'">'.$_GET['table'].'</option>' ;
                }
                
                /* On créé toutes nos options en fonction de la boucle définie */
                for($latable = 1; $latable<=10; $latable++){
                       /* On crée les options */
                   echo '<option value="'.$latable.'">'.$latable.'</option>' ;
                }
?>

                </select>
                <button type="submit">Afficher la table de multiplication</button>
            </form>
        </div>

        <?php 

        /* On verifie que les variables sont bien dans l'url et ne sont pas vide */
        if(isset( $_GET['table']) && !empty($_GET['table'])){
            /* On crée une boucle pour faire la calcul sur une plage de nombre définie */
            for($nombre = 1; $nombre<=10; $nombre++){
                /* On fait le calcul */
               echo $_GET['table']." x ".$nombre." = ".($_GET['table'] * $nombre)."<br/>"; 
            }
        }
        ?>

    </div>

</body>

</html>