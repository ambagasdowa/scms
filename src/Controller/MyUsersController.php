<?php
namespace App\Controller;

use App\Controller\AppController;
use CakeDC\Users\Controller\Traits\LinkSocialTrait;
use CakeDC\Users\Controller\Traits\LoginTrait;
use CakeDC\Users\Controller\Traits\ProfileTrait;
use CakeDC\Users\Controller\Traits\ReCaptchaTrait;
use CakeDC\Users\Controller\Traits\RegisterTrait;
use CakeDC\Users\Controller\Traits\SimpleCrudTrait;
use CakeDC\Users\Controller\Traits\SocialTrait;

class MyUsersController extends AppController
{
    use LinkSocialTrait;
    use LoginTrait;
    use ProfileTrait;
    use ReCaptchaTrait;
    use RegisterTrait;
    use SimpleCrudTrait;
    use SocialTrait;

    /**
    *    set a custom theme
    *    @param paper fix
    */
    // 
    // public function beforeRender (\Cake\Event\Event $event) {
    //   // NOTE choose a theme
    //   // $this->viewBuilder()->theme('Paper');
    //   // OR
    //   // $this->viewBuilder()->theme('AdminLTE');
    //   // NOTE choose a theme
    // }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Roles']
        ];
        $myUsers = $this->paginate($this->MyUsers);

        $this->set(compact('myUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id My User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $myUser = $this->MyUsers->get($id, [
            'contain' => ['Roles', 'SocialAccounts', 'Aros', 'Articles']
            // 'contain' => ['Roles', 'SocialAccounts', 'Aros']
        ]);

        $this->set('myUser', $myUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $myUser = $this->MyUsers->newEntity();
        if ($this->request->is('post')) {
            $myUser = $this->MyUsers->patchEntity($myUser, $this->request->getData());
            if ($this->MyUsers->save($myUser)) {
                $this->Flash->success(__('The my user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The my user could not be saved. Please, try again.'));
        }
        $roles = $this->MyUsers->Roles->find('list', ['limit' => 200]);
        $this->set(compact('myUser', 'roles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id My User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $myUser = $this->MyUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $myUser = $this->MyUsers->patchEntity($myUser, $this->request->getData());
            if ($this->MyUsers->save($myUser)) {
                $this->Flash->success(__('The my user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The my user could not be saved. Please, try again.'));
        }
        $roles = $this->MyUsers->Roles->find('list', ['limit' => 200]);
        $this->set(compact('myUser', 'roles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id My User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $myUser = $this->MyUsers->get($id);
        if ($this->MyUsers->delete($myUser)) {
            $this->Flash->success(__('The my user has been deleted.'));
        } else {
            $this->Flash->error(__('The my user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
