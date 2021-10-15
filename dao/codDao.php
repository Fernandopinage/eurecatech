<?php 

include_once "../dao/DAO.php";

class CodDao extends Dao{


    public function selectCodigo(){


        $array = array();

        $sql = "SELECT * FROM `cnae` where  servico <> 0 LIMIT 10 ";

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

    public function selectCNAEcodigo($codigo){

        $sql = "SELECT * FROM `cnae` where  `servico`  =  :servico ";
        $select = $this->con->prepare($sql);
        $select->bindValue(':servico', $codigo);
       
        $select->execute();
        $array = array();


        if($row = $select->fetch(PDO::FETCH_ASSOC)){

            $array[] = array(

                'codigo' => $row['codigo'],
                'descricao' => $row['descricao'],
                'aliqua' => $row['aliqua'],
                'servico' => $row['servico'],
            );
        }
        return $array;
    }
    
    public function selectCNAEdescricao($descr){

        $paramentro = '%'.$descr.'%';

        $sql = "SELECT * FROM `cnae` where  `descricao`  LIKE  :descricao ";
        $select = $this->con->prepare($sql);
        $select->bindValue(':descricao', $paramentro);
        $select->execute();
        $array = array();


        if($row = $select->fetch(PDO::FETCH_ASSOC)){

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