<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/12
 * Time: 16:16
 */

namespace Home\Controller;


class ApplicationsController extends CController
{

    protected function _list($model, $map, $sortBy = '', $asc = false)
    {


        $join = 'LEFT JOIN users u ON A.user_id=u.id';
        //取得满足条件的记录数
        $count = $model->alias('A')->join($join)->where ( $map )->count ( 'A.id' );

        R('Com/getDevelopers');
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
                ->field(array('A.id', 'A.name', 'A.status', 'app_key', 'app_id', 'username', "A.user_id", 'A.created'))
                ->join($join)
                ->where($map)
                ->order('A.created desc')
                ->limit($p->firstRow . ',' . $p->listRows)
                ->select ( );
            $developers = M('Developers');
            foreach($voList as $k=>$vo){
                $voList[$k]['company_name'] = $developers->where(array('user_id'=>$vo['user_id']))->getField('company_name');
            }
            #var_dump($voList);exit;
            //模板赋值显示
            $this->assign ( 'list', $voList );
            $this->assign('page',$p->show());
            return $voList;
        }
        return;
    }

    public function viewApp()
    {
        $app = M('Applications')->where(array('id'=>(int)$_REQUEST['id']))->find();
        $iaps = M('Iaps')->where(array('application_id'=>(int)$_REQUEST['id']))->select();
        $this->assign('app',$app);
        $this->assign('iaps',$iaps);
        $this->display();
    }

}