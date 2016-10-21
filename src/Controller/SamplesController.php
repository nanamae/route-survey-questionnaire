<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

use Cake\ORM\TableRegistry;




class SamplesController extends AppController
{
    
    public function street(){
        
    }
    
    public function index(){
        
        
        $this->Paths = TableRegistry::get('Paths');
        $path = $this->Paths->newEntity();
        $this->set('paths', $this->Paths->find('all')); 
    }
    
    public function research($id = null){
        $this->viewBuilder()->layout('BootstrapUI.default');
        
        
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
  
    
    public function lesson1Result(){
        
        $this->Researches = TableRegistry::get('Researches');
        $researches = $this->Researches->find('all');
        
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
               'pitch' => $_POST['pitch']
            ]);
            
            $this->Answers->save($answer);
        }
        
        $this->redirect(['controller'=>'samples','action'=>'index']);

    }
    
    public function lesson1List()
    {
         $this->Question = TableRegistry::get('Questions');
         $lesson1 = $this->Question->newEntity();
         $this->set('lesson1', $this->Question->find('all')); 
    }

    public function lesson1View($id = null)
     {
         $this->Question = TableRegistry::get('Questions');
         $lesson1 = $this->Question->newEntity();
         $this->set('lesson1', $this->Question->find('all')); 
         $lesson1 = $this->Question->get($id);
         $this->set(compact('lesson1'));
     }
     
    
    
    public function bootstrap(){
        
        $this->viewBuilder()->layout('BootstrapUI.default');
        
        $this->viewBuilder()->helpers(['BootstrapUI.Html', 'BootstrapUI.Form', 'BootstrapUI.Flash', 'BootstrapUI.Paginator']);
    
    }
    


    
    // public function question(){
        
    // }
    
    // public function example(){
        
    //     if($this->request->is('post')){
    //         // print_r($_POST['q1']);
    //         // exit;
            
    //         //DBに保存
            
    //         //TableRegistryからQuestionsエンティティのヘルパーをもってくる
    //         $this->Question = TableRegistry::get('Questions');
            
    //         //新しいエンティティの作成
    //         $question = $this->Question->newEntity();
    //         $question.content = $_POST['content'];
            
    //         //データをセット
    //         $question -> set([
    //             'result' => $_POST['q1'],
    //             'content' => $_POST['content']
    //         ]);
                
    //         //データベースに書き込み
    //         $this->Question->save($question);
            
    //         // print_r($question);
    //         // exit;
            
    //         //Templateにおくるデータを設定
    //         $this->set('question', $question);
    //     }
        
    // }
    
    
}