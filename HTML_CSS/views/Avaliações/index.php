<?php
require_once "../../elements/admin/header.php";
require_once "../../elements/admin/sidebar.php";
?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Avaliações
      <small>Lista</small>
    </h1>
  </section>

  <section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Avaliações cadastradas</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Pesquisar">
              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>ID</th>
              <th>Título</th>
              <th>Data</th>
              <th><i class="fa fa-cog"></i></th>
            </tr>
            <tr>
              <td>183</td>
              <td>AB1</td>
              <td>11/07/2018</td>
              <td>
                <a href="view.php" class="btn btn-default btn-xs" title="Ver"><i class="fa fa-eye"></i></a>
                <button href="#" class="btn btn-danger btn-xs" title="Excluir"><i class="fa fa-trash"></i></button>
              </td>
            </tr>
            <tr>
              <td>219</td>
              <td>AB2</td>
              <td>14/07/2018</td/>
              <td>
                <a href="view.php" class="btn btn-default btn-xs" title="Ver"><i class="fa fa-eye"></i></a>
                <button href="#" class="btn btn-danger btn-xs" title="Excluir"><i class="fa fa-trash"></i></button>
              </td>
            </tr>
            <tr>
              <td>657</td>
              <td>Reavaliação</td>
              <td>20/07/2018</td>
              <td>
                <a href="view.php" class="btn btn-default btn-xs" title="Ver"><i class="fa fa-eye"></i></a>
                <button href="#" class="btn btn-danger btn-xs" title="Excluir"><i class="fa fa-trash"></i></button>
              </td>
            </tr>
            <tr>
              <td>175</td>
              <td>Final</td>
              <td>25/07/2018</td>
              <td>
                <a href="view.php" class="btn btn-default btn-xs" title="Ver"><i class="fa fa-eye"></i></a>
                <button href="#" class="btn btn-danger btn-xs" title="Excluir"><i class="fa fa-trash"></i></button>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  </section>
</div>

<?php require_once "../../elements/admin/footer.php" ?>
