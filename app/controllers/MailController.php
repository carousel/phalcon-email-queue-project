<?php

class MailController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    }
    public function sendAction()
    {
        $to = $this->request->getPost('to');
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('message');
        echo 'Sending message to: ' . $to . ' with subject: '. $subject . ' and body: ' . $message;  
    }

}

