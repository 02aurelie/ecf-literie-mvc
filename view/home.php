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
    <?php foreach ($data as $bed) : ?>
        <div class="bed">
        <img src="<?= $bed["image"] ?>" alt="">
            <p><?= $bed["name"] ?></p>
            <p><?= $bed["marque"] ?></p>
            <p><?= $bed["taille"] ?></p>
            <p><?= $bed["prix"] ?></p> 
        </div>
    <?php endforeach ?>
    <!-- <form action="/store">
        Ajouter un matelas
    </form> -->
</body>

</html>