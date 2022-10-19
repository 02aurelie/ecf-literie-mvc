<?php

class BedModel extends Database {

    public function __construct()
    {
		// permet de recuperer le $this->bdd pour faire les appels en base de donnée
		parent::__construct();
    }

    public function getBeds() {
        $query = $this->bdd->prepare("SELECT * FROM beds");
        $query->execute();
        $beds = $query->fetchAll();

        return $beds;
    }

	public function saveBed($data) {
		// On recupere dans $data les données du formulaire verifié par le controller
		// Puis on l'INSERT en BDD
	}
}