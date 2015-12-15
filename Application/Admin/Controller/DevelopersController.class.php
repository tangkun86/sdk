<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/12
 * Time: 9:41
 */

namespace Admin\Controller;


class DevelopersController extends CController
{

    protected function _list($model, $map, $sortBy = '', $asc = false)
    {

        #var_dump($map);exit;
        $join = 'LEFT JOIN users u ON D.user_id=u.id';
        //取得满足条件的记录数
        $count = $model->alias('D')->join($join)->where ( $map )->count ( 'D.id' );
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
                ->alias('D')
                ->field(array('company_name','company_license','D.mobile','D.status','contact','D.created','username','D.user_id','D.id'))
                ->join($join)
                ->where($map)
                ->order('`status` asc')
                ->limit($p->firstRow . ',' . $p->listRows)
                ->select ( );
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
            $_REQUEST['value']=5;
            $this->opration();
        }else{
            $this->error('操作失败！');
        }
    }

}