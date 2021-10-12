<?php 

include_once "../dao/DAO.php";

class CodDao extends Dao{


    public function selectCodigo(){


        $array = array();

        $sql = "SELECT * FROM `cnae` where  codigo LIMIT 10 ";

        $select = $this->con->prepare($sql);
        $select->execute();

        while($row = $select->fetch(PDO::FETCH_ASSOC)){

            $array[] = array(

                'codigo' => $row['codigo'],
                'descricao' => $row['descricao'],
                'aliqua' => $row['aliqua'],
                'servico' => $row['servico'],
            );
        }

        return $array;

    }

}


?>