<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize() {
        parent::initialize();

        /**
         * Define APP variables used in default layout
         */
        define('APP_NAME', 'BUILDER StarterKit');
        define('APP_COPYRIGHT', '&copy; ' . date('Y') . ' Your information about copyright');
        define('APP_DEFAULT_HOME', '/');

        /**
         * 
         */
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /**
         * Use Auth component for User Authentication
         */
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'userModel' => 'Rbac.RbacUser',
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'System',
                'action' => 'login'
            ]
        ]);

        // Allow the display action so our pages controller
        // continues to work.
        $this->Auth->allow(['display']);
    }

    /**
     * Implements RBAC system 
     * 
     * @param type $user
     * @return boolean
     */
    public function isAuthorized($user) {
        $action = $this->request->params['action'];
        return true;
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event) {
        if (!array_key_exists('_serialize', $this->viewVars) &&
                in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

}
