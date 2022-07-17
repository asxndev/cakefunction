<?php

namespace App\Controller;

class ArticlesController extends WebController {

    public function initialize():void

    {
        parent::initialize();
        // this means that call parent initialize function here and load all component into this controller 
        $this->loadComponent('Paginator');
        $this->loadComponent('Flash'); // this will work on request and same request will work into another request like delete or add;
    }

    public function index(){
        //$this->loadComponent('Paginator'); // this mean we have loaded a component which is paginator and it can paginate 
        /** one page  to another page in any folder of our application  */
        $articles = $this->Paginator->paginate($this->Articles->find());  // here Articles is table name
        /**   paginator is paginate and reach into the ArticleTable by using find() and will find articles 
         * then ArticleTable will auto link with Article Entity and return as per veiw direction into the $articles 
         * variable . 
         *here $this->Articles->find(); this mean is that 
         */
        //$articles=$this->Articles->find();
        $this->set(compact('articles'));

    }

    public function add(){
        $article = $this->Articles->newEmptyEntity();
        //print_r($articles);exit;
        if($this->request->is('post')){
            $article= $this->Articles->patchEntity($article,$this->request->getData());
            $article->user_id=1;
            if($this->Articles->save($article)){
                $this->Flash->success("your article has been saved");
                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error("unable to add your article");

        }
        $this->set('article',$article);
    }

    public function delete($slug){
        $this->request->allowMethod(['post','delete']);
        $article= $this->Articles->findBySlug($slug)->firstOrFail();
        if($this->Articles->delete($article)){
            $this->Flash->success("your article has been deleted successfully".$article->title);
            return $this->redirect(['action'=>'index']);
        }
        $this->Flash->error("unable to delete your article");
        return $this->redirect(['action'=>'index']);


    }

    public function view($slug = null)
    {
        $article=$this->Articles->findBySlug($slug)->firstOrFail(); //* here firstOrFail means is that execute whenever */
        
        $this->set(compact('article'));

    }


        public function edit($slug){
            $article = $this->Articles->findBySlug($slug)->firstOrFail();
            if($this->request->is(['post','put'])){
                $this->Articles->patchEntity($article,$this->request->getData());
                if($this->Articles->save($article)){
                    $this->Flash->success("your article updated successfully".$article->title);
                    return $this->redirect(['action'=>'index']);
                }
                $this->Flash->error("unable to update your article");
                return $this->redirect(['action'=>'index']);

            }
            $this->set('article',$article);
        }

    
}

?>