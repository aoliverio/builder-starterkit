<?php

namespace Rbac\Controller;

use Rbac\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * RbacUser Controller
 *
 * @property \Rbac\Model\Table\RbacUserTable $RbacUser
 */
class RbacUserController extends AppController {

    /**
     * Index method
     *
     * @return void
     */
    public function index() {
        $this->RbacUser = TableRegistry::get('Rbac.RbacUser');
        $query = $this->RbacUser->find('all');
        $query->where($this->filteredWhereConditions());        
        $query->limit(1000);
        $this->set('data', $query->toArray());
        $this->set('_serialize', ['data']);
    }
    
    /**
     * View method
     *
     * @param string|null $id Rbac User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {
        $rbacUser = $this->RbacUser->get($id, [
            'contain' => ['RbacAudit', 'RbacSession', 'RbacUserRole']
        ]);
        $this->set('rbacUser', $rbacUser);
        $this->set('_serialize', ['rbacUser']);
    }
    
    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $rbacUser = $this->RbacUser->newEntity();
        if ($this->request->is('post')) {
            $rbacUser = $this->RbacUser->patchEntity($rbacUser, $this->request->data);
            if ($this->RbacUser->save($rbacUser)) {
                $this->Flash->success('The rbac user has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The rbac user could not be saved. Please, try again.');
            }
        }
        $this->set(compact('rbacUser'));
        $this->set('_serialize', ['rbacUser']);
        $this->filteredSelectOptions();
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Rbac User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $rbacUser = $this->RbacUser->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rbacUser = $this->RbacUser->patchEntity($rbacUser, $this->request->data);
            if ($this->RbacUser->save($rbacUser)) {
                $this->Flash->success('The rbac user has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The rbac user could not be saved. Please, try again.');
            }
        }
        $this->set(compact('rbacUser'));
        $this->set('_serialize', ['rbacUser']);
        $this->filteredSelectOptions();
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Rbac User id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null) {
        $rbacUser = $this->RbacUser->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($this->RbacUser->delete($rbacUser)) {
                $this->Flash->success('The rbac user has been deleted.');
            } else {
                $this->Flash->error('The rbac user could not be deleted. Please, try again.');
            }
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('rbacUser'));
    }
    
    /**
     * Filter method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function filter($action = 'set') {
        $rbacUser = $this->RbacUser->newEntity();
        if ($this->request->session()->check('RbacUser')) {
            $session = $this->request->session()->read('RbacUser');
            $rbacUser = $this->RbacUser->patchEntity($rbacUser,  $session);
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($action == 'unset') {
                $this->request->session()->delete('RbacUser');
            } else {
                $this->request->session()->write('RbacUser', $this->request->data);
            }
            $this->Flash->success('The rbac user has been saved.');
            return $this->redirect(['action' => 'index']);
        }
        $this->set(compact('rbacUser'));
        $this->set('_serialize', ['rbacUser']);
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