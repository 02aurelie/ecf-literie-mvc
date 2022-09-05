<?php
class HomeController {
    public function __construct(HomeModel $model)
    {
        $this->model = $model;
    }

    public function getBeds() {
        $query = $this->model->db->query("SELECT * FROM beds");
        $query->execute();
        $beds = $query->fetchAll();

        return $beds;
    }
}