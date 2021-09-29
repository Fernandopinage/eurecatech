<?php
require_once "../layout/head.html";
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
                    <th scope="col">Valor Unitário</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Dedução</th>
                    <th scope="col"></th>
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
                        <img src="../imgs/seta-curva-para-baixo.png" width="20px">
                    </td>
                </tr>

            </tbody>
        </table>



    </fieldset>
    <fieldset class="border" style="margin-top: 20px;">
        <legend class="fw-bold" style="color: #2196F5; font-size: 13px;">TOTAIS</legend>

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
</div>

<?php
require_once "../layout/footer.html";

?>