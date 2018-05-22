<?php
require_once "../../elements/admin/header.php";
require_once "../../elements/admin/sidebar.php";
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Avaliações
      <small>Cadastrar</small>
    </h1>
  </section>

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Informe os dados da avaliação</h3>
        </div>
        <form role="form">
          <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" placeholder="Digite o título da avaliação">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="data">Data</label>
                    <input type="date" class="form-control" id="data">
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" id="descricao"></textarea>
                  </div>
                </div>
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Salvar Avaliação</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
</div>

<?php require_once "../../elements/admin/footer.php" ?>
