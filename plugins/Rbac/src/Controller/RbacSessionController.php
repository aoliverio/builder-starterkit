<?php

namespace Rbac\Controller;

use Rbac\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * RbacSession Controller
 *
 * @property \Rbac\Model\Table\RbacSessionTable $RbacSession
 */
class RbacSessionController extends AppController {

    /**
     * Index method
     *
     * @return void
     */
    public function index() {
        $this->RbacSession = TableRegistry::get('Rbac.RbacSession');
        $query = $this->RbacSession->find('all');
        $query->contain(['RbacUser']);
        $query->where($this->filteredWhereConditions());        
        $query->limit(1000);
        $this->set('data', $query->toArray());
        $this->set('_serialize', ['data']);
    }
    
    /**
     * View method
     *
     * @param string|null $id Rbac Session id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {
        $rbacSession = $this->RbacSession->get($id, [
            'contain' => ['RbacUser', 'RbacSessionRole']
        ]);
        $this->set('rbacSession', $rbacSession);
        $this->set('_serialize', ['rbacSession']);
    }
    
    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $rbacSession = $this->RbacSession->newEntity();
        if ($this->request->is('post')) {
            $rbacSession = $this->RbacSession->patchEntity($rbacSession, $this->request->data);
            if ($this->RbacSession->save($rbacSession)) {
                $this->Flash->success('The rbac session has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The rbac session could not be saved. Please, try again.');
            }
        }
        $this->set(compact('rbacSession'));
        $this->set('_serialize', ['rbacSession']);
        $this->filteredSelectOptions();
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Rbac Session id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $rbacSession = $this->RbacSession->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rbacSession = $this->RbacSession->patchEntity($rbacSession, $this->request->data);
            if ($this->RbacSession->save($rbacSession)) {
                $this->Flash->success('The rbac session has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The rbac session could not be saved. Please, try again.');
            }
        }
        $this->set(compact('rbacSession'));
        $this->set('_serialize', ['rbacSession']);
        $this->filteredSelectOptions();
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Rbac Session id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null) {
        $rbacSession = $this->RbacSession->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($this->RbacSession->delete($rbacSession)) {
                $this->Flash->success('The rbac session has been deleted.');
            } else {
                $this->Flash->error('The rbac session could not be deleted. Please, try again.');
            }
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('rbacSession'));
    }
    
    /**
     * Filter method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function filter($action = 'set') {
        $rbacSession = $this->RbacSession->newEntity();
        if ($this->request->session()->check('RbacSession')) {
            $session = $this->request->session()->read('RbacSession');
            $rbacSession = $this->RbacSession->patchEntity($rbacSession,  $session);
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($action == 'unset') {
                $this->request->session()->delete('RbacSession');
            } else {
                $this->request->session()->write('RbacSession', $this->request->data);
            }
            $this->Flash->success('The rbac session has been saved.');
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('rbacSession'));
        $this->set('_serialize', ['rbacSession']);
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
        $rbacUser = $this->RbacSession->RbacUser->find('list', ['limit' => 200]);
        $this->set(compact('rbacUser'));
    }
    
}