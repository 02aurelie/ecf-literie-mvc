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
    <form action="/update">
        Modification de la fiche produit d'un matelas
    </form>
</body>

</html>

<form action="/update?id=<?= $bed['id'] ?>" method="POST">
    <div class="form-group">
        <label for="inputImage">Image du matelas:</label>
        <input type="" id="inputImage" name="image" value="<?= $bed['image'] ?>">
    </div>
    <div class="form-group">
        <label for="inputMarque">Marque du matelas:</label>
        <input type="text" id="inputMarque" name="marque" value="<?= $bed['marque'] ?>">
    </div>
    <div class="form-group">
        <label for="inputName">Nom du matelas:</label>
        <input type="text" id="inputName" name="name" value="<?= $bed['name'] ?>">
    </div>
    <div class="form-group">
        <label for="inputTaille">Taille :</label>
        <input type="text" id="inputTaille" name="taille" value="<?= $bed['taille'] ?>">
    </div>
    <div class="form-group">
        <label for="inputPrix">Prix :</label>
        <input type="text" id="inputPrix" name="prix" value="<?= $bed['prix'] ?>">
    </div>

    <input type="submit" value="Enregistrer les modifications du matelas">
</form>
</body>