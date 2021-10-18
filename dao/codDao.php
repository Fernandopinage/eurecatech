<?php

include_once "../dao/DAO.php";

class CodDao extends Dao
{


    public function selectCodigo()
    {


        $array = array();

        $sql = "SELECT * FROM `cnae` where  servico <> 0 LIMIT 10 ";

        $select = $this->con->prepare($sql);
        $select->execute();

        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {

            $array[] = array(

                'codigo' => $row['codigo'],
                'descricao' => $row['descricao'],
                'descricao_prefeitura' => $row['descricao_prefeitura'],
                'aliqua' => $row['aliqua'],
                'servico' => $row['servico'],
            );
        }

        return $array;
    }

    public function selectCNAEcodigo($codigo)
    {

        $sql = "SELECT * FROM `cnae` where  `servico`  =  :servico ";
        $select = $this->con->prepare($sql);
        $select->bindValue(':servico', $codigo);

        $select->execute();
        $array = array();


        if ($row = $select->fetch(PDO::FETCH_ASSOC)) {

            $array[] = array(

                'codigo' => $row['codigo'],
                'descricao' => $row['descricao'],
                'descricao_prefeitura' => $row['descricao_prefeitura'],
                'aliqua' => $row['aliqua'],
                'servico' => $row['servico'],
            );
        }
        return $array;
    }

    public function selectCNAEdescricao($descr)
    {

        $paramentro = '%' . $descr . '%';

        $sql = "SELECT * FROM `cnae` where  `descricao_prefeitura`  LIKE  :descricao_prefeitura ";
        $select = $this->con->prepare($sql);
        $select->bindValue(':descricao_prefeitura', $paramentro);
        $select->execute();
        $array = array();


        if ($row = $select->fetch(PDO::FETCH_ASSOC)) {

            $array[] = array(

                'codigo' => $row['codigo'],
                'descricao' => $row['descricao'],
                'descricao_prefeitura' => $row['descricao_prefeitura'],
                'aliqua' => $row['aliqua'],
                'servico' => $row['servico'],
            );
        }
        return $array;
    }

    public function descricao($codigo)
    {

        $sql = "SELECT * FROM `cnae` where  `servico`  =  :servico ";
        $select = $this->con->prepare($sql);
        $select->bindValue(':servico', $codigo);
        $select->execute();
        $array = array();


        while ($row = $select->fetch(PDO::FETCH_ASSOC)) {

            $array[] = array(


                'descricao' => $row['descricao'],

            );
        }

        $tamnho  = count($array);
        $texto = "";
        for ($i = 0; $i < $tamnho; $i++) {

            $texto .= $array[$i]['descricao'] . ",";
        }

        return $texto;
    }


