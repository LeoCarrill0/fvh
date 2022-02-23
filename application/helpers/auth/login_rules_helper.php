<?php
function getLoginRules() {
    return array(
        array(
            'field' => 'username',
            'label' => 'Nombre',
            'rules' => 'required|trim',
            'errors' => array(
                'required' => 'El %s es requerido',
            ),
        ),
        array(
            'field' => 'password',
            'label' => 'Contraseña',
            'rules' => 'required|trim',
            'errors' => array(
                    'required' => 'El %s es requerido',
            ),
        ),
    );
}