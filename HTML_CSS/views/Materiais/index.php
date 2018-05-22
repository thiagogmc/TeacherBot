<?php
require_once "../../elements/admin/header.php";
require_once "../../elements/admin/sidebar.php";
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Materiais
            <small>Lista</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Materiais cadastrados</h3>

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
                                <th>Assunto</th>
                                <th><i class="fa fa-cog"></i></th>
                            </tr>
                            <tr>
                                <td>183</td>
                                <td>PHP do Jeito Certo</td>
                                <td>PHP</td>
                                <td>
                                    <a href="view.php" class="btn btn-default btn-xs" title="Ver"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>219</td>
                                <td>JAVASCRIPT for Dummies</td>
                                <td>JS</td/>
                                <td>
                                    <a href="view.php" class="btn btn-default btn-xs" title="Ver"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>657</td>
                                <td>HTML e CSS COOKBOOK</td>
                                <td>Desenvolvimento WEB</td>
                                <td>
                                    <a href="view.php" class="btn btn-default btn-xs" title="Ver"><i class="fa fa-eye"></i></a>
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
