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
            'host'	 	 => 'Host URL',
            'port'	 	 => 587,
            'encryption' => 'tls',
            'username'   => 'no-replay@gmail.com',
            'password'	 => 'API secret key',

            'from'		 => [
                    'email' => 'no-replay@gmail.com',
                    'name'	=> 'Customer Support'
                ]
        ];
        $mailer = new \Phalcon\Ext\Mailer\Manager($config);
        $queue = new Phalcon\Queue\Beanstalk(
            array(
                'host' => '127.0.0.1',
                'port' => '11300'
            )
        );
        $queue->put(
            array(
                'sendEmail' => rand()
            )
        );


while (($job = $queue->peekReady()) !== false) {

    $to = $this->request->getPost('to');
    $subject = $this->request->getPost('subject');
    $content = $this->request->getPost('content');
    $message = $mailer->createMessage()
        ->to($to)
        ->subject($subject)
        ->content($content);
    $message->send();


    $job->delete();
}

        return $this->flash->success("Email has been put to the queue!");
        }

}

