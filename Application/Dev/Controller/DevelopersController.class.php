<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/12
 * Time: 9:41
 */

namespace Dev\Controller;


class DevelopersController extends CController
{

    protected function _list($model, $map, $sortBy = '', $asc = false)
    {

        #var_dump($map);exit;
        $join = 'LEFT JOIN users u ON A.user_id=u.id';
        //取得满足条件的记录数
        $count = $model->alias('A')->join($join)->where ( $map )->count ( 'A.id' );
        #echo $count;exit;
        if ($count > 0) {
            //创建分页对象
            if (! empty ( $_REQUEST ['numPerPage'] )) {
                $listRows = $_REQUEST ['numPerPage'];
            } else {
                $listRows = 10;
            }

            $p = new \Extcom\Lib\Page( $count, $listRows );
            $p->setConfig('prev','<span class="pageprev"></span>');
            $p->setConfig('next','<span class="pagenext"></span>');

//            $currentPage = $_REQUEST['pageNum'] ? $_REQUEST['pageNum'] : 1;
            $currentPage = $_REQUEST['p'] ? $_REQUEST['p'] : 1;
            $p->firstRow = ($currentPage-1)*$listRows;
            //分页查询数据
            $voList = $model
                ->alias('A')
                ->field(array('company_name','company_license','A.mobile','A.status','contact','A.created','username','A.user_id','A.id'))
                ->join($join)
                ->where($map)
                ->order('`status` asc')
                ->limit($p->firstRow . ',' . $p->listRows)
                ->select ( );
            #var_dump($voList);exit;
            //模板赋值显示
            $this->assign ( 'list', $voList );
            $this->assign('page',$p->show());
            return $voList;
        }
        return;
    }

    public function denyDev()
    {
        $post = array(
            'result'=>'deny',
            'type'=>'dev',
            'operator'=>$_REQUEST['user_id'],
            'related_id'=>$_REQUEST['id'],
            'message'=>$_REQUEST['message'],
        );
        $model = D('Approvals');
        #var_dump($model);exit;
        if (false === $model->create ($post)) {
            $this->error( $model->getError () );
        }
        if(false!==$model->add())
        {
            $this->opration();
        }else{
            $this->error('操作失败！');
        }
    }

    public function improve()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        // 上传文件
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功 获取上传文件信息
            $_POST['company_image'] = $info['company_image']['savepath'].$info['company_image']['savename'];
            $_POST['contact_image'] = $info['contact_image']['savepath'].$info['contact_image']['savename'];
            if(isset($info[1])){
                $_POST['contact_image'] = $info[1]['savename'];
            }
            $_POST['status'] = 4;
            $this->update();
        }
    }

    public function update()
    {
        $name = CONTROLLER_NAME;
        $model = D ( $name );
        if (false === $model->create ()) {
            $this->error( $model->getError () );
        }
        // 更新数据
        $list=$model->where(array('user_id'=>$_SESSION['user_id']))->save ();
        if (false !== $list) {
            //成功提示
            $this->redirect('Users/wait');
        } else {
            //错误提示
            $this->error('编辑失败!');
        }
    }

}