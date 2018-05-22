<aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU</li>
      <?php
      $tabelas[] = 'Avaliações';
      $tabelas[] = 'Avisos';
      $tabelas[] = 'Bot';
      $tabelas[] = 'Materiais';
      $tabelas[] = 'Questões';
      ?>
      <?php foreach ($tabelas as $key => $tabela): ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span><?= $tabela ?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../<?=$tabela?>/index.php"><i class="fa fa-circle-o"></i> Lista</a></li>
            <li><a href="../<?=$tabela?>/add.php"><i class="fa fa-circle-o"></i> Cadastrar</a></li>
          </ul>
        </li>
      <?php endforeach; ?>      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
