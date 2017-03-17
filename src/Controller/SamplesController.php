<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

use Cake\ORM\TableRegistry;

use Cake\Routing\Router;




class SamplesController extends AppController
{
    
    public function street(){
        
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
    
    public function masonry(){
        
    }
   
}