<?php
require(DIR_MODEL . "BedModel.php");

class BedController {
    
    public function __construct(public $model = null) {
        $this->model = new BedModel;
    }

    public function index()
    {
        // Le controller appel le model qui lui retourne les données de la base
        $data = $this->model->getBeds();

        // Une fois qu'on a ces données, on appel notre vue qui pourra afficher ces données
        require(DIR_VIEW . '/home.php');
    }

    // Le nom des fonctions = le nom de l'url
    // ici : literie/create 
    public function create() {

        // On require la vue en fin de fonction pour afficher le HTML
        require(DIR_VIEW . '/create.php');
    }

    public function store() {
        // On recupere les données du formulaire
        $data = $_POST;

        // Il faut les traiter avant de les envoyer

        // Ici on appel notre model pour inserer les données en BDD
        $this->model->saveBed($data);

        // Ici pas besoin d'afficher de vue mais il faut rediriger vers la page d'accueil par exmeple
        header('Location: /');
        return;
    }
}




if (!empty($_POST)) {
    $errors = [];

    $image =trim(strip_tags($_POST["image"]));
    $name = trim(strip_tags($_POST["name"]));
    $marque = trim(strip_tags($_POST["marque"]));
    $taille = trim(strip_tags($_POST["taille"]));
    $prix = trim(strip_tags($_POST["prix"]));

    if (empty($errors)) {

        $db = new PDO("mysql:host=localhost;dbname=literie3000", "root", "");
       
        $query = $db->prepare("INSERT INTO beds (image, marque, name, taille, prix) VALUES (:image, :marque, :name, :taille, :prix)");

        $query->bindParam(":image", $image);
        $query->bindParam(":marque", $marque);
        $query->bindParam(":name", $name);
        $query->bindParam(":taille", $taille);
        $query->bindParam(":prix", $prix);

        if ($query->execute()) {
            header("Location: index.php");
        }
    }
}
