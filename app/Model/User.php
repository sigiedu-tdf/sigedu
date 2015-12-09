<?php

//App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel {
	
	var $name = 'User';
	public $displayField = 'username';
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Centro' => array(
			'className' => 'Centro',
			'foreignKey' => 'centro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Empleado' => array(
			'className' => 'Empleado',
			'foreignKey' => 'empleado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)		
	);
    
//Validaciones
   public $validate = array(
   'username' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Usuario obligatorio',
				'allowEmpty' => false
            ),
			'between' => array( 
				'rule' => array('between', 5, 15), 
				'required' => true, 
				'message' => 'El usuario debe contener entre 5 y 15 caracteres'
			),
			 'unique' => array(
				/*'rule'    => 'isUnique',*/
				'rule' => array('isUniqueUsername'),
				'message' => 'Este nombre de usuario ya está en uso'
			),
			/*'alphaNumeric' => array(
				'rule'    => 'alphaNumeric',
				'message' => 'El nombre de usuario solo puede contener letras y números'
			)*/
			'alphaNumericDashUnderscore' => array(
                'rule'    => array('alphaNumericDashUnderscore'),
                'message' => 'El nombre de Usuario puede sólo tener letras, números y guión bajo'
            ),
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Contraseña obligatoria'
            ),
			'min_length' => array(
				'rule' => array('minLength', '6'),  
				'message' => 'La contraseña debe tener al menos 6 caracteres'
			)
        ),
		'password_confirm' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Por favor confirme su contraseña'
            ),
			 'equaltofield' => array(
				'rule' => array('equaltofield','password'),
				'message' => 'Ambas contraseñas deben coincidir'
			)
        ),
   		'email' => array(
			'required' => array(
				'rule' => array('email', true),    
				'message' => 'Introduce un email válido'    
			),
			 'unique' => array(
				'rule'    => array('isUniqueEmail'),
				'message' => 'Este email ya está en uso',
			),
			'between' => array( 
				'rule' => array('between', 6, 60), 
				'message' => 'El email debe contener entre 6 y 60 caracteres'
			)
		),
		/*'rol' => array(
			'required' => array(
				'rule' => array('rol', true),    
				'message' => 'Introduce una opción de la lista'    
			),
			 'between' => array( 
				'rule' => array('between', 5, 64), 
				'message' => 'El rol debe contener entre 5 y 64 caracteres'
			)
		),*/
		'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'usuario')),
                'message' => 'Ingrese un rol válido',
                'allowEmpty' => false
            )
        ),
		'puesto' => array(
			'required' => array(
				'rule' => array('puesto', true),    
				'message' => 'Introduce una opción de la lista'    
			),
			 'between' => array( 
				'rule' => array('between', 5, 50), 
				'message' => 'El rol debe contener entre 5 y 50 caracteres'
			)
		),
		'password_update' => array(
			'min_length' => array(
				'rule' => array('minLength', '6'),   
				'message' => 'La contraseña debe contener al menos 6 caracteres'
			)
        ),
		'password_confirm_update' => array(
			 'equaltofield' => array(
				'rule' => array('equaltofield','password_update'),
				'message' => 'Ambas contraseñas no coinciden'
			)
        )           
	);

 	   /**
     * Before isUniqueUsername
     * @param array $options
     * @return boolean
     */
    function isUniqueUsername($check) {
         $username = $this->find(
            'first',
            array(
                'fields' => array(
                    'User.id',
                    'User.username'
                ),
                'conditions' => array(
                    'User.username' => $check['username']
                )
            )
        );
        if(!empty($username)){
            if($this->data[$this->alias]['id'] == $username['User']['id']){
                return true; 
            }else{
                return false; 
            }
        }else{
            return true; 
        }
    }
	
	public function alphaNumericDashUnderscore($check) {
        // $data array is passed using the form field name as the key
        // have to extract the value to make the function generic
        $value = array_values($check);
        $value = $value[0];
 
        return preg_match('/^[a-zA-Z0-9_ \-]*$/', $value);
    }
	
	public function equaltofield($check,$otherfield) { 
        //get name of field 
        $fname = ''; 
        foreach ($check as $key => $value){ 
            $fname = $key; 
            break; 
        } 
        return $this->data[$this->name][$otherfield] === $this->data[$this->name][$fname]; 
    }
	
	/**
     * Before isUniqueEmail
     * @param array $options
     * @return boolean
     */
    function isUniqueEmail($check) {
       $email = $this->find(
            'first',
            array(
                'fields' => array(
                    'User.id'
                ),
                'conditions' => array(
                    'User.email' => $check['email']
                )
            )
        );
        if(!empty($email)){
            if($this->data[$this->alias]['id'] == $email['User']['id']){
                return true; 
            }else{
                return false; 
            }
        }else{
            return true; 
        }
    }
	
	/**
	 * Before Save
	 * @param array $options
	 * @return boolean
	 */
	 public function beforeSave($options = array()) {
		// hash our password
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->                   alias]['password']);
		}
		// if we get a new password, hash it
		if (isset($this->data[$this->alias]['password_update'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->                   alias]['password_update']);
		}
		// fallback to our parent
		return parent::beforeSave($options);
	} 
}
?>