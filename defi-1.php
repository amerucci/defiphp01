<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Défi PHP - 01</title>
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
            <h1>Défi PHP - 01</h1>
            <p>
                Après avoir rempli le formulaires, faites en sorte d'afficher les informations récapitulatives de
                celui-ci sous la forme<br />
                <div class="alert alert-success alert-dismissible">
                    Vous vous appelez [Prénom] [Nom] et vous avez [Age] ans
                </div>
                une fois que vous avez cliqué sur le boutton "Soumettre"
            </p>
        </div>
        <div id="resultat" class="row">
            <div class="col-6">
            <form>
                <div class="form-group">
                    <input type="text" placeholder="Saisissez votre nom" class="form-control"></input><br />
                    <input type="text" placeholder="Saisissez votre prenom"
                        class="form-control"></input><br />
                    <input type="number" placeholder="Saisissez votre age"
                        class="form-control"></input><br />
                    <button class="btn btn-primary">Soumettre</button>
                </div>
            </form>
            </div>
            <div class="col-6">

       
            </div>
        </div>

    </div>

</body>

</html>