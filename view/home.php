<?php
include_once "../layout/head.html";
include_once "../controller/consulta.php";
include_once "../dao/codDao.php";

$Cod = new CodDao();
if (isset($_POST['submet'])) {


    $codigo = $_POST['codigo_servico'];
    $descr = $_POST['desc_servico'];


    if (!empty($_POST['codigo_servico'])) {

        $dado = $Cod->selectCNAEcodigo($codigo);
    } else {
        $dado = $Cod->selectCNAEdescricao($descr);
    }
}


?>

<div class="container">
    <p class=" text-center fw-bold mt-2" style="font-size: 12px;">EMISSÃO DE NOTA FISCAL DE SERVIÇO ELETRÔNICA – NFS-E</p>
    <hr>

    <fieldset class="border">
        <legend class="fw-bold" style="color: #2196F5; font-size: 13px;">PRESTADOR DE SERVIÇO</legend>

        <p><label class="px-2" style="font-size: 13px;">CPF/CNPJ:</label> <label style="font-size: 12px;" class="fw-bold">37.785.861/0001-32</label></p>
        <p><label class="px-2" style="font-size: 13px;">Inscrição:</label> <label style="font-size: 12px;" class="fw-bold"></label></p>
        <p><label class="px-2" style="font-size: 13px;">Municipal:</label> <label style="font-size: 12px;" class="fw-bold">47132601</label></p>
        <p><label class="px-2" style="font-size: 13px;">Contribuinte:</label> <label style="font-size: 12px;" class="fw-bold">LUIZ FERNANDO PINAGE COUTINHO 00496334220</label></p>

    </fieldset>

    <fieldset class="border" style="margin-top: 20px;">
        <legend class="fw-bold" style="color: #2196F5; font-size: 13px;">TOMADOR DE SERVIÇOS</legend>

        <p><label class="px-2" style="font-size: 13px;">CPF/CNPJ:</label> <label style="font-size: 12px;" class="fw-bold">35.576.769/0001-37</label><label class="px-2" style="font-size: 13px;">Razão Social:</label> <label style="font-size: 12px;" class="fw-bold">PROGRIDE DIGITAL LTDA</label></p>
        <p><label class="px-2" style="font-size: 13px;">Inscrição:</label> <label style="font-size: 12px;" class="fw-bold"></label></p>
        <p><label class="px-2" style="font-size: 13px;">Municipal:</label> <label style="font-size: 12px;" class="fw-bold">45059501</label><label class="px-2" style="font-size: 13px;">Municipal:</label><label style="font-size: 12px;" class="fw-bold">PROGRIDE DIGITAL LTDA</label></p>
        <p><label class="px-2" style="font-size: 13px;">Logradouro:</label> <label style="font-size: 12px;" class="fw-bold">DJALMA BATISTA</label></p>
        <p><label class="px-2" style="font-size: 13px;">Número:</label> <label style="font-size: 12px;" class="fw-bold">3000</label><label class="px-2" style="font-size: 13px;">Número:</label><label class="px-2" style="font-size: 13px;">Complemento:</label><label style="font-size: 12px;" class="fw-bold">LJ F CD AMAZONAS FLAT</label></p>
        <p><label class="px-2" style="font-size: 13px;">CEP:</label> <label style="font-size: 12px;" class="fw-bold">69055-038</label><label class="px-2" style="font-size: 13px;">Bairro:</label><label style="font-size: 12px;" class="fw-bold">PARQUE 10 DE NOVEMBRO</label></p>
        <p>
        <div class="row mb-1">
            <label for="inputEmail3" class="col-sm-1 " style="font-size: 13px; margin-left:10px;">Municipio:</label>
            <div class="col-md-1">
                <input type="email" class="form-control form-control-sm" id="inputEmail3">
            </div>
            </p>
            <p><label class="px-2" style="font-size: 13px;">Estado:</label> <label style="font-size: 12px;" class="fw-bold">AM</label><label class="px-2" style="font-size: 13px;">Pais:</label><label style="font-size: 12px;" class="fw-bold">BRASIL</label></p>
            <p><label class="px-2" style="font-size: 13px;">Telefone:</label> <label style="font-size: 12px;" class="fw-bold">41412140</label></p>
            <p>
            <div class="row mb-1">
                <label for="inputEmail3" class="col-sm-1 " style="font-size: 13px; margin-left:10px;">E-Mail:</label>
                <div class="col-md-3">
                    <input type="email" class="form-control form-control-sm" value="SURPORTE@EMAIL.COM">
                </div>
            </div>
            </p>
            <p>
            <div class="row mb-1">
                <label for="inputEmail3" class="col-sm-1 " style="font-size: 11px; margin-left:10px; color:#2196F5;">Apelido:</label>
                <div class="col-md-3">
                    <input type="email" class="form-control form-control-sm">
                </div>
            </div>
            </p>
        </div>
    </fieldset>
    <fieldset class="border" style="margin-top: 20px;">
        <legend class="fw-bold" style="color: #2196F5; font-size: 13px;">TRIBUTAÇÃO</legend>

        <p><label class="px-2" style="font-size: 13px;">Serviço Prestado:</label> <label style="font-size: 12px;" class="fw-bold">No Município</label></p>


    </fieldset>
    <fieldset class="border" style="margin-top: 20px;">
        <legend class="fw-bold" style="color: #2196F5; font-size: 13px;">SERVIÇO</legend>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Serviço</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Valor Unitário</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Dedução</th>
                    <th scope="col"></th>
                </tr>
            </thead>




            <tbody>

                <tr>
                    <td scope="col">

                        <?php

                        if (isset($dado[0]['servico'])) {

                            $filtro = trim($dado[0]['servico']);
                        }

                        ?>

                        <?php

                        if (isset($filtro)) {

                            $dadoDescricao = $Cod->descricao($filtro); 
                            echo "<pre>";
                            //echo $dadoDescricao;
                            echo "</pre>";
                            
                        ?>
                            <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo $filtro; ?>">
                            <input type="hidden" class="form-control" id="descricao_prefeitura" name="descricao_prefeitura" value="<?php echo $dado[0]['descricao_prefeitura'] ?>">
                            <input type="hidden" class="form-control" id="aliquo" name="aliquo" value="<?php echo $dado[0]['aliqua'] ?>">
                            <input type="hidden" class="form-control" id="descricao" name="descricao" value="<?php echo mb_strtoupper($dadoDescricao, 'UTF-8') ?>">
                                                          
                            
                        <?php
                        } else {
                        ?>
                            <input type="text" class="form-control" id="codigo" name="codigo" value="">

                        <?php
                        }

                        ?>

                    </td>
                    <td scope="col">
                        <img src="../imgs/prompt_old.gif" id="search" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    </td>
                    <td scope="col">
                        <label><?php

                                if (isset($dado[0]['descricao_prefeitura'])) {

                                    echo strtoupper($dado[0]['descricao_prefeitura']);
                                }
                                ?>
                        </label>



                        <input type="hidden" name="" value="<?php echo $filtro; ?>">
                    </td>
                    <td scope="col">

                        <input type="text" value="" name="valorUnitario" id="valorUnitario" onKeyPress="return(moeda(this,'.',',',event))" class="form-control">

                    </td>
                    <td scope="col">

                        <input type="number" value="1" name="unidade" id="unidade" class="form-control">

                    </td>
                    <td scope="col">

                        <input type="number" class="form-control">

                    </td>
                    <td scope="col">
                        <img onclick="serviço()" src="../imgs/seta-curva-para-baixo.png" width="20px">
                    </td>
                </tr>

            </tbody>


        </table>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">CONSULTA DE SERVIÇO</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <p class="text-center"><b>LISTA DE SERVIÇOS</b></p>
                        <hr>

                        <fieldset class="border" style="margin-top: 30px; padding:30px">
                            <legend class="fw-bold" style="color: #2196F5; font-size: 13px;">SERVIÇOS</legend>
                            <form action="" method="POST">

                                <div class="mx-sm-3 mb-2">
                                    <label for="message-text" class="col-form-label">Código do Serviço:</label>
                                    <input type="text" class="form-control" id="codigo_servico" name="codigo_servico">
                                </div>
                                <div class="mx-sm-3 mb-2">
                                    <label for="recipient-name" class="col-form-label">Nome do Serviço:</label>
                                    <input type="text" class="form-control" id="desc_servico" name="desc_servico">
                                </div>
                                <div class="text-end" style="margin-top: 20px;">
                                    <button type="submit" name="submet" class="btn btn-primary">Pesquisar</button>
                                </div>
                            </form>

                        </fieldset>
                        <?php



                        ?>
                        <br><br>
                        <div class="text-center" style="margin-top: 20px;">

                            <button type="button" class="btn btn-primary" onclick="lista()">Lista Serviços da Empresa</button>
                        </div>

                        <fieldset class="border" style="margin-top: 30px; padding:30px; display:none" id="total">



                            <?php


                            $dados = $Cod->selectCodigo();

                            echo "<pre>";
                            //var_dump($dados);
                            echo "</pre>";



                            foreach ($dados as $dados) {

                            ?>

                                <div class="mb-2 row">

                                    <div class="col-sm-12">

                                        <span class="form-text fs-5"> <b><?php echo $dados['servico']; ?></b> - <?php echo strtoupper($dados['descricao']); ?></span>

                                    </div>
                                </div>


                            <?php
                            }


                            ?>
                            <div class="text-end">

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
                                    </ul>
                                </nav>
                            </div>

                        </fieldset>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>


    </fieldset>

    <fieldset class="border" style="margin-top: 20px;">
        <legend class="fw-bold" style="color: #2196F5; font-size: 13px;">DESCRIÇÃO</legend>
        <table class="table">
            <thead class="table-primary table-striped">
                <tr>
                    <th scope="col">Descrição</th>
                    <th scope="col">Vlr.Serviço</th>
                    <th scope="col">Qtd</th>
                    <th scope="col">Total</th>
                    <th scope="col">Vlr.Dedução</th>
                    <th scope="col">Base de Cálculo</th>
                    <th scope="col">Alíquota</th>
                    <th scope="col">Vlr. Iss</th>
                    <th scope="col">Add Item</th>
                </tr>
            </thead>
            <tbody>
                <td scope="col"><label id="descricao_descricao"></label></td>
                <td scope="col"><label id="descricao_valor"></label></td>
                <td scope="col"><label id="descricao_quantidade"></label></td>
                <td scope="col"><label id="descricao_valor2"></label></td>
                <td scope="col"><label id="descricao_deducao"></label></td>
                <td scope="col"><label id="descricao_valor3"></label></td>
                <td scope="col"><label id="descricao_aliquota"></label></td>
                <td scope="col"><label id="descricao_iss"></label></td>
                <td scope="col"><label>+</label></td>
            </tbody>
        </table>
    </fieldset>





    <fieldset class="border" style="margin-top: 20px;">
        <legend class="fw-bold" style="color: #357EBD; font-size: 13px;">SERVIÇO</legend>

        <table class="table">
            <thead class="table-success table-striped">
                <tr>
                    <th scope="col">PIS R$</th>
                    <th scope="col">Cofins R$</th>
                    <th scope="col">CSLL R$</th>
                    <th scope="col">IRRF R$</th>
                    <th scope="col">INSS R$</th>
                    <th scope="col">Outras Retenções</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td scope="col">

                        <input type="number" class="form-control">

                    </td>
                    <td scope="col">

                        <input type="number" class="form-control">

                    </td>
                    <td scope="col">

                        <input type="number" class="form-control">

                    </td>
                    <td scope="col">

                        <input type="number" class="form-control">

                    </td>
                    <td scope="col">
                        <input type="number" class="form-control">
                    </td>
                    <td scope="col">
                        <input type="number" class="form-control">
                    </td>
                </tr>

            </tbody>
        </table>



    </fieldset>
    <fieldset class="border" style="margin-top: 20px;">
        <legend class="fw-bold" style="color: #2196F5; font-size: 13px;">DESCRIÇÃO GERAL DO SERVIÇO</legend>
        
        <div class="row mb-1">
            <div id="itens">
    
            </div>
              <div class="mb-12">

                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>

    </fieldset>
    <fieldset class="border" style="margin-top: 20px;">
        <legend class="fw-bold" style="color: #2196F5; font-size: 13px;">SUBSTITUIÇÃO DO RECIBO PROVISÓRIO DE SERVIÇOS (RPS) POR NFS-E</legend>

        <div class="row g-1 m-t-2">
            <div class="col-md-1">
                <label for="staticEmail2">Nº do RPS:</label>

            </div>
            <div class="col-md-2">
                <input type="text" class="form-control">
            </div>
            <div class="col-md-1">
                <label for="staticEmail2"> Série do RPS:</label>
            </div>
            <div class="col-md-2">
                <label for="staticEmail2"> Data de Emissão do RPS:</label>
            </div>
            <div class="col-md-2">
                <input type="date" class="form-control">
            </div>

            <div class="col-md-2">
                <label for="staticEmail2">Código de Verificação:</label>

            </div>
            <div class="col-md-1">
                <input type="text" class="form-control">
            </div>


        </div>



    </fieldset>

    <div class="text-center" style="margin-top: 20px;">

        <form class="g-2" method="POST">
            <button type="button" class="btn btn-primary">Voltar</button>
            <button type="submit" class="btn btn-success">Visualizar</button>
        </form>
    </div>
