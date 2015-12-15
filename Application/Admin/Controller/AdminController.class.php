<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/8
 * Time: 15:37
 */

namespace Admin\Controller;


class AdminController extends CController
{

    public function index()
    {
        $this->display();
    }

    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        $this->redirect('Users/loginAdmin');
    }

}