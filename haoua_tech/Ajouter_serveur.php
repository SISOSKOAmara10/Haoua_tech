<!DOCTYPE html>
<html>
<head>
    <title>Ajouter Serveur</title>
<link rel="stylesheet" href="asset/CSS/Ajouterserveur.css">
</head>
<body>

    <fieldset>
    <form method="post" action="traitementserveur.php">
             <h1>Ajouter Serveur</h1>

           <button type="button" class="close" aria-label="Close" id="close">
            <span aria-hidden="true">&times;</span>
            </button>

            <label for="Proprietaire" id="propritaire">Propriétaire</label>
            <input type="text" name="proprietaire"><br><br>

            <label for="Pays" id="Pays">Pays</label>
            <input type="text" name="Pays"><br><br>

            <label for="Localite" id="localite">Localité</label>
            <input type="text" name="Localite"><br><br>

            <label for="Contact" id="">Contact</label>
            <input type="tel" name="Contact"><br><br>

            <label for="adresse" id="">Site</label>
            <input type="text" name="adresse"><br><br>

            <div id="button">
                    <imput type ="reset" value="reset"><button>Réinitialiser</button></imput>
                    <imput type="submit" value="submit"><button>Ajouter</button></imput>
            </div>

    </form>
    </fieldset>
</body>
</html>