<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$setup = new FieldsBuilder('setup');

$setup
    ->addTab('Detalles', ['placement' => 'left'])
        ->addDatePicker('fecha', [
            'name' => 'Fecha de Salida',
            'required' => 1,
            ])
        ->addText('barco', [
            'name' => 'Barco',
            'required' => 1,
            ])
        ->addNumber('duracion', [
            'name' => 'Duracion',
            'required' => 1,
            'append' => 'Días',
            ])
        ->addText('salida', [
            'name' => 'Puerto de Salida',
            'required' => 1,
            ])
    ->addTab('Precio', ['placement' => 'left'])
        ->addNumber('precio', [
            'name' => 'Precio',
            'required' => 1,
            'prepend' => 'USD',
            ])
        ->addNumber('oferta', [
            'name' => 'Precio de Oferta',
            'required' => 1,
            'prepend' => 'USD',
            ])
        ->addTrueFalse('promocion', [
            'ui' => 1,
            'name' => '¿En Promoción?',
            
            ])       
        

;return $setup;