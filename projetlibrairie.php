<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet librairie</title>
</head>

<body>

    <!-- Comme on va interagir avec une base de données la première chose est de se connecter à celle-ci -->
    <?php

    try {
        $db = new PDO('mysql:host=localhost;dbname=librairie', 'root', '');
        }
    catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
?>

    <p>Ajouter un nouveau livre
</p>
    <form method='GET'>
        <input type="text" name="nomdulivre">
        <input type="date" name="date">
        <input type="text" name="auteur">
        <button type="submit" value="ajouter" name="action">Ajouter</button>
    </form>

    <?php 
    if(isset($_GET['action']) && !empty($_GET['nomdulivre'])  && !empty($_GET['date'])  && !empty($_GET['auteur'])){
        $toto =  $_GET['date'];
        $ajouter = $db->prepare('INSERT INTO livres (Titre_Livres, annees_Livres, nom_Livres ) VALUES (:titre, :annee, :auteur)');
        $ajouter->bindParam(':titre', $_GET['nomdulivre'], 
        PDO::PARAM_STR);
        $ajouter->bindParam(':annee', $_GET['date'], 
        PDO::PARAM_STR);
        $ajouter->bindParam(':auteur', $_GET['auteur'], 
        PDO::PARAM_STR);
        $estceok = $ajouter->execute();
      
            if($estceok){
                echo 'votre enregistrement a été ajouté avec succés';
                
            
            } else {
                echo 'Veuillez recommencer svp, une erreur est survenue';
            }
        }
    ?>

<p>Supprimer un livre
    <p>
    <form method='GET'>
        <input type="text" name="id" placeholder="Id du livre a supprimer">
        <button type="submit" value="supprimer" name="action">Supprimer</button>
    </form>

    <?php 
    if(isset($_GET['action']) && $_GET['action']=="supprimer" && !empty($_GET['id'])){
        
        $supprimer = $db->prepare('DELETE FROM livres WHERE ID_livre_Livres =:id');
        $supprimer->bindParam(':id', $_GET['id'], 
        PDO::PARAM_STR);


        $supprimer = $supprimer->execute();
            if($supprimer){
                echo 'votre enregistrement a bien été supprimé';
                
            
            } else {
                echo 'Veuillez recommencer svp, une erreur est survenue';
            }
        }
    ?>

    
<p>Modifier un livre
    <p>
    <form method='GET'>
        <input type="text" name="id" placeholder="Id du livre à modifier">
        <select name="colonne">
            <option value="Titre_Livres">Titre du livre</option>
            <option value="nom_Livres">Auteur</option>
        <input type="text" name="modif" placeholder="Modification à apporter">
        <button type="submit" value="modifier" name="action">Modifier</button>
    </form>

    <?php 
    if(isset($_GET['action']) && $_GET['action']=="modifier"  && !empty($_GET['id'])  && !empty($_GET['colonne'])  && !empty($_GET['modif'])){
        $message = '';
        $modifier = $db->prepare('UPDATE livres SET '.$_GET['colonne'].' = :modif WHERE ID_livre_Livres =:id');
        $modifier->bindParam(':id', $_GET['id'], 
        PDO::PARAM_STR);
        // $modifier->bindParam(':colonnes', $_GET['colonne'], 
        // PDO::PARAM_STR);
        $modifier->bindParam(':modif', $_GET['modif'], 
        PDO::PARAM_STR);
        $modifier = $modifier->execute();
        // $modifier->debugDumpParams();
        // die;
            if($modifier){
                echo 'votre enregistrement a bien été modifié';
                
            
            } else {
                echo 'Veuillez recommencer svp, une erreur est survenue';
            }
        }

        
    ?>


<p>Modifier un livre V2
    <p>
    <form method='GET'>
        <input type="text" name="id" placeholder="Id du livre à modifier">
        <input type="text" name="titredulivre" placeholder="Titre a modifier">
        <input type="text" name="auteurdulivre" placeholder="Auteur a modifier">
        <button type="submit" value="modifier2" name="action">Modifier</button>
    </form>

    <?php 
    if(isset($_GET['action']) && $_GET['action']=="modifier2"  && !empty($_GET['id'])  && !empty($_GET['titredulivre'])  && !empty($_GET['auteurdulivre'])){
        $message = '';
        $modifierv2 = $db->prepare('UPDATE livres SET Titre_Livres = :titredulivre, nom_Livres = :auteurdulivre WHERE ID_livre_Livres =:id');
        $modifierv2->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
        $modifierv2->bindParam(':auteurdulivre', $_GET['auteurdulivre'], PDO::PARAM_STR);
        $modifierv2->bindParam(':titredulivre', $_GET['titredulivre'], PDO::PARAM_STR);        



        
        $modifierv2 = $modifierv2->execute();
        // $modifier->debugDumpParams();
        // die;
            if($modifierv2){
                echo 'votre enregistrement a bien été modifié';
                
            
            } else {
                echo 'Veuillez recommencer svp, une erreur est survenue';
            }
        }

        
    ?>



</body>

</html>