<!-- start main -->
 <div id="main">
 
 <h2>Ciclos</h2>
			<!-- start second nav -->
 <div id="second-nav">
 	  <ul>
        <li><?php echo $this->Html->link(__('Nuevo Ciclo', true), array('action' => 'add')); ?></li>
 	  </ul>
 </div>
 <!-- end second nav -->
 
    <dl><?php $i = 0; $class = ' class="altrow"';?>
		<!--<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ciclo['Ciclo']['id']; ?>
			&nbsp;
		</dd>-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Ciclo'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ciclo['Ciclo']['ciclo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('FechaInicio'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ciclo['Ciclo']['fechaInicio']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('FechaFinal'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ciclo['Ciclo']['fechaFinal']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('PrimerCuatrimestre'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ciclo['Ciclo']['primerCuatrimestre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('SegundoCuatrimestre'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ciclo['Ciclo']['segundoCuatrimestre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><strong><?php __('Observaciones'); ?></strong></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ciclo['Ciclo']['observaciones']; ?>
			&nbsp;
		</dd>
	</dl>
 
 </div>
 <!-- end main -->
 <!-- start sidebar -->
 <div id="sidebar">
		
		<div id="invoice-stats">
   		
        </div>
  <div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Ciclo', true), array('action' => 'edit', $ciclo['Ciclo']['id'])); ?> </li>
		<!--<li><?php echo $this->Html->link(__('Borrar Ciclo', true), array('action' => 'delete', $ciclo['Ciclo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ciclo['Ciclo']['id'])); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Ciclos', true), array('action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Ciclo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Inscripcions', true), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Inscripcion', true), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Cargos', true), array('controller' => 'cargos', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Cargo', true), array('controller' => 'cargos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Cursos', true), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add')); ?> </li>-->
		<li><?php echo $this->Html->link(__('Listar Materias', true), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<!--<li><?php echo $this->Html->link(__('New Materia', true), array('controller' => 'materias', 'action' => 'add')); ?> </li>-->
	</ul>
  </div>
</div>	
<!-- end sidebar -->
  <div class="related">
	<h3><?php __('Cargos Relacionados');?></h3>
	<?php if (!empty($ciclo['Cargo'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php __('Id'); ?></th>-->
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Tipo'); ?></th>
		<th><?php __('Resolucion Nro'); ?></th>
		<th><?php __('Hs Catedra'); ?></th>
		<!--<th><?php __('Hs Reloj'); ?></th>-->
		<th><?php __('Area'); ?></th>
		<th><?php __('Puesto'); ?></th>
		<th><?php __('Descricpion'); ?></th>
		<th><?php __('Creacion'); ?></th>
		<th><?php __('Cierre'); ?></th>
		<th><?php __('Alta'); ?></th>
		<th><?php __('Baja'); ?></th>
		<th><?php __('Cambio Situacion'); ?></th>
		<th><?php __('Estado'); ?></th>
		<th><?php __('Centro Id'); ?></th>
		<th><?php __('Curso Id'); ?></th>
		<!--<th><?php __('Materia Id'); ?></th>-->
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ciclo['Cargo'] as $cargo):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<!--<td><?php echo $cargo['id'];?></td>-->
			<td><?php echo $cargo['nombre'];?></td>
			<td><?php echo $cargo['tipo'];?></td>
			<td><?php echo $cargo['resolucionNro'];?></td>
			<td><?php echo $cargo['hsCatedra'];?></td>
			<!--<td><?php echo $cargo['hsReloj'];?></td>-->
			<td><?php echo $cargo['area'];?></td>
			<td><?php echo $cargo['puesto'];?></td>
			<td><?php echo $cargo['descricpion'];?></td>
			<td><?php echo $cargo['fechaCreacion'];?></td>
			<td><?php echo $cargo['fechaCierre'];?></td>
			<td><?php echo $cargo['fechaAltaPersona'];?></td>
			<td><?php echo $cargo['fechaBajaPersona'];?></td>
			<td><?php echo $cargo['fechaCambioSituacionPersona'];?></td>
			<td><?php echo $cargo['estado'];?></td>
			<td><?php echo ($this->Html->link($cargo['centro_id'], array('controller' => 'centros', 'action' => 'view', $cargo['centro_id'])));?></td>
			<td><?php echo ($this->Html->link($cargo['curso_id'], array('controller' => 'centros', 'action' => 'view', $cargo['curso_id'])));?></td>
			<!--<td><?php echo ($this->Html->link($cargo['materia_id'], array('controller' => 'centros', 'action' => 'view', $cargo['materia_id'])));?></td>-->
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'cargos', 'action' => 'view', $cargo['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'cargos', 'action' => 'edit', $cargo['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'cargos', 'action' => 'delete', $cargo['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cargo['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cargo', true), array('controller' => 'cargos', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<div class="related">
	<h3><?php __('Inscripciones Relacionadas');?></h3>
	<?php if (!empty($ciclo['Inscripcion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<!--<th><?php __('Id'); ?></th>-->
		<th><?php __('Tipo'); ?></th>
		<th><?php __('Fecha'); ?></th>
		<th><?php __('Alumno Id'); ?></th>
		<th><?php __('Ciclo Id'); ?></th>
		<th><?php __('Centro Id'); ?></th>
		<th><?php __('Curso Id'); ?></th>
		<!--<th><?php __('Materia Id'); ?></th>-->
		<th><?php __('Empleado Id'); ?></th>
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ciclo['Inscripcion'] as $inscripcion):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<!--<td><?php echo $inscripcion['id'];?></td>-->
			<td><?php echo $inscripcion['tipoInscripcion'];?></td>
			<td><?php echo $inscripcion['fechaInscripcion'];?></td>
			<td><?php echo ($this->Html->link($inscripcion['alumno_id'], array('controller' => 'alumnos', 'action' => 'view', $inscripcion['alumno_id'])));?></td>
			<td><?php echo ($this->Html->link($inscripcion['ciclo_id'], array('controller' => 'ciclos', 'action' => 'view', $inscripcion['ciclo_id'])));?></td>
			<td><?php echo ($this->Html->link($inscripcion['centro_id'], array('controller' => 'centros', 'action' => 'view', $inscripcion['centro_id'])));?></td>
			<td><?php echo ($this->Html->link($inscripcion['curso_id'], array('controller' => 'cursos', 'action' => 'view', $inscripcion['curso_id'])));?></td>
			<!--<td><?php echo ($this->Html->link($inscripcion['materia_id'], array('controller' => 'materias', 'action' => 'view', $inscripcion['materia_id'])));?></td>-->
			<td><?php echo ($this->Html->link($inscripcion['empleado_id'], array('controller' => 'empleados', 'action' => 'view', $inscripcion['empleado_id'])));?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'inscripcions', 'action' => 'view', $inscripcion['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'inscripcions', 'action' => 'edit', $inscripcion['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'inscripcions', 'action' => 'delete', $inscripcion['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $inscripcion['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inscripcion', true), array('controller' => 'inscripcions', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>

<div class="related">
	<h3><?php __('Cursos Relacionados');?></h3>
	<?php if (!empty($ciclo['Curso'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Anio'); ?></th>
		<th><?php __('Division'); ?></th>
		<th><?php __('Turno'); ?></th>
		<th><?php __('AulaNro'); ?></th>
		<th><?php __('Observacion'); ?></th>
		<th><?php __('Centro Id'); ?></th>
		<th><?php __('Orientacion Id'); ?></th>
		<th><?php __('Modalidad Id'); ?></th>
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ciclo['Curso'] as $curso):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $curso['id'];?></td>
			<td><?php echo $curso['anio'];?></td>
			<td><?php echo $curso['division'];?></td>
			<td><?php echo $curso['turno'];?></td>
			<td><?php echo $curso['aulaNro'];?></td>
			<td><?php echo $curso['observacion'];?></td>
			<td><?php echo ($this->Html->link($curso['centro_id'], array('controller' => 'centros', 'action' => 'view', $curso['centro_id'])));?></td>
			<td><?php echo ($this->Html->link($curso['orientacion_id'], array('controller' => 'orientacions', 'action' => 'view', $curso['orientacion_id'])));?></td>
			<td><?php echo ($this->Html->link($curso['modalidad_id'], array('controller' => 'modalidads', 'action' => 'view', $curso['modalidad_id'])));?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'cursos', 'action' => 'view', $curso['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'cursos', 'action' => 'edit', $curso['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'cursos', 'action' => 'delete', $curso['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $curso['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Curso', true), array('controller' => 'cursos', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
</div>
<div class="related">
	<h3><?php __('Materias Relacionadas');?></h3>
	<?php if (!empty($ciclo['Materia'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Alia'); ?></th>
		<th><?php __('Contenido'); ?></th>
		<th><?php __('HsSemanal'); ?></th>
		<th><?php __('Observacion'); ?></th>
		<th><?php __('Curso Id'); ?></th>
		<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ciclo['Materia'] as $materia):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $materia['id'];?></td>
			<td><?php echo $materia['nombre'];?></td>
			<td><?php echo $materia['alia'];?></td>
			<td><?php echo $materia['contenido'];?></td>
			<td><?php echo $materia['hsSemanal'];?></td>
			<td><?php echo $materia['observacion'];?></td>
			<td><?php echo $materia['curso_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'materias', 'action' => 'view', $materia['id'])); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'materias', 'action' => 'edit', $materia['id'])); ?>
				<!--<?php echo $this->Html->link(__('Borrar', true), array('controller' => 'materias', 'action' => 'delete', $materia['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $materia['id'])); ?>-->
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<!--<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Materia', true), array('controller' => 'materias', 'action' => 'add'));?> </li>
		</ul>
	</div>-->
  </div>
</div>




