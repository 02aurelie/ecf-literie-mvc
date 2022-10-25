<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Literie 3000</title>
</head>

<body>
    <h1>Literie 3000</h1>
    <form action="/store">
    </form>
</body>

</html>

    <h2>Création de la fiche produit d'un matelas</h2>

    <form action="/store" method="POST">
    <div class="form-group">
            <label for="inputImage">Image du matelas:</label>
            <input type="" id="inputImage" name="image">
        </div>
    <div class="form-group">
            <label for="inputMarque">Marque du matelas:</label>
            <input type="text" id="inputMarque" name="marque">
        </div>
        <div class="form-group">
            <label for="inputName">Nom du matelas:</label>
            <input type="text" id="inputName" name="name">
</div>
        <div class="form-group">
            <label for="inputTaille">Taille :</label>
            <input type="text" id="inputTaille" name="taille">
        </div>
        <div class="form-group">
            <label for="inputPrix">Prix :</label>
            <input type="text" id="inputPrix" name="prix">
        </div>

        <input type="submit" value="Création du matelas">
    </form>
</body>