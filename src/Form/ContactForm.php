<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Mailer\Email;
use Cake\Validation\Validator;

class ContactForm extends Form
{

    protected function _buildSchema(Schema $schema)
    {
        return $schema->addField('name', 'string')
            ->addField('email', ['type' => 'string'])
            ->addField('content', ['type' => 'text']);
    }

    protected function _buildValidator(Validator $validator)
    {
        return $validator->add('name', 'length', [
            'rule' => ['minLength', 2],
            'message' => 'Un nom est requis'
        ])->add('content', 'length', [
            'rule' => ['minLength', 2],
            'message' => 'Deux caractères minimum'
        ])->add('email', 'format', [
            'rule' => 'email',
            'message' => 'Une adresse email valide est requise',
        ]);
    }

    protected function _execute(array $data)
    {

        $email = new Email('default');
        $email
            ->setEmailFormat('html')
            ->setTo('hcsd-consulting@gmail.com')
            ->setSubject(__('Nouveau message du site'));
        if ($email->send($data['name'] . ' ' . $data['email'] . ' ' . $data['phone'] . ' ' . $data['content'])) {
            return true;
        } else {
            return false;
        }
    }
}