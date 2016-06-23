<?php
return array(
    'db' => array(
        'dsn' => 'mysql:host=localhost;dbname=site',
        'user' => 'root',
        'pass' => 'Kasamargit22',
    ),
    'forms' => array(
        'register' => array(
            'name' => 'register',
            'id' => 'form1',
            'method' => 'post',
            'action' => 'index.php',
            'fields' => array(
                'first_name' => array(
                    'label' => 'First Name',
                    'type' => 'text',
                    'name' => 'first_name',
                    'priority' => 1,
                    'required' => true,
                    'value' => '',
                    'validator' => array(
                        'StringLength' => array(
                            'minimum' => 2,
                            'maximum' => 30,
                            ),
                        ),
                    ),
                'last_name' => array(
                    'label' => 'Last Name',
                    'type' => 'text',
                    'name' => 'last_name',
                    'priority' => 2,
                    'required' => true,
                    'value' => '',
                    'validator' => array(
                        'StringLength' => array(
                            'minimum' => 2,
                            'maximum' => 30,
                        ),
                    ),
                ),
                'email' => array(
                    'label' => 'Email',
                    'type' => 'text',
                    'name' => 'email',
                    'priority' => 3,
                    'required' => true,
                    'value' => '',
                    'validator' => 'email',
                ),
                'emailPreferredContact' => array(
                    'label' => 'Contact By Email',
                    'type' => 'checkbox',
                    'name' => 'email_preferred_contact',
                    'priority' => 4,
                    'required' => true,
                    'value' => false,
                    'validator' => 'boolean',
                ),
                'country' => array(
                    'label' => 'Country',
                    'type' => 'select',
                    'name' => 'country',
                    'multiple' => false,
                    'priority' => 5,
                    'required' => true,
                    'value' => '',
                    'options' => 'country',
                    'validator' => 'InArray',
                ),
                'submit' => array(
                    'type' => 'submit',
                    'priority' => 6,
                    'value' => 'Submit',
                ),
            ),
        ),
        'login' => array(
            'name' => 'login',
            'id' => 'form1',
            'method' => 'post',
            'action' => 'index.php',
            'fields' => array(
                'username' => array(
                    'type' => 'text',
                    'name' => 'username',
                    'priority' => 1,
                    'required' => true,
                    'value' => '',
                ),
                'password' => array(
                    'type' => 'password',
                    'name' => 'password',
                    'priority' => 2,
                    'required' => true,
                    'value' => '',
                ),
            ),
        ),
    ),
);