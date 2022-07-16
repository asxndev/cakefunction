<?php

namespace App\Model\Table;

use Cake\ORM\Table;  

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
}