<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller{

    public function index()
    {
        $model = M('Users');
        var_dump((object)$model->where(['id'=>['lt',5]])->select());
        echo 'you are welcome!';
        #$this->redirect('User/loginAdmin');
    }

    public function run()
    {
        vendor('Hprose.HproseHttpClient');
        $client = new \HproseHttpClient('http://127.0.0.1:81/Home/Server');
//        $client = new \HproseHttpClient('http://127.0.0.1/lua/index');
//        var_dump($client);
        // 或者采用
//        $client = new \HproseHttpClient();
//        var_dump($client);
//        $client->useService('http://127.0.0.1/index.php/Home/Server');
//        $result = $client->test();
        var_dump($client->test());
    }
}