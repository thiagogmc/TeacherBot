<?php
require_once "../../elements/admin/header.php";
require_once "../../elements/admin/sidebar.php";
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Questões
            <small>Cadastrar</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Informe os dados da Questão a ser cadastrada</h3>
                    </div>
                    <form role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="titulo">Pergunta</label>
                                        <input type="text" class="form-control" id="pergunta" placeholder="Digite a pergunta da questão">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="alternativaCorreta">Alternativa Correta</label>
                                        <input type="text" class="form-control" id="alternativaCorreta" placeholder="Alternativa Correta">

                                        <label for="errada1">Alternativa Errada 1</label>
                                        <input type="text" class="form-control" id="errada1" placeholder="Alternativa Errada 1">

                                        <label for="errada2">Alternativa Errada 2</label>
                                        <input type="text" class="form-control" id="errada2" placeholder="Alternativa Errada 2">

                                        <label for="errada3">Alternativa Errada 3</label>
                                        <input type="text" class="form-control" id="errada3" placeholder="Alternativa Errada 3">

                                        <label for="errada4">Alternativa Errada 4</label>
                                        <input type="text" class="form-control" id="errada4" placeholder="Alternativa Errada 4">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Enviar Aviso</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?php require_once "../../elements/admin/footer.php" ?>
