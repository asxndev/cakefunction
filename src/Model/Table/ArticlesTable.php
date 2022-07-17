<?php

namespace App\Model\Table;

use Cake\Event\EventInterface;
use Cake\ORM\Table;  
use Cake\Utility\Text;
use Cake\Validation\Validator;

/**
 * here this file is picking a table into ORM 
 * and it's also inside Cakephp framework 
 */

class ArticlesTable extends Table{
    /** now our ArticlesTable class will extends Table which is override to ORM 
     * now we have an table , okk;
     */

    public function initialize(array $config):void  
    /** here we are configuration an array by using initialize function and passing an array with the name of 
     * ($config)  and void (return nothing )
     */
    {
        $this->addBehavior('Timestamp');
        
        /** here this line means is that into our DB has key var like "modified" which type is DATETIME
         * so such type of value will handle by itself and it will handle by "Timestamp" and it returs data and time 
         * into structured form;
         * 
         */
    }


    

    public function beforeSave(EventInterface $event , $entity , $options) {
        if($entity->isNew() && !$entity->slug){
        $sluggedTitle = Text::slug($entity->title);
        $entity->slug= substr($sluggedTitle,0,191);
        }
    }

    public function validationDefault(Validator $validator): Validator{

        $validator->notEmptyString('title')
        ->minLength('title',10)
        ->maxLength('title',255)
        ->notEmptyString('body')
        ->minLength('body',10);
        return $validator;
    }

}