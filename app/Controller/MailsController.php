<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 9/29/15
 * Time: 4:47 PM
 */
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class MailsController extends AppController{

    public $uses = array();

    public function send(){

        $this->layout = 'page';

        // TODO: validate email address

        if ($this->request->is('post')) {
            $name = $this->request->data['Mail']['name'];
            $email = $this->request->data['Mail']['email'];
            $msg = $this->request->data['Mail']['message'];

            $this->set(compact('name'));
            $this->set(compact('email'));
            $this->set(compact('msg'));

            // TODO: figure out how to implement custom.php
            $Email = new CakeEmail();
            $Email->from(array($email => $name));
            $Email->to('anna.wygant@gmail.com');
            $Email->subject('New Message from annawygant.com');
            if($Email->send($msg)){
                $this->set('status', 'success!');
            }
            else{
                $this->set('status', 'failure!');
            }
        }

        $this->Session->setFlash('Thanks! I\'ll get back to you shortly.', 'success_flash');
        $this->redirect($this->referer());
    }

}

?>