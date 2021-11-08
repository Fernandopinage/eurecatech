<?php
include_once "../layout/head.php";
?>

<div class="container" style="margin-top: 100px;">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">COD</th>
                <th scope="col">NOME</th>
                <th scope="col">CNPJ</th>
                <th scope="col">PREVIEW</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Luciana Rodrigues Cirino </td>
                <td>54.870.138/0001-70</td>
                <td><img src="../icons/view.png" width="22px"></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Davi lopes Viana Silva </td>
                <td>58.963.740/0001-03</td>
                <td><img src="../icons/view.png" width="22px"></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Camila Vitória Dantas de Souza</td>
                <td>07.783.193/0001-43</td>
                <td><img src="../icons/view.png" width="22px"></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>William Reynaldo Lemos Guimarães Silva</td>
                <td>18.702.649/0001-10</td>
                <td><img src="../icons/view.png" width="22px"></td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Jacob</td>
                <td>60.168.363/0001-62</td>
                <td><img src="../icons/view.png" width="22px"></td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>Maria Vitória Nazário Leite Nazário</td>
                <td>93.725.973/0001-79</td>
                <td><img src="../icons/view.png" width="22px"></td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>Maria Paula Felismino de Sales Nunes</td>
                <td>93.725.973/0001-79</td>
                <td><img src="../icons/view.png" width="22px"></td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td>Jacob</td>
                <td>46.632.576/0001-72</td>
                <td><img src="../icons/view.png" width="22px"></td>
            </tr>
            <tr>
                <th scope="row">9</th>
                <td>Francisco Geovany Alves dos Santos</td>
                <td>41.916.726/0001-56</td>
                <td><img src="../icons/view.png" width="22px"></td>
            </tr>
            <tr>
                <th scope="row">10</th>
                <td>Esther Lopes Neves</td>
                <td>34.134.499/0001-41</td>
                <td><img src="../icons/view.png" width="22px"></td>
            </tr>
        </tbody>
    </table>
    <div class="text-center">

    <nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link"><<</a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item" aria-current="page">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">>></a>
    </li>
  </ul>
</nav>
    </div>
</div>

<?php
require_once "../layout/footer.html";

?>