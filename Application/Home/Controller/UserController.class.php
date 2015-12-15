<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/8
 * Time: 15:10
 */

namespace Home\Controller;


class UserController extends CController
{

    public function loginAdmin()
    {
        if(IS_POST){
            $this->redirect('Admin/index');
        }
        $this->display();
    }

}