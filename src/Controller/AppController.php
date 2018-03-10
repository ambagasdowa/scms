<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
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
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        $this->loadComponent('Acl', [
            'className' => 'Acl.Acl'
        ]);
        $this->loadComponent('CakeDC/Users.UsersAuth');

        // if ($this->Auth->user('role_id') == 'e687cb91-4cdf-4ab2-992f-e76584199c2e') {
        //   var_dump('Redirect');
        //   $this->Auth->config('loginRedirect',['controller'=>'articles','action'=>'index']);
        // }

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Http\Response|null|void
     */

     public function beforeFilter (Event $event) {

       // debug($this->Auth->user('role_id'));
       // debug($_SESSION);
       // if (!$this->Auth->user()) {
       $this->Auth->config('authError', "Necesita Autorizacion!!!");

       if ($this->Auth->user('role_id') == 'e687cb91-4cdf-4ab2-992f-e76584199c2e') {

         // $ruta = $_SERVER['HTTP_HOST'].'/pages/reports/monitor';
         // $ruta = '/pages/reports/monitor';
         // var_dump($this->Url->build('/pages/reports/monitor'));

        // return $this->redirect($this->Url->build('/pages/reports/monitor'));
         // $this->Auth->config('loginRedirect',$this->Url->build('/pages/reports/monitor'));
       // return $this->redirect('/Articles');
       // return $this->redirect($ruta);

       }


     } // End beforeFilter


     public function afterFilter (Event $event) {
     //
     //   // debug($this->Auth->user('role_id'));
     //   // debug($_SESSION);
     //   // if (!$this->Auth->user()) {
     //   // $this->Auth->config('authError', "Necesita Autorizacion!!!");
     //
     //   // if ($this->Auth->user('role_id') == 'e687cb91-4cdf-4ab2-992f-e76584199c2e') {
     //     // var_dump('Redirect');
         // return $this->redirect('/Articles/index');
         // $this->Auth->config('loginRedirect',['controller'=>'Articles','action'=>'index']);
     //   // }
      // return $this->redirect(['controller'=>'Articles','action' => 'index']);
     } // End afterFilter

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Http\Response|null|void
     */
    public function beforeRender(Event $event) {
        // NOTE Set theme as General uncomment
        // $this->viewBuilder()->setTheme('AdminLTE');

        $this->viewBuilder()->setTheme('Paper');
        // Set theme as General uncomment

        // NOTE: These defaults are just to get started quickly with development
        // and should not be used in production. You should instead set "_serialize"
        // in each action as required.
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

}