    public function validarInformarcao($codigo, $texto_prefeitura, $aliquo_prefeitura, $descricao_prefeitura, $texto)
    {

        $cont = 0;
        $soft = array('desenvolvimento', 'desenvolvedor', 'desenvolvendo', 'software', 'soft', 'sistema', 'sistemas', 'system', "técnologia", "tecnologia", 'tec',  "informatica", "infor",  "codigo",  'código', 'aplicativo', 'aplicativos', 'app', 'embarcado', 'informação', 'telecominicação', 'informatica', 'programa', 'programas', 'programar', 'computador', 'computer', 'computadores', 'analise', 'análise', 'analista', 'analisar', 'ti', 't.i', 'função', 'site', 'sites', 'mobile', 'mobale', 'requisitos', 'requisitos', 'requisito', 'Internet', 'intranet', 'infra', 'estrutura');
        $barbeiro = array('corte', 'cortar', 'salão', 'beleza', 'masculino', 'feminino', 'homem', 'mulher', 'manicure', 'pedicure', 'unisex', 'cabelo', 'maquina', 'tesoura', 'escovas', 'borrifador de água', 'capa para corte', 'carro', 'limousine', 'veiculo', 'veícurlo', 'veiculos', 'veícurlos', 'manobrista', 'manobrista', 'serviço de manobrista', 'sapado', 'tenis', 'tênis', 'engraxante');
        $variavel = "";


        $descricao_prefeitura = ucfirst($descricao_prefeitura);
        $descricao_prefeitura = explode(",", $descricao_prefeitura);

        if ($codigo === '1011') { // definindo cnae cadastrado do usuario - cnae setado, deveria ser consultado da base de dados 
            // caso cnae for 1011 vai ser estanciado array() soft

            $texto = explode(" ", $texto);
            $tamnho = count($soft);
            $tamanhoText = count($texto);

            for ($j = 0; $j < $tamnho; $j++) {
                for ($i = 0; $i < $tamnho; $i++) {

                    if (isset($texto[$i])) {

                        if ($texto[$i] === $soft[$j]) {

                            $variavel .= $texto[$i] . "<br>";
                            $cont++;
                        }
                    } else {
                        break;
                    }
                }
            }



            $variavel =  explode("<br>", $variavel);
            $variavel = count($variavel);

            if ($variavel > 1) {
?>
                <script>
                    Swal.fire({
                        position: 'mid',
                        icon: 'success',
                        title: '',
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
            <?php
            } else {
            ?>

                <script>
                    Swal.fire({
                        title: 'Sua descrição não bate com seu CNAE',
                        html: 'Não seria' + '<br><br>' + 'DESENVOLVIMENTO SOB ENCOMENDA' + '<br>' + 'DESENVOLVIMENTO DE PROGRAMAS DE COMPUTADOR' + '<br>' + 'LICENCIAMENTO DE PROGRAMAS DE COMPUTADOR',
                        showDenyButton: true,
                        showCancelButton: true,
                        confirmButtonText: 'Enviar',
                        denyButtonText: `Altrar`,
                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            Swal.fire('Dados salvo com sucesso!', '', 'success')
                        } else if (result.isDenied) {
                            Swal.fire('As alterações não são salvas', '', 'info')
                        }
                    })
                </script>

            <?php
            }
        }
        // ----------------------------------------------------------------------------------------------------------------------
        if ($codigo === '6011') {
            // caso cnae for 1011 vai ser estanciado array() soft

            $texto = explode(" ", $texto);
            $tamnho = count($barbeiro);
            $tamanhoText = count($texto);

            for ($j = 0; $j < $tamnho; $j++) {
                for ($i = 0; $i < $tamnho; $i++) {

                    if (isset($texto[$i])) {

                        if ($texto[$i] === $barbeiro[$j]) {

                            $variavel .= $texto[$i] . "<br>";
                            $cont++;
                        }
                    } else {
                        break;
                    }
                }
            }

            $variavel =  explode("<br>", $variavel);
            $variavel = count($variavel);

            if ($variavel > 1) {
            ?>


                <script>
                    Swal.fire({
                        title: 'Sua emissão de nota está com um cnae diferente',
                        text: "você deseja acrescentar esse ramo de atividade?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'SIM'
                    }).then((result) => {
                        if (result.isConfirmed) {

                            let timerInterval
                            Swal.fire({
                                title: 'Nota Emitida com sucesso',
                                html: 'Redirecinando',
                                timer: 2000,
                                timerProgressBar: true,
                                didOpen: () => {
                                    Swal.showLoading()
                                    const b = Swal.getHtmlContainer().querySelector('b')
                                    timerInterval = setInterval(() => {
                                        b.textContent = Swal.getTimerLeft()
                                    }, 100)
                                },
                                willClose: () => {
                                    clearInterval(timerInterval)
                                }
                            }).then((result) => {
                                /* Read more about handling dismissals below */
                                if (result.dismiss === Swal.DismissReason.timer) {
                                    console.log('I was closed by the timer')
                                }
                            })
                        } else {
                            Swal.fire({
                                position: 'mid',
                                icon: 'success',
                                title: 'Nota Emitida com sucesso',
                                showConfirmButton: false,
                                timer: 1500
                            });

                        }
                    })
                </script>

            <?php
            } else {
            ?>

                <script>
                    Swal.fire({
                        title: 'Sua descrição não bate com seu CNAE',
                        html: 'Não seria' + '<br><br>' + 'CABELEIREIROS' + '<br>' + 'MANICURE E PEDICURE' + '<br>' + 'SERVIÇOS DE BABY SITER' + '<br>' + 'SERVIÇOS DE ENGRAXATE' + '<br>' + 'SERVIÇOS DE MANOBRISTAS',
                        showDenyButton: true,
                        showCancelButton: true,
                        confirmButtonText: 'Enviar',
                        denyButtonText: `Altrar`,
                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            Swal.fire('Dados salvo com sucesso!', '', 'success')
                        } else if (result.isDenied) {
                            Swal.fire('As alterações não são salvas', '', 'info')
                        }
                    })
                </script>


                <script>
                    Swal.fire({
                        title: 'Sua emissão de nota está com um cnae diferente',
                        text: "você deseja acrescentar esse ramo de atividade?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'SIM'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire(
                                'Redirecionando!!!'


                            )
                        }
                    })
                </script>
<?php
            }
        }
    }
}
