<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page = new FieldsBuilder('cruceros');

$page
    ->setLocation('post_type', '==', 'cruceros');
  
$page

    ->addFields(get_field_partial('partials.cruceros-setup'))
    

    
;return $page;