<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/14
 * Time: 15:47
 */

namespace Admin\Controller;


class IapsController extends CController
{
    public function _filter()
    {
        array('I.status'=>array('gt',0));
    }

    protected function _list($model, $map, $sortBy = '', $asc = false)
    {

        $join = '
            LEFT JOIN applications A ON I.application_id=A.id
            LEFT JOIN developers D ON I.user_id=D.user_id
            LEFT JOIN users u ON I.user_id=u.id
        ';
        #$map = array('S.status'=>array('eq',1));
        //取得满足条件的记录数
        $count = $model->field('SUM(S.fee)')->alias('I')->join($join)->where ( $map )->count ( 'I.id' );
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
                ->alias('I')
                ->field(array('I.id', 'I.name','A.status', 'I.iap_key', 'I.pay_code', 'I.created', 'I.status','application_id','app_id','A.name AS app_name','D.company_name', 'u.username'))
                ->join($join)
                ->where($map)
                ->order('A.status asc')
                ->limit($p->firstRow . ',' . $p->listRows)
                ->select ( );

            //模板赋值显示
            R('Com/getDevelopers');
            $this->assign ( 'list', $voList );
            $this->assign('page',$p->show());
            #var_dump($voList);exit;
            return $voList;
        }
        return;
    }
}