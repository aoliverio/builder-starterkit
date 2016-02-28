<?php

namespace Rbac\Controller;

use Rbac\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * RbacPermission Controller
 *
 * @property \Rbac\Model\Table\RbacPermissionTable $RbacPermission
 */
class RbacPermissionController extends AppController {

    /**
     * Index method
     *
     * @return void
     */
    public function index() {
        $this->RbacPermission = TableRegistry::get('Rbac.RbacPermission');
        $query = $this->RbacPermission->find('all');
        $query->contain(['RbacObject', 'RbacOperation']);
        $query->where($this->filteredWhereConditions());        
        $query->limit(1000);
        $this->set('data', $query->toArray());
        $this->set('_serialize', ['data']);
    }
    
    /**
     * View method
     *
     * @param string|null $id Rbac Permission id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {
        $rbacPermission = $this->RbacPermission->get($id, [
            'contain' => ['RbacObject', 'RbacOperation', 'RbacRolePermission']
        ]);
        $this->set('rbacPermission', $rbacPermission);
        $this->set('_serialize', ['rbacPermission']);
    }
    
    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $rbacPermission = $this->RbacPermission->newEntity();
        if ($this->request->is('post')) {
            $rbacPermission = $this->RbacPermission->patchEntity($rbacPermission, $this->request->data);
            if ($this->RbacPermission->save($rbacPermission)) {
                $this->Flash->success('The rbac permission has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The rbac permission could not be saved. Please, try again.');
            }
        }
        $this->set(compact('rbacPermission'));
        $this->set('_serialize', ['rbacPermission']);
        $this->filteredSelectOptions();
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Rbac Permission id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $rbacPermission = $this->RbacPermission->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rbacPermission = $this->RbacPermission->patchEntity($rbacPermission, $this->request->data);
            if ($this->RbacPermission->save($rbacPermission)) {
                $this->Flash->success('The rbac permission has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The rbac permission could not be saved. Please, try again.');
            }
        }
        $this->set(compact('rbacPermission'));
        $this->set('_serialize', ['rbacPermission']);
        $this->filteredSelectOptions();
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Rbac Permission id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null) {
        $rbacPermission = $this->RbacPermission->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($this->RbacPermission->delete($rbacPermission)) {
                $this->Flash->success('The rbac permission has been deleted.');
            } else {
                $this->Flash->error('The rbac permission could not be deleted. Please, try again.');
            }
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('rbacPermission'));
    }
    
    /**
     * Filter method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function filter($action = 'set') {
        $rbacPermission = $this->RbacPermission->newEntity();
        if ($this->request->session()->check('RbacPermission')) {
            $session = $this->request->session()->read('RbacPermission');
            $rbacPermission = $this->RbacPermission->patchEntity($rbacPermission,  $session);
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($action == 'unset') {
                $this->request->session()->delete('RbacPermission');
            } else {
                $this->request->session()->write('RbacPermission', $this->request->data);
            }
            $this->Flash->success('The rbac permission has been saved.');
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('rbacPermission'));
        $this->set('_serialize', ['rbacPermission']);
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
        $rbacObject = $this->RbacPermission->RbacObject->find('list', ['limit' => 200]);
        $rbacOperation = $this->RbacPermission->RbacOperation->find('list', ['limit' => 200]);
        $this->set(compact('rbacObject', 'rbacOperation'));
    }
    
}