<?php

namespace Rbac\Controller;

use Rbac\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * RbacAuditLogonError Controller
 *
 * @property \Rbac\Model\Table\RbacAuditLogonErrorTable $RbacAuditLogonError
 */
class RbacAuditLogonErrorController extends AppController {

    /**
     * Index method
     *
     * @return void
     */
    public function index() {
        $this->RbacAuditLogonError = TableRegistry::get('Rbac.RbacAuditLogonError');
        $query = $this->RbacAuditLogonError->find('all');
        $query->where($this->filteredWhereConditions());        
        $query->limit(1000);
        $this->set('data', $query->toArray());
        $this->set('_serialize', ['data']);
    }
    
    /**
     * View method
     *
     * @param string|null $id Rbac Audit Logon Error id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {
        $rbacAuditLogonError = $this->RbacAuditLogonError->get($id, [
            'contain' => []
        ]);
        $this->set('rbacAuditLogonError', $rbacAuditLogonError);
        $this->set('_serialize', ['rbacAuditLogonError']);
    }
    
    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $rbacAuditLogonError = $this->RbacAuditLogonError->newEntity();
        if ($this->request->is('post')) {
            $rbacAuditLogonError = $this->RbacAuditLogonError->patchEntity($rbacAuditLogonError, $this->request->data);
            if ($this->RbacAuditLogonError->save($rbacAuditLogonError)) {
                $this->Flash->success('The rbac audit logon error has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The rbac audit logon error could not be saved. Please, try again.');
            }
        }
        $this->set(compact('rbacAuditLogonError'));
        $this->set('_serialize', ['rbacAuditLogonError']);
        $this->filteredSelectOptions();
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Rbac Audit Logon Error id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $rbacAuditLogonError = $this->RbacAuditLogonError->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rbacAuditLogonError = $this->RbacAuditLogonError->patchEntity($rbacAuditLogonError, $this->request->data);
            if ($this->RbacAuditLogonError->save($rbacAuditLogonError)) {
                $this->Flash->success('The rbac audit logon error has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The rbac audit logon error could not be saved. Please, try again.');
            }
        }
        $this->set(compact('rbacAuditLogonError'));
        $this->set('_serialize', ['rbacAuditLogonError']);
        $this->filteredSelectOptions();
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Rbac Audit Logon Error id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null) {
        $rbacAuditLogonError = $this->RbacAuditLogonError->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($this->RbacAuditLogonError->delete($rbacAuditLogonError)) {
                $this->Flash->success('The rbac audit logon error has been deleted.');
            } else {
                $this->Flash->error('The rbac audit logon error could not be deleted. Please, try again.');
            }
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('rbacAuditLogonError'));
    }
    
    /**
     * Filter method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function filter($action = 'set') {
        $rbacAuditLogonError = $this->RbacAuditLogonError->newEntity();
        if ($this->request->session()->check('RbacAuditLogonError')) {
            $session = $this->request->session()->read('RbacAuditLogonError');
            $rbacAuditLogonError = $this->RbacAuditLogonError->patchEntity($rbacAuditLogonError,  $session);
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($action == 'unset') {
                $this->request->session()->delete('RbacAuditLogonError');
            } else {
                $this->request->session()->write('RbacAuditLogonError', $this->request->data);
            }
            $this->Flash->success('The rbac audit logon error has been saved.');
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('rbacAuditLogonError'));
        $this->set('_serialize', ['rbacAuditLogonError']);
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