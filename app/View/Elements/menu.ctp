<!-- ************ bootstrap navbar ************ -->
<p>
<nav class="navbar navbar-custom navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">TraEs. - <?php //echo $title_for_layout?></a>
    </div>
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php if($current_user['role'] == 'admin'): ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link(__('Agentes'),'/empleados'); ?></li>
            <li><?php echo $this->Html->link(__('Usuarios'),'/users'); ?></li>
          </ul>
        </li>
		<?php endif; ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cajas curriculares <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link(__('Ciclos'),'/ciclos'); ?></li>
            <li><?php echo $this->Html->link(__('Titulaciones'),'/titulacions'); ?></li>
            <li><?php echo $this->Html->link(__('Cursos'), '/cursos'); ?></li>
            <li><?php echo $this->Html->link(__('Materias'), '/materias'); ?></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Alumnado <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link(__('Alumnos'),'/alumnos'); ?></li>
            <li><?php echo $this->Html->link(__('Inscripciones'), '/inscripcions'); ?></li>
            <li><?php echo $this->Html->link('Matrículas', array('controller' => 'cursos_inscripcions', 'action' => 'index')) ?></li>
            <li><?php echo $this->Html->link(__('Inasistencias'), '/inasistencias'); ?></li>
            <li><?php echo $this->Html->link(__('Calificaciones'), '/notas'); ?></li>
            <li><?php echo $this->Html->link(__('Mesa de Exámenes'), '/mesaexamens'); ?></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Recursos <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><?php echo $this->Html->link(__('Tablas'),'/report_manager/reports');?></li>
           <li><?php echo $this->Html->link(__('Gráficos'), '/graficos'); ?></li>
           <li><?php echo $this->Html->link(__('Calendario'),'/full_calendar');?></li>
          </ul>
        </li>
        <li>

		<?php echo $this->Html->link(__('Cerrar Sessión'),'/logout', array('class' => 'btn btn-success navbar-btn btn-lg')); ?>
        </li>
      </div> <!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>