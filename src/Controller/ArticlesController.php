<?php

namespace App\Controller;

class ArticlesController extends AppController {

    public function index(){
        $this->loadComponent('Paginator'); // this mean we have loaded a component which is paginator and it can paginate 
        /** one page  to another page in any folder of our application  */
        $articles = $this->Paginator->paginate($this->Articles->find());
        /**   paginator is paginate and reach into the ArticleTable by using find() and will find articles 
         * then ArticleTable will auto link with Article Entity and return as per veiw direction into the $articles 
         * variable . 
         *here $this->Articles->find(); this mean is that 
         */
        //$articles=$this->Articles->find();
        $this->set(compact('articles'));

        echo "from articles controller ";
    }
    public function view()
    {

    }
}

?>