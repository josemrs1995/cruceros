<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$prueba = new FieldsBuilder('prueba');

$prueba
    ->addTab('Jerinson', ['placement' => 'left'])
        ->addText('Nombre_de_jerinson', [
            'required' => 1,
            ])

;return $prueba;