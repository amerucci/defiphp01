<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livecoding PHP - 01 - On reprend les bases</title>
</head>
<body>
    <p>Grace à un formulaire, récupérer la longueur et la largeur d'un objet pour en calculer son air.</p>
    
     <!-- on crée le formulaire pour envoyer les données en choisissant comment elles doivent être transmises (POST OU GET : caché ou visible) -->
    <form method="POST">
        <input type="number" name="largeur">
        <input type="number" name="longueur">
        <button type="submit" name="action" value="calculer">Calcul</button>
    </form>
    <!-- On récupère nos informations transmises  -->
    <?php


    function calculDeLAire($a, $b){
        echo $a * $b;
    }

    // include '[nom du fichier a inclure]';

    // calculDeLAire(10,50);


    
    if(isset($_POST['action']) && !empty($_POST['largeur'])  && !empty($_POST['longueur'])){
        $largeur = $_POST['largeur'];
        $longueur = $_POST['longueur'];
        echo "La largeur est de $largeur cm & et la longueur est de $longueur cm<br/> ";
        $resultat = $largeur * $longueur;
        echo "l'air est de $resultat cm²";

        calculDeLAire($largeur,$longueur );
    }
    else{
       echo "Merci de remplir les champs afin de calculer l'air";
    }

    /* On affiche les variables */
    // echo "La largeur est de $largeur cm & et la longueur est de $longueur cm<br/> ";

    // echo "La largeur est de ".$largeur." cm & et la longueur est de ".$longueur." cm <br/>";

    // echo "La largeur est de ";echo  $largeur; echo  " cm & et la longueur est de ".$longueur." cm <br/>";

    // echo 'La largeur est de '.$largeur.' cm & et la longueur est de '.$longueur.' cm <br/>';

    // echo 'La largeur est de $largeur cm & et la longueur est de '.$longueur.' cm';

    // echo 'la largeur est de <span class="rouge">'.$largeur.'</span>'

    /* On calcul le résultat */
    // $resultat = $largeur * $longueur;
    //echo $resultat;
    
    // echo ($largeur * $longueur);

  

    ?>

</body>
</html>