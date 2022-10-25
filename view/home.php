<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Literie 3000</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="image">
        <img src="img/logo.png">
    </div>
    <h1>Consultez notre catalogue</h1>
    <div class="ajout">
        <a href="/store">Ajouter un matelas</a>
    </div>
    <?php foreach ($data as $bed) : ?>
        <div class="bed">
            <div class="bed-image">
                <img src="<?= $bed["image"] ?>" alt="">
            </div>
            <div class="bed-details">
                <p><?= $bed["name"] ?></p>
                <p><?= $bed["marque"] ?></p>
                <p><?= $bed["taille"] ?></p>
                <p><?= $bed["prix"] ?></p>
            </div>
            <div class="edit">
                <a href="/edit?id=<?= $bed['id'] ?>">Editer</a>
            </div>
            <div class="delete">
                <a href="/confirm_delete?id=<?= $bed['id'] ?>">Supprimer</a>
            </div>
        </div>
    <?php endforeach ?>
    
    <div class="bottom">

        <a href="bed.php?2=<?= $bed["id"] ?>"> Retrouvez la suite du catalogue en page 2</a>

        <div class="dimensions">
            <p>Vous y découvrirez toutes nos dimensions :</p>
        </div>
        <div class="others-dimensions">
            <p>90x190, 140x190, 160x200, 180x200, 200x200</p>

        </div>

        <div class="marks">
            <p>Et toutes nos marques de matelas :</p>
            <div class="others-marks">
                <p> Epeda, Dreamway, Bultex, Dorsoline, MemoryLine</p>
            </div>
        </div>
    </div>
</body>

</html>