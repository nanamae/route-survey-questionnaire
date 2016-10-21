<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Researches Controller
 *
 * @property \App\Model\Table\ResearchesTable $Researches
 */
class ResearchesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $researches = $this->paginate($this->Researches);

        $this->set(compact('researches'));
        $this->set('_serialize', ['researches']);
    }

    /**
     * View method
     *
     * @param string|null $id Research id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $research = $this->Researches->get($id, [
            'contain' => []
        ]);

        $this->set('research', $research);
        $this->set('_serialize', ['research']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $research = $this->Researches->newEntity();
        if ($this->request->is('post')) {
            $research = $this->Researches->patchEntity($research, $this->request->data);
            if ($this->Researches->save($research)) {
                $this->Flash->success(__('The research has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The research could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('research'));
        $this->set('_serialize', ['research']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Research id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $research = $this->Researches->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $research = $this->Researches->patchEntity($research, $this->request->data);
            if ($this->Researches->save($research)) {
                $this->Flash->success(__('The research has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The research could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('research'));
        $this->set('_serialize', ['research']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Research id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $research = $this->Researches->get($id);
        if ($this->Researches->delete($research)) {
            $this->Flash->success(__('The research has been deleted.'));
        } else {
            $this->Flash->error(__('The research could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
