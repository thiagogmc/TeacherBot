<?php
require_once "../../elements/admin/header.php";
require_once "../../elements/admin/sidebar.php";
?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Materiais
            <small>Cadastrar</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Dados Material</h3>
                    </div>
                    <form role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="titulo">Título do Material</label>
                                        <input type="text" class="form-control" id="titulo" placeholder="Digite o título da mensagem">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="assunto">Assunto</label>
                                        <input type="text" class="form-control" id="assunto">
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="link">Link</label>
                                        <input type="text" class="form-control" id="link">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Salvar Material</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?php require_once "../../elements/admin/footer.php" ?>
