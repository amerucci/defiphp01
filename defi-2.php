<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Défi PHP - 02</title>
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
            <h1>Défi PHP - 02</h1>
            <p>
                - Créer en HTML un menu déroulant permettant de sélectionner une valeur entre 1 et 10 inclus.<br />
                - Votre page doit comporter un bouton nommé "afficher la table de multiplication"<br />
                - lors du clic sur ce bouton, vous devez utiliser la valeur du menu déroulant pour faire calculer à PHP, de façon dynamique, la table de multiplication correspondante.
                Pour commencer il vous faudra donc créer un formulaire comportant un menu déroulant et un bouton<br />
            </p>
        </div>
        <div id="resultat">
            <form method="GET">
                <select name="table">


                    <?php
                if (isset($_GET["table"]) && !is_null($_GET["table"])) {
                    echo "<option value='" . $_GET["table"] . "'>" . $_GET["table"] . "</option>";
                }


                    for ($latable = 1; $latable <= 10; $latable++) {
                        echo "<option value='" . $latable . "'>" . $latable . "</option>";
                    }
                    ?>


                </select>
                <button>afficher la table de multiplication</button>
            </form>

            <?php
            if (isset($_GET["table"]) && !is_null($_GET["table"])) {
                $table = $_GET["table"];

                for ($i = 1; $i <= 10; $i++) {
                    echo $table . "x" . $i . "=" . ($i * $table) . "<br/>";
                }
            }



            ?>
        </div>

    </div>

</body>

</html>