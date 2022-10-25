<?php
require(DIR_MODEL . "BedModel.php");

class BedController
{

    public function __construct(public $model = null)
    {
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
    public function create()
    {

        // On require la vue en fin de fonction pour afficher le HTML
        require(DIR_VIEW . '/create.php');
    }

    public function store()
    {
        // On recupere les données du formulaire
        $data = $_POST;

        // Il faut les traiter avant de les envoyer
        if (!empty($_POST)) {
            $image = trim(strip_tags($_POST["image"]));
            $name = trim(strip_tags($_POST["name"]));
            $marque = trim(strip_tags($_POST["marque"]));
            $taille = trim(strip_tags($_POST["taille"]));
            $prix = trim(strip_tags($_POST["prix"]));
        } else {
            header('Location: /create');
            return;
        }

        // Ici on appel notre model pour inserer les données en BDD
        $this->model->saveBed($image, $name, $marque, $taille, $prix);

        // Ici pas besoin d'afficher de vue mais il faut rediriger vers la page d'accueil par exmeple
        header('Location: /');
        return;
    }

    public function edit()
    {
        // $id = $_GET['id'];
        // $this->model->editBed($id);
        require(DIR_VIEW . '/edit.php');
    }

    public function update()
    {
        $data = $_POST;

        if (!empty($_POST)) {
            $image = trim(strip_tags($_POST["image"]));
            $name = trim(strip_tags($_POST["name"]));
            $marque = trim(strip_tags($_POST["marque"]));
            $taille = trim(strip_tags($_POST["taille"]));
            $prix = trim(strip_tags($_POST["prix"]));
        } else {
            header('Location: /edit');
            return;
        }

        $this->model->saveBed($image, $name, $marque, $taille, $prix);

        header('Location: /');
        return;
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->model->deleteBed($id);

        header('Location: /');
        return;
    }
}
