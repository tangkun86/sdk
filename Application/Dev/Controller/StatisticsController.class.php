<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/13
 * Time: 10:10
 */

namespace Dev\Controller;


class StatisticsController extends CController
{

    protected function _list($model, $map, $sortBy = '', $asc = false)
    {

        $join = '
            LEFT JOIN applications A ON S.application_id=A.id
        ';
        $map = array('S.status'=>array('eq',1))+$this->_filter('S');
        //取得满足条件的记录数
        $count = $model->field('SUM(S.fee)')->alias('S')->join($join)->where ( $map )->group('S.user_id')->count ( 'S.id' );
        #echo $model->getlastSql();exit;
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
                ->alias('S')
                ->field(array('SUM(S.fee) as total','S.application_id','A.app_id','A.name'))
                ->join($join)
                ->where($map)
                ->group('S.application_id')
//                ->order('`total` desc')
                ->limit($p->firstRow . ',' . $p->listRows)
                ->select ( );
            #var_dump($voList);exit;
            $sum = 0;
            foreach ($voList as $app) {
                $sum += $app['total'];
            }
            //模板赋值显示
            $this->assign ( 'total', $sum );
            $this->assign ( 'list', $voList );
            $this->assign('page',$p->show());
            return $voList;
        }
    }

    public function statIap()
    {
        $name = CONTROLLER_NAME;
        $model = D($name);
        $join = '
            LEFT JOIN users u ON S.user_id=u.id
            LEFT JOIN applications A ON S.application_id=A.id
            LEFT JOIN developers D ON S.user_id=D.user_id
            LEFT JOIN iaps I ON S.iap_id=I.id
        ';
        $map = array('S.status'=>array('eq',1))+$this->_filter('S');
        //取得满足条件的记录数
        $count = $model->alias('S')->join($join)->where ( $map )->group('S.iap_id')->count ( 'S.id' );
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
            $field = array('SUM(S.fee) as total','S.status','S.application_id','A.name','A.app_id','D.company_name','u.username','A.user_id',
                'I.name as iap_name','I.iap_key');
            $voList = $model
                ->alias('S')
                ->field($field)
                ->join($join)
                ->where($map)
                ->group('S.iap_id')
                ->order('`total` desc')
                ->limit($p->firstRow . ',' . $p->listRows)
                ->select ( );
            #var_dump($voList);exit;
            //模板赋值显示
            R('Com/getApps');
            $this->assign ( 'list', $voList );
            if($count>$listRows) $this->assign('page',$p->show());
        }
        $this->display();
        return;
    }


    public function statDetail()
    {
        $name = CONTROLLER_NAME;
        $model = D($name);
        $join = '
            LEFT JOIN users u ON S.user_id=u.id
            LEFT JOIN applications A ON S.application_id=A.id
            LEFT JOIN developers D ON S.user_id=D.user_id
            LEFT JOIN iaps I ON S.iap_id=I.id
        ';
        $map = $this->_filter('S');
        #var_dump($map);exit;
        //取得满足条件的记录数
        $count = $model->alias('S')->join($join)->where ( $map )->count ( 'S.id' );
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
            $field = array('S.mobile','S.application_id','S.created','S.fee','S.status','S.client_status','S.operator','A.name',
                'D.company_name','u.username','A.app_id','S.user_id','I.name as iap_name','I.iap_key');
            $voList = $model
                ->alias('S')
                ->field($field)
                ->join($join)
                ->where($map)
                ->order('`created` desc')
                ->limit($p->firstRow . ',' . $p->listRows)
                ->select ( );

            //模板赋值显示
            R('Com/getApps');
            $this->assign ( 'list', $voList );
            $this->assign('page',$p->show());
        }
        $this->display();
        return;
    }
}