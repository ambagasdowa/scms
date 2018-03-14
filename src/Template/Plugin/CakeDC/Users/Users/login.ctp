<?php
/**
 * Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

use Cake\Core\Configure;

?>
<div class="row ">
<div class="col-sm-3 col-md-3 col-lg-3 text-center"></div>
<div class="col-sm-6 col-md-6 col-lg-6 text-center">
        <div class="users form">
            <?= $this->Flash->render('auth') ?>
            <?= $this->Form->create() ?>

        <div class="card card-user">

            <div class="content">
                <legend><?= __d('CakeDC/Users', 'INCIO SESIÓN - PROCESO ELECTORAL LOCAL') ?></legend>
                <img class="img-responsive" src="<?php echo $this->request->webroot?>Paper/img/partidos/frentexqroo.jpg">
                <hr/>
                <?= $this->Form->control('username', ['label' => FALSE, 'required' => true,'placeholder'=>'USUARIO']) ?>
                <?= $this->Form->control('password', ['label' => FALSE, 'required' => true,'placeholder'=>'CLAVE']) ?>
                <?php
                if (Configure::read('Users.reCaptcha.login')) {
                    echo $this->User->addReCaptcha();
                }
                if (Configure::read('Users.RememberMe.active')) {
                    echo $this->Form->control(Configure::read('Users.Key.Data.rememberMe'), [
                        'type' => 'checkbox',
                        'label' => __d('CakeDC/Users', 'Recordarme'),
                        'checked' => Configure::read('Users.RememberMe.checked')
                    ]);
                }
                ?>
                <?php
                $registrationActive = Configure::read('Users.Registration.active');
                if ($registrationActive) {
                   echo $this->Html->link(__d('CakeDC/Users', 'Registrarse'), ['action' => 'register']);
                }
                if (Configure::read('Users.Email.required')) {
                    if ($registrationActive) {
                        echo ' | ';
                    }
                   echo $this->Html->link(__d('CakeDC/Users', 'Resetear Clave'), ['action' => 'requestResetPassword']);
                }
                ?>
            <hr/><br/>
            <?= implode(' ', $this->User->socialLoginList()); ?>
            <?= $this->Form->button(__d('CakeDC/Users', 'INGRESAR')); ?>
            <?= $this->Form->end() ?>
            </div>
        </div>

        </div>
    </div>
</div>
