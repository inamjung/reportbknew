<?php

namespace common\models;
 
use dektrium\user\models\User as BaseUser;
 
class User extends BaseUser
{
    public function register()
    {
        if ($this->validate()) {
            $user = $this->module->manager->createUser([
                'scenario' => 'register',
                'email'    => $this->email,
                'username' => $this->username,
                'password' => $this->password,
                'role'=> self::ROLE_USER              
            ]);
 
            return $user->register();
        }
 
        return false;
    }
}
?>

