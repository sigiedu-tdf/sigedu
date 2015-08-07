<?php
class CursosController extends AppController {

	var $name = 'Cursos';
    var $paginate = array('Curso' => array('limit' => 4, 'order' => 'Curso.id DESC'));

	function index() {
		$this->Curso->recursive = 0;
		$this->set('cursos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Curso no valido.'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('curso', $this->Curso->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Curso->create();
			if ($this->Curso->save($this->data)) {
				$this->Session->setFlash(__('El curso ha sido grabado.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El curso no ha sido grabado. Favor, intente nuevamente.'));
			}
		}
		$centros = $this->Curso->Centro->find('list');
		$titulacions = $this->Curso->Titulacion->find('list');
		$modalidads = $this->Curso->Modalidad->find('list');
		$materias = $this->Curso->Materia->find('list');
		$ciclos = $this->Curso->Ciclo->find('list');
		$this->set(compact('centros', 'titulacions', 'modalidads', 'materias', 'ciclos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Curso no valido.'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Curso->save($this->data)) {
				$this->Session->setFlash(__('El curso ha sido grabado.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El curso no ha sido grabado. Favor, intente nuevamente.'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Curso->read(null, $id);
		}
		$centros = $this->Curso->Centro->find('list');
		$titulacions = $this->Curso->Titulacion->find('list');
		//$modalidads = $this->Curso->Modalidad->find('list');
		$ciclos = $this->Curso->Ciclo->find('list');
		$this->set(compact('centros', 'titulacions', 'modalidads', 'ciclos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Id no valido para curso'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Curso->delete($id)) {
			$this->Session->setFlash(__('Curso borrado'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Curso no fue borrado'));
		$this->redirect(array('action' => 'index'));
	}
}
?>