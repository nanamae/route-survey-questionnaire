<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Paths Controller
 *
 * @property \App\Model\Table\PathsTable $Paths
 */
class PathsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $paths = $this->paginate($this->Paths);

        $this->set(compact('paths'));
        $this->set('_serialize', ['paths']);
    }

    /**
     * View method
     *
     * @param string|null $id Path id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $path = $this->Paths->get($id, [
            'contain' => []
        ]);

        $this->set('path', $path);
        $this->set('_serialize', ['path']);
        
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $path = $this->Paths->newEntity();

        if ($this->request->is('post')) {
            
            $path = $this->Paths->patchEntity($path, $this->request->data);
            
            if ($this->Paths->save($path)) {
                $this->Flash->success(__('The path has been saved.'));
                
                $image = $this->Images->newEntity();
                $image->data = file_get_contents($this->request->data['image']['tmp_name']);
                $image->paths_id = $path->id;
                
                if ($this->Paths->Images->save($image)) {
                    $this->Flash->success(__('The image has been saved.'));
                    return $this->redirect(['action' => 'index']);
                } else {
                     $this->Flash->error(__('The image could not be saved. Please, try again.'));
                }

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The path could not be saved. Please, try again.'));
            }
            
            
           
        }
        $this->set(compact('path'));
        $this->set('_serialize', ['path']);
    
    }

    /**
     * Edit method
     *
     * @param string|null $id Path id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $path = $this->Paths->get($id, [
            'contain' => ['Images']
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            
            if ($this->Paths->save($path)) {
                $this->Flash->success(__('The path has been saved.'));
                    
                    
               $images = $this->request->data['image'];
                // debug( $this->request->data);
                // debug($images);
                // exit;
            
                foreach($images as $idx=>$image){
                    
                    if($this->request->data['image'][$idx]['tmp_name']){
                        $image = $this->Paths->Images->newEntity();
                        $image->data = file_get_contents($this->request->data['image'][$idx]['tmp_name']);
                        $image->paths_id = $path->id;
                        
                        if ($this->Paths->Images->save($image)) {
                            $this->Flash->success(__('The image has been saved.'));
                        } else {
                            $this->Flash->error(__('The image could not be saved. Please, try again.'));
                        }
                    }
                }
                
                $this->Paths = TableRegistry::get('Paths');
                $path = $this->Paths->get($id,['contain' => ['Images']]); //idを指定して経路取得
                $this->set('path',$path);
                
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The path could not be saved. Please, try again.'));
            }
        }
       
        $this->set(compact('path'));
        $this->set('_serialize', ['path']);
        
        
    }

    /**
     * Delete method
     *
     * @param string|null $id Path id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $path = $this->Paths->get($id);
        if ($this->Paths->delete($path)) {
            $this->Flash->success(__('The path has been deleted.'));
        } else {
            $this->Flash->error(__('The path could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    
}
