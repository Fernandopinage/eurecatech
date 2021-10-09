<?php 

require_once "../controller/api.php";

class Consulta extends API{


    public function getAPI(){
       return json_decode(file_get_contents($this->endPoint));
    }



}


?>