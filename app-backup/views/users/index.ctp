<div class="users index">
	</br></br>
	<h2><?php __('Usuarios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombreUsuario');?></th>
			<!--<th><?php echo $this->Paginator->sort('clave');?></th>-->
			<th><?php echo $this->Paginator->sort('role');?></th>
			<th><?php echo $this->Paginator->sort('puesto');?></th>
			<th><?php echo $this->Paginator->sort('centro_id');?></th>
			<th><?php echo $this->Paginator->sort('empleado_id');?></th>
			<th class="actions"><?php __('Opciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($users as $users):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $users['User']['id']; ?>&nbsp;</td>
		<td><?php echo $users['User']['username']; ?>&nbsp;</td>
		<!--<td><?php echo $users['User']['password']; ?>&nbsp;</td>-->
		<td><?php echo $users['User']['role']; ?>&nbsp;</td>
		<td><?php echo $users['User']['puesto']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($users['Centro']['sigla'], array('controller' => 'centros', 'action' => 'view', $users['Centro']['sigla'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($users['Empleado']['apellido'], array('controller' => 'empleados', 'action' => 'view', $users['Empleado']['apellido'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $users['User']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $users['User']['id'])); ?>
			<!--<?php echo $this->Html->link(__('Borrar', true), array('action' => 'delete', $users['User']['id']), null, sprintf(__('Est� seguro de borrar # %s?', true), $users['User']['id'])); ?>-->
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('anterior', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Usuario', true), array('action' => 'add')); ?></li>
		<!--<li><?php echo $this->Html->link(__('Listar Centros', true), array('controller' => 'centros', 'action' => 'index')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('New Centro', true), array('controller' => 'centros', 'action' => 'add')); ?> </li>-->
		<!--<li><?php echo $this->Html->link(__('Listar Empleados', true), array('controller' => 'empleados', 'action' => 'index')); ?>--> </li>
		<!--<li><?php echo $this->Html->link(__('New Empleado', true), array('controller' => 'empleados', 'action' => 'add')); ?> </li>-->
	</ul>
</div>