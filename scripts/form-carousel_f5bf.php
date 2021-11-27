<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'nuevo mensaje en la pagina ',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'https://edwin2032.github.io/Task-Mater-/ ',
    'to' => 'leninarqueta12@gmail.com '
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'email\' is required.'
    )
    ),
    'phone' => array(
    'order' => 3,
    'type' => 'tel',
    'label' => 'Teléfono',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Teléfono\' is required.'
    )
    ),
    'message' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Mensaje',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Mensaje\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor();
    $processor->process($form);

    ?>