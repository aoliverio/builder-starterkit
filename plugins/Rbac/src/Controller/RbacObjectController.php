<?php

namespace Rbac\Controller;

use Rbac\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * RbacObject Controller
 *
 * @property \Rbac\Model\Table\RbacObjectTable $RbacObject
 */
class RbacObjectController extends AppController {

    /**
     * Index method
     *
     * @return void
     */
    public function index() {
        $this->RbacObject = TableRegistry::get('Rbac.RbacObject');
        $query = $this->RbacObject->find('all');
        $query->where($this->filteredWhereConditions());        
        $query->limit(1000);
        $this->set('data', $query->toArray());
        $this->set('_serialize', ['data']);
    }
    
    /**
     * View method
     *
     * @param string|null $id Rbac Object id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {
        $rbacObject = $this->RbacObject->get($id, [
            'contain' => ['RbacPermission']
        ]);
        $this->set('rbacObject', $rbacObject);
        $this->set('_serialize', ['rbacObject']);
    }
    
    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $rbacObject = $this->RbacObject->newEntity();
        if ($this->request->is('post')) {
            $rbacObject = $this->RbacObject->patchEntity($rbacObject, $this->request->data);
            if ($this->RbacObject->save($rbacObject)) {
                $this->Flash->success('The rbac object has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The rbac object could not be saved. Please, try again.');
            }
        }
        $this->set(compact('rbacObject'));
        $this->set('_serialize', ['rbacObject']);
        $this->filteredSelectOptions();
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Rbac Object id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $rbacObject = $this->RbacObject->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rbacObject = $this->RbacObject->patchEntity($rbacObject, $this->request->data);
            if ($this->RbacObject->save($rbacObject)) {
                $this->Flash->success('The rbac object has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The rbac object could not be saved. Please, try again.');
            }
        }
        $this->set(compact('rbacObject'));
        $this->set('_serialize', ['rbacObject']);
        $this->filteredSelectOptions();
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Rbac Object id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null) {
        $rbacObject = $this->RbacObject->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($this->RbacObject->delete($rbacObject)) {
                $this->Flash->success('The rbac object has been deleted.');
            } else {
                $this->Flash->error('The rbac object could not be deleted. Please, try again.');
            }
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('rbacObject'));
    }
    
    /**
     * Filter method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function filter($action = 'set') {
        $rbacObject = $this->RbacObject->newEntity();
        if ($this->request->session()->check('RbacObject')) {
            $session = $this->request->session()->read('RbacObject');
            $rbacObject = $this->RbacObject->patchEntity($rbacObject,  $session);
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($action == 'unset') {
                $this->request->session()->delete('RbacObject');
            } else {
                $this->request->session()->write('RbacObject', $this->request->data);
            }
            $this->Flash->success('The rbac object has been saved.');
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('rbacObject'));
        $this->set('_serialize', ['rbacObject']);
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