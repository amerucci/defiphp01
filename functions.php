<?php 
        function calculAiRectangle($hauteur, $largeur){
            $resultat =  $hauteur * $largeur;
            echo $resultat;
        }

        function genereEtiquette($nombre){
            for ($i=1; $i<=$nombre; $i++){
                echo "<br/>etiquette ".$i." générée<br/>";
            }
        }

        function direBonjour($aquijedibonjour){
            echo "salut ".$aquijedibonjour."<br/>";
        }

        function afficheLesFilmsQueJAime($lesfilms){         
            for ($indexdufilm=0; $indexdufilm<count($lesfilms); $indexdufilm++){
                echo "J'aime ".$lesfilms[$indexdufilm]."<br/>";
            }
        }

?>