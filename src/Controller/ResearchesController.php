<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

use Cake\ORM\TableRegistry;

use Cake\Routing\Router;


class ResearchesController extends AppController
{
    
    public function pathList(){
        
        $this->Paths = TableRegistry::get('Paths');
        $path = $this->Paths->newEntity();
        $this->set('paths', $this->Paths->find('all')); 
    }
    
    public function research($id = null){
        
        $this->Paths = TableRegistry::get('Paths');
        $path = $this->Paths->get($id,['contain' => ['Images']]); //idを指定して経路取得
        $this->set('path',$path);
        
        // $this->autoRender = false;
        // $this->response->type('image');
        // $this->response->body(stream_get_contents($path->thumbnail));
        // $this->set('image', stream_get_contents($path->image));
        
        $this->Researches = TableRegistry::get('Researches');
        $this->set('researches', $this->Researches->find('all'));
       
    }
  
    public function addAnswer(){
        
        $this->Researches = TableRegistry::get('Researches');
        $researches = $this->Researches->find('all');

        $userId = $this->Auth->user("id");
        
        // debug($userId);
        // exit;
        
        
        // print_r($_POST);
        // exit;
        $this->Answers = TableRegistry::get('Answers');
        foreach($researches as $research){
            $answer = $this->Answers->newEntity();
            
            $answer -> set([
               'researches_id' => $research->id,
               'paths_id' => $_POST['path_id'],
               'value' => $_POST[$research->id],
               'lat' => $_POST['lat'],
               'lng' => $_POST['lng'],
               'heading' => $_POST['heading'],
               'pitch' => $_POST['pitch'],
               'user_id' => $userId
            ]);
            
            $this->Answers->save($answer);
        }
        $this->CurrentResearches = TableRegistry::get('CurrentResearches');
        $current = $this->CurrentResearches->find('all')->where(['user_id'=>$userId])->first();
        $current->num = $current->num + 1;
        $this->CurrentResearches->save($current);
        
        $this->redirect(['controller'=>'researches','action'=>'start']);

    }
    
    
    public function top(){
         
        
    }
    
    public function start(){
        $uid = $this->Auth->user('id');
        $this->CurrentResearches = TableRegistry::get('CurrentResearches');
        $current = $this->CurrentResearches->find('all')->where(['user_id'=>$uid])->first();
        if($current == null){
            $current = $this->CurrentResearches->newEntity();
            $current->num = 0;
            $current->user_id = $uid;
            $numbers = range(1,93);
            shuffle($numbers);
            
            $current->sequence = implode(',',$numbers);
            $this->CurrentResearches->save($current);
        }
        $seq_split = explode(",", $current->sequence);
        
        //条件判定
        return $this->redirect(Router::url(['controller' => 'researches', 'action' => 'research', $seq_split[$current->num] ]));
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['top']);
    }
    
}