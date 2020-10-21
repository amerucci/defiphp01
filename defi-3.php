<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Défi PHP - 03</title>
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
            <h1>Défi PHP - 03</h1>
            <p> Saisissez des valeurs dans les deux champs puis choisissez l'action à effectuer (additionner,
                soustraire, multiplier, diviser)<br />
                Une fois l'opérateur choisi affichez le résultat de votre calcul</p>
        </div>
        <div id="resultat" class="row">
            <div class="col-6">
                <form method="GET">
                    <div class="form-group">
                        <input type="number" placeholder="Saisissez la première valeur"
                            class="form-control"></input><br />
                        <input type="number" placeholder="Saisissez la seconde valeur"
                            class="form-control"></input><br />
                        <label class="form-check-label" for="exampleCheck1">Choisissez un opérateur</label><br />
                        <button class="btn btn-primary">Addition</button>
                        <button class="btn btn-primary">Soustraction</button>
                        <button class="btn btn-primary">Multiplication</button>
                        <button class="btn btn-primary">Division</button>
                    </div>
                </form>
            </div>
            <div class="col-6">
          
            </div>
        </div>
    </div>

</body>

</html>