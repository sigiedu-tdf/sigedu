<?php
class Nota extends AppModel {
	var $name = 'Nota';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Alumno' => array(
			'className' => 'Alumno',
			'foreignKey' => 'alumno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Materia' => array(
			'className' => 'Materia',
			'foreignKey' => 'materia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ciclo' => array(
			'className' => 'Ciclo',
			'foreignKey' => 'ciclo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)	
	);
	
	//Validaciones
	
	var $validate = array(
                   'nota_uno_primer_periodo' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => false,
						   'message' => 'La calificación no es válida. Indicar un valor entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => array('decimal',2), 
                           'allowEmpty' => false,       
                           'message' => 'La calificación no es válida. Indicar nota con dos decimales.'
                           )
                   ),
				   'nota_dos_primer_periodo' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => array('decimal',2), 
                           'allowEmpty' => true,       
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota con dos decimales.'
                           )
                   ),
				   'nota_tres_primer_periodo' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => array('decimal',2), 
                           'allowEmpty' => true,       
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota con dos decimales.'
                           )
                   ),
				   'promedio_primer_periodo' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => 'numeric', 
                           'allowEmpty' => true,       
                           'message' => 'La calificación no es válida. Indicar nota sin signos ni decimales.'
                           )
                   ),
				   'nota_uno_segundo_periodo' => array(
				           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => array('decimal',2), 
                           'allowEmpty' => true,       
                           'message' => 'La calificación no es válida. Indicar nota con dos decimales.'
                           )			  
				   ),
				   'nota_dos_segundo_periodo' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => array('decimal',2), 
                           'allowEmpty' => true,       
                           'message' => 'La calificación no es válida. Indicar nota con dos decimales.'
                           )
                   ),
				   'nota_tres_segundo_periodo' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => array('decimal',2), 
                           'allowEmpty' => true,       
                           'message' => 'La calificación no es válida. Indicar nota con dos decimales.'
                           )
                   ),
				   'promedio_segundo_periodo' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => 'numeric', 
                           'allowEmpty' => true,       
                           'message' => 'La calificación no es válida. Indicar nota sin signos ni decimales.'
                           )
                   ),
				   'nota_uno_tercer_periodo' => array(
				           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => array('decimal',2), 
                           'allowEmpty' => true,       
                           'message' => 'La calificación no es válida. Indicar nota con dos decimales.'
                           )			  
				   ),
				   'nota_dos_tercer_periodo' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => array('decimal',2), 
                           'allowEmpty' => true,       
                           'message' => 'La calificación no es válida. Indicar nota con dos decimales.'
                           )
                   ),
				   'nota_tres_tercer_periodo' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => array('decimal',2), 
                           'allowEmpty' => true,       
                           'message' => 'La calificación no es válida. Indicar nota con dos decimales.'
                           )
                   ),
				   'promedio_tercer_periodo' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => 'numeric', 
                           'allowEmpty' => true,       
                           'message' => 'La calificación no es válida. Indicar nota sin signos ni decimales.'
                           )
                   ),
				   'promedio_a_termino' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => array('decimal',2), 
                           'allowEmpty' => true,       
                           'message' => 'La calificación no es válida. Indicar nota con dos decimales.'
                           )
                   ),
				   'nota_en_diciembre' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => array('decimal',2), 
                           'allowEmpty' => true,       
                           'message' => 'La calificación no es válida. Indicar nota con dos decimales.'
                           )
                   ),
				   'nota_en_marzo' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => array('decimal',2), 
                           'allowEmpty' => true,       
                           'message' => 'La calificación no es válida. Indicar nota con dos decimales.'
                           )
                   ),
				   'promedio_final' => array(
                           'range' => array(
                           'rule'    => array('range', -1, 11),
                           'allowEmpty' => true,
						   'message' => 'La calificación no es válida. Indicar nota entre 0 y 10.'
                           ),
						   'numeric' => array(
                           'rule' => array('decimal',2), 
                           'allowEmpty' => true,       
                           'message' => 'La calificación no es válida. Indicar nota con dos decimales.'
                           )
                   ),
                   'observacion' => array(
                           'minLength' => array(
                           'rule' => array('minLength', 4), 
                           'allowEmpty' => true,       
                           'message' => 'Indicar una breve observacion.'
                           )
                   )                  
 
         );
		 
		 /**
		 * Ajusta el promedio de las notas del primer cuatrimestre.
		 */
		 function promedioPrimerCuat()
		 {
            
			   $promedio1 = ('Nota.notaPrimeraCuatPrimero'+'Nota.notaSegundaCuatPrimero')/2;
			   $this->updateAll(array('promCuatPrimero='=> $promedio1),
			                    array('Nota.notaPrimeraCuatPrimero!='=> 0,'Nota.notaSegundaCuatPrimero!='=> 0)); 
			   $this->create();				
		 }
}
?>