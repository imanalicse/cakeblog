<?php

namespace ContactManager\Controller;

use App\Controller\AppController as BaseController;
use Cake\Event\Event;

class AppController extends BaseController
{
    public function beforeFilter(Event $event)
    {
        $this->viewBuilder()->setLayout('admin');
    }
}
