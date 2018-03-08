<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MyUser[]|\Cake\Collection\CollectionInterface $myUsers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New My User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Social Accounts'), ['controller' => 'SocialAccounts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Social Account'), ['controller' => 'SocialAccounts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aro'), ['controller' => 'Aros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aro'), ['controller' => 'Aros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="myUsers index large-9 medium-8 columns content">
    <h3><?= __('My Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('token') ?></th>
                <th scope="col"><?= $this->Paginator->sort('token_expires') ?></th>
                <th scope="col"><?= $this->Paginator->sort('api_token') ?></th>
                <th scope="col"><?= $this->Paginator->sort('activation_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('secret') ?></th>
                <th scope="col"><?= $this->Paginator->sort('secret_verified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tos_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_superuser') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($myUsers as $myUser): ?>
            <tr>
                <td><?= h($myUser->id) ?></td>
                <td><?= h($myUser->username) ?></td>
                <td><?= h($myUser->email) ?></td>
                <td><?= h($myUser->password) ?></td>
                <td><?= h($myUser->first_name) ?></td>
                <td><?= h($myUser->last_name) ?></td>
                <td><?= h($myUser->token) ?></td>
                <td><?= h($myUser->token_expires) ?></td>
                <td><?= h($myUser->api_token) ?></td>
                <td><?= h($myUser->activation_date) ?></td>
                <td><?= h($myUser->secret) ?></td>
                <td><?= h($myUser->secret_verified) ?></td>
                <td><?= h($myUser->tos_date) ?></td>
                <td><?= h($myUser->active) ?></td>
                <td><?= h($myUser->is_superuser) ?></td>
                <td><?= $myUser->has('role') ? $this->Html->link($myUser->role->name, ['controller' => 'Roles', 'action' => 'view', $myUser->role->id]) : '' ?></td>
                <td><?= h($myUser->created) ?></td>
                <td><?= h($myUser->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $myUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $myUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $myUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $myUser->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
