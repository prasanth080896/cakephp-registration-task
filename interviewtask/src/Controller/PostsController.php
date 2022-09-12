<?php

namespace App\Controller;

class PostsController extends AppController
{
    public function index()
    {
        $this->set('posts',$this->Posts->find('all',['order'=>'id DESC']));
    }

    public function add(){
        $postt = $this->Posts->newEntity([],[]);
        if($this->request->is('post')){
            $postt = $this->Posts->patchEntity($postt, $this->request->getData());
            $filename = $this->request->getData('image'); 
            $name = $filename->getClientFilename();
            $path = WWW_ROOT.'img/documents'.DS.$name;
            $filename->moveTo($path);            
            $postt->image = $name;
            $postt->create_date = date('Y-m-d H:i:s');
            $postt->update_date = date('Y-m-d H:i:s');
            if($this->Posts->save($postt)){
                return $this->redirect(['action'=>'index']);
            }
        }
        $this->set('posts',$postt);
    }

    public function edit($id){
        $postd = $this->Posts->get($id);
        if($this->request->is(['post','put'])){
            $postd = $this->Posts->patchEntity($postd, $this->request->getData());
            $postd->update_date = date('Y-m-d H:i:s');
            $this->Posts->save($postd);
            return $this->redirect(['action'=>'index']);
        }
        $this->set('fname',$postd->fname);
        $this->set('lname',$postd->lname);
        $this->set('email',$postd->email);
        $this->set('pass',$postd->pass);
        $this->set('dob',$postd->dob);
        $this->set('phone',$postd->phone);
        $this->set('height',$postd->height);
        $this->set('weight',$postd->weight);
        $this->set('gender',$postd->gender);
        $this->set('posts',$postd);
    }

    public function delete($id){
        $this->request->allowMethod(['post','delete']);
        $postdd = $this->Posts->get($id);
        $this->Posts->delete($postdd);
        return $this->redirect(['action'=>'index']);
    }

  
}

?>