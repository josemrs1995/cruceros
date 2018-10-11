<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$post = new FieldsBuilder('Espacio_de_campos');

$post
    ->setLocation('post_type', '==', 'post');
  
$post
    ->addFields(get_field_partial('partials.prueba'))
    ->addFields(get_field_partial('partials.general'))
    ->addFields(get_field_partial('partials.header'))

    ;return $post;