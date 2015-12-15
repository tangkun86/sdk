<?php
namespace Admin\Controller;

class IndexController extends CController {

    public function index()
    {
        echo 'you are welcome!';
        #$this->redirect('User/loginAdmin');
    }
}