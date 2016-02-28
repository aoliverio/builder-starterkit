<?php

namespace Rbac\Controller;

use Rbac\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * RbacOperation Controller
 *
 * @property \Rbac\Model\Table\RbacOperationTable $RbacOperation
 */
class RbacOperationController extends AppController {

    /**
     * Index method
     *
     * @return void
     */
    public function index() {
        $this->RbacOperation = TableRegistry::get('Rbac.RbacOperation');
        $query = $this->RbacOperation->find('all');
        $query->where($this->filteredWhereConditions());        
        $query->limit(1000);
        $this->set('data', $query->toArray());
        $this->set('_serialize', ['data']);
    }
    
    /**
     * View method
     *
     * @param string|null $id Rbac Operation id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {
        $rbacOperation = $this->RbacOperation->get($id, [
            'contain' => ['RbacPermission']
        ]);
        $this->set('rbacOperation', $rbacOperation);
        $this->set('_serialize', ['rbacOperation']);
    }
    
    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $rbacOperation = $this->RbacOperation->newEntity();
        if ($this->request->is('post')) {
            $rbacOperation = $this->RbacOperation->patchEntity($rbacOperation, $this->request->data);
            if ($this->RbacOperation->save($rbacOperation)) {
                $this->Flash->success('The rbac operation has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The rbac operation could not be saved. Please, try again.');
            }
        }
        $this->set(compact('rbacOperation'));
        $this->set('_serialize', ['rbacOperation']);
        $this->filteredSelectOptions();
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Rbac Operation id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $rbacOperation = $this->RbacOperation->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rbacOperation = $this->RbacOperation->patchEntity($rbacOperation, $this->request->data);
            if ($this->RbacOperation->save($rbacOperation)) {
                $this->Flash->success('The rbac operation has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The rbac operation could not be saved. Please, try again.');
            }
        }
        $this->set(compact('rbacOperation'));
        $this->set('_serialize', ['rbacOperation']);
        $this->filteredSelectOptions();
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Rbac Operation id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null) {
        $rbacOperation = $this->RbacOperation->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($this->RbacOperation->delete($rbacOperation)) {
                $this->Flash->success('The rbac operation has been deleted.');
            } else {
                $this->Flash->error('The rbac operation could not be deleted. Please, try again.');
            }
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('rbacOperation'));
    }
    
    /**
     * Filter method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function filter($action = 'set') {
        $rbacOperation = $this->RbacOperation->newEntity();
        if ($this->request->session()->check('RbacOperation')) {
            $session = $this->request->session()->read('RbacOperation');
            $rbacOperation = $this->RbacOperation->patchEntity($rbacOperation,  $session);
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($action == 'unset') {
                $this->request->session()->delete('RbacOperation');
            } else {
                $this->request->session()->write('RbacOperation', $this->request->data);
            }
            $this->Flash->success('The rbac operation has been saved.');
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('rbacOperation'));
        $this->set('_serialize', ['rbacOperation']);
    }

    /**
     * This function is used to filter where conditions
     * 
     * @return type
     */
    public function filteredWhereConditions() {
        $filter = [];
        return $filter;
    }

    /**
     * This function is used to filter select options
     */
    public function filteredSelectOptions() {
        return false;
    }
    
}