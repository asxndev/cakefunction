<?php
/**
 * this entity class name could be different to controller , table , DB table or anyother things 
 * it's only responsible to identify the each entity into DB 
 */
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