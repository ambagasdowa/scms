<?php
namespace App\Model\Table;

use CakeDC\Users\Model\Table\UsersTable;

class MyUsersTable extends UsersTable {
    public function initialize(array $config) {
        parent::initialize($config);
        $this->addBehavior('Acl.Acl', ['requester']);
        $this->belongsTo('Roles');
        $this->hasMany('Articles');
    }
}
