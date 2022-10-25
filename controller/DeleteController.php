<?php 
class DeleteController {

public function delete()
    {
        $query = $this->model->db->prepare("DELETE FROM products WHERE id=:id");
        $query->bindParam(":id", $this->model->id);

        if ($query->execute()) {
            return true;
        } else {
            return $query->errorInfo();
        }
    }
}