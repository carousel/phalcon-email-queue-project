<?php

require __DIR__ . '../../../vendor/autoload.php';

class MailController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    }
    public function sendAction()
    {
        $config = [
            'driver' 	 => 'smtp',
            'host'	 	 => 'smtp.mandrillapp.com',
            'port'	 	 => 587,
            'encryption' => '',
            'username'   => 'miroslav.trninic@gmail.com',
            'password'	 => 'AzM6aILHpPW4MFw6ZY0buA',

            'from'		 => [
                    'email' => 'miroslav.trninic@gmail.com',
                    'name'	=> 'Miroslav Trninic'
                ]
        ];
        $mailer = new \Phalcon\Ext\Mailer\Manager($config);
        $message = $mailer->createMessage()
            ->to('miroslav.trninic@gmail.com', 'Hello World')
            ->subject('Hello world!')
            ->content('Hello world!');
        $message->send();
        }

}

