<?php

namespace Rbac\Controller;

use Rbac\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * RbacAudit Controller
 *
 * @property \Rbac\Model\Table\RbacAuditTable $RbacAudit
 */
class RbacAuditController extends AppController {

    /**
     * Index method
     *
     * @return void
     */
    public function index() {
        $this->RbacAudit = TableRegistry::get('Rbac.RbacAudit');
        $query = $this->RbacAudit->find('all');
        $query->contain(['RbacUser']);
        $query->where($this->filteredWhereConditions());        
        $query->limit(1000);
        $this->set('data', $query->toArray());
        $this->set('_serialize', ['data']);
    }
    
    /**
     * View method
     *
     * @param string|null $id Rbac Audit id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {
        $rbacAudit = $this->RbacAudit->get($id, [
            'contain' => ['RbacUser']
        ]);
        $this->set('rbacAudit', $rbacAudit);
        $this->set('_serialize', ['rbacAudit']);
    }
    
    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $rbacAudit = $this->RbacAudit->newEntity();
        if ($this->request->is('post')) {
            $rbacAudit = $this->RbacAudit->patchEntity($rbacAudit, $this->request->data);
            if ($this->RbacAudit->save($rbacAudit)) {
                $this->Flash->success('The rbac audit has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The rbac audit could not be saved. Please, try again.');
            }
        }
        $this->set(compact('rbacAudit'));
        $this->set('_serialize', ['rbacAudit']);
        $this->filteredSelectOptions();
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Rbac Audit id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $rbacAudit = $this->RbacAudit->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rbacAudit = $this->RbacAudit->patchEntity($rbacAudit, $this->request->data);
            if ($this->RbacAudit->save($rbacAudit)) {
                $this->Flash->success('The rbac audit has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The rbac audit could not be saved. Please, try again.');
            }
        }
        $this->set(compact('rbacAudit'));
        $this->set('_serialize', ['rbacAudit']);
        $this->filteredSelectOptions();
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Rbac Audit id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null) {
        $rbacAudit = $this->RbacAudit->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($this->RbacAudit->delete($rbacAudit)) {
                $this->Flash->success('The rbac audit has been deleted.');
            } else {
                $this->Flash->error('The rbac audit could not be deleted. Please, try again.');
            }
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('rbacAudit'));
    }
    
    /**
     * Filter method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function filter($action = 'set') {
        $rbacAudit = $this->RbacAudit->newEntity();
        if ($this->request->session()->check('RbacAudit')) {
            $session = $this->request->session()->read('RbacAudit');
            $rbacAudit = $this->RbacAudit->patchEntity($rbacAudit,  $session);
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($action == 'unset') {
                $this->request->session()->delete('RbacAudit');
            } else {
                $this->request->session()->write('RbacAudit', $this->request->data);
            }
            $this->Flash->success('The rbac audit has been saved.');
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('rbacAudit'));
        $this->set('_serialize', ['rbacAudit']);
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
        $rbacUser = $this->RbacAudit->RbacUser->find('list', ['limit' => 200]);
        $this->set(compact('rbacUser'));
    }
    
}