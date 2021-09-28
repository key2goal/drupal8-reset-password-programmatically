<?php

namespace Drupal\reset_password_by_code\Controller;
use Drupal\Core\Controller\ControllerBase;


class CodeResetPassword extends ControllerBase{
    public function content(){
        $id = 13;
        
        $user_object = \Drupal::entityManager()->getStorage('user');

        $user = $user_object->load($id);

        $user->setPassword('Ranjanreset24');

        $user->save();
        return array('#markup' => "password updated");
    }
}