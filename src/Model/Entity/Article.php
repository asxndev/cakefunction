<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Article extends Entity 
{

    protected $_accessible =[
        '*'=>true,
        'id'=>false,
         'slug'=>false
         
         /** it means that accessible property control how property can be modifed by  */
    ];
}