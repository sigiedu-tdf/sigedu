<?php
/* Inventario Fixture generated on: 2014-03-03 18:03:51 : 1393870791 */
class InventarioFixture extends CakeTestFixture {
	var $name = 'Inventario';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'fechaCreacion' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'observacion' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'empleado_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'fechaCreacion' => '2014-03-03',
			'observacion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'empleado_id' => 1
		),
	);
}
?>