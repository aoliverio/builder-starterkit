<?php

namespace Rbac\Controller;

use Rbac\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * RbacRole Controller
 *
 * @property \Rbac\Model\Table\RbacRoleTable $RbacRole
 */
class RbacRoleController extends AppController {

    /**
     * Index method
     *
     * @return void
     */
    public function index() {
        $this->RbacRole = TableRegistry::get('Rbac.RbacRole');
        $query = $this->RbacRole->find('all');
        $query->where($this->filteredWhereConditions());        
        $query->limit(1000);
        $this->set('data', $query->toArray());
        $this->set('_serialize', ['data']);
    }
    
    /**
     * View method
     *
     * @param string|null $id Rbac Role id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {
        $rbacRole = $this->RbacRole->get($id, [
            'contain' => ['RbacRolePermission', 'RbacSessionRole', 'RbacUserRole']
        ]);
        $this->set('rbacRole', $rbacRole);
        $this->set('_serialize', ['rbacRole']);
    }
    
    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $rbacRole = $this->RbacRole->newEntity();
        if ($this->request->is('post')) {
            $rbacRole = $this->RbacRole->patchEntity($rbacRole, $this->request->data);
            if ($this->RbacRole->save($rbacRole)) {
                $this->Flash->success('The rbac role has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The rbac role could not be saved. Please, try again.');
            }
        }
        $this->set(compact('rbacRole'));
        $this->set('_serialize', ['rbacRole']);
        $this->filteredSelectOptions();
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Rbac Role id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $rbacRole = $this->RbacRole->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rbacRole = $this->RbacRole->patchEntity($rbacRole, $this->request->data);
            if ($this->RbacRole->save($rbacRole)) {
                $this->Flash->success('The rbac role has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The rbac role could not be saved. Please, try again.');
            }
        }
        $this->set(compact('rbacRole'));
        $this->set('_serialize', ['rbacRole']);
        $this->filteredSelectOptions();
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Rbac Role id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null) {
        $rbacRole = $this->RbacRole->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($this->RbacRole->delete($rbacRole)) {
                $this->Flash->success('The rbac role has been deleted.');
            } else {
                $this->Flash->error('The rbac role could not be deleted. Please, try again.');
            }
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('rbacRole'));
    }
    
    /**
     * Filter method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function filter($action = 'set') {
        $rbacRole = $this->RbacRole->newEntity();
        if ($this->request->session()->check('RbacRole')) {
            $session = $this->request->session()->read('RbacRole');
            $rbacRole = $this->RbacRole->patchEntity($rbacRole,  $session);
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($action == 'unset') {
                $this->request->session()->delete('RbacRole');
            } else {
                $this->request->session()->write('RbacRole', $this->request->data);
            }
            $this->Flash->success('The rbac role has been saved.');
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('rbacRole'));
        $this->set('_serialize', ['rbacRole']);
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