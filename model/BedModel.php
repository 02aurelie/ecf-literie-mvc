<?php

class BedModel extends Database {

    public function __construct() {
		// permet de recuperer le $this->bdd pour faire les appels en base de donnée
		parent::__construct();
    }

    public function getBeds() {
        $query = $this->bdd->prepare("SELECT * FROM beds");
        $query->execute();
        $beds = $query->fetchAll(PDO::FETCH_ASSOC);

        return $beds;
    }

	public function getBedById($id) {
		$query = $this->bdd->prepare("SELECT * FROM beds where id = ?");
        $query->execute([$id]);
        $bed = $query->fetch(PDO::FETCH_ASSOC);

        return $bed;
	}

	public function saveBed($image, $name, $marque, $taille, $prix) {
		// On recupere dans $data les données du formulaire verifié par le controller
		// Puis on l'INSERT en BDD
		$query = $this->bdd->prepare("INSERT INTO beds (image, marque, name, taille, prix) VALUES (:image, :marque, :name, :taille, :prix)");

		$query->bindParam(":image", $image);
		$query->bindParam(":marque", $marque);
		$query->bindParam(":name", $name);
		$query->bindParam(":taille", $taille);
		$query->bindParam(":prix", $prix);

		if ($query->execute()) {
			return true;
		}

		return false;
	}

	public function deleteBed($id) {
		$query = $this->bdd->prepare("DELETE FROM beds WHERE id=:id");
        $query->bindParam(":id", $id);
    
        if ($query->execute()) {
            return true;
        } else {
            return $query->errorInfo();
        }
	}

	public function updateBed($id, $image, $name, $marque, $taille, $prix) {
		$query = $this->bdd->prepare("UPDATE beds SET image = :image, marque = :marque, name = :name, taille = :taille, prix = :prix WHERE id = :id");
        $query->bindParam(":id", $id);
		
		$query->bindParam(":image", $image);
		$query->bindParam(":marque", $marque);
		$query->bindParam(":name", $name);
		$query->bindParam(":taille", $taille);
		$query->bindParam(":prix", $prix);

		
		if ($query->execute()) {
			return true;
		}

		return false;
		
	}
}