</div>

<?php
require_once "../layout/footer.html";

?>

<script>
    $(document).ready(function() {

        document.getElementById('total').style.display = 'none'
    });

    function lista() {

        if (document.getElementById('total').style.display == 'none') {
            document.getElementById('total').style.display = 'block'
        } else {
            document.getElementById('total').style.display = 'none'
        }

    }
</script>

<script language="javascript">
    function moeda(a, e, r, t) {
        let n = "",
            h = j = 0,
            u = tamanho2 = 0,
            l = ajd2 = "",
            o = window.Event ? t.which : t.keyCode;
        if (13 == o || 8 == o)
            return !0;
        if (n = String.fromCharCode(o),
            -1 == "0123456789".indexOf(n))
            return !1;
        for (u = a.value.length,
            h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
        ;
        for (l = ""; h < u; h++)
            -
            1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
        if (l += n,
            0 == (u = l.length) && (a.value = ""),
            1 == u && (a.value = "0" + r + "0" + l),
            2 == u && (a.value = "0" + r + l),
            u > 2) {
            for (ajd2 = "",
                j = 0,
                h = u - 3; h >= 0; h--)
                3 == j && (ajd2 += e,
                    j = 0),
                ajd2 += l.charAt(h),
                j++;
            for (a.value = "",
                tamanho2 = ajd2.length,
                h = tamanho2 - 1; h >= 0; h--)
                a.value += ajd2.charAt(h);
            a.value += r + l.substr(u - 2, u)
        }
        return !1
    }
</script>



<!-------------------------------------->
<script>
    function serviço() {

        var prefeitura = document.getElementById('descricao_prefeitura').value;
        var unidade = document.getElementById('unidade').value;
        var aliquo = document.getElementById('aliquo').value;
        var descricao = document.getElementById('descricao').value;


        var label1 = document.getElementById('descricao_descricao');
        label1.innerHTML = prefeitura;


        var total = document.getElementById('valorUnitario').value;
        var valor = document.getElementById('descricao_valor');
        valor.innerHTML = total;


        var valor2 = document.getElementById('descricao_valor2');
        valor2.innerHTML = total;



        var valor3 = document.getElementById('descricao_valor3');
        valor3.innerHTML = total;

        var unidade = document.getElementById('unidade').value
        var labalUnidade = document.getElementById('descricao_quantidade')
        labalUnidade.innerHTML = unidade;


        var labalAliquo = document.getElementById('descricao_aliquota');
        labalAliquo.innerHTML = aliquo;

        document.getElementById('itens').innerHTML= descricao;
    }
</script>
<!-------------------------------------->