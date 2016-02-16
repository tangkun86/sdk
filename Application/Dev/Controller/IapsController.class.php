<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/14
 * Time: 15:47
 */

namespace Dev\Controller;


class IapsController extends CController
{

    protected function _list($model, $map, $sortBy = '', $asc = false)
    {

        $join = '
            LEFT JOIN applications A ON I.application_id=A.id
        ';
        $map = $this->_filter('I');
        #var_dump($map);exit;
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
            $currentPage = isset($_REQUEST['p']) ? $_REQUEST['p'] : 1;
            $p->firstRow = ($currentPage-1)*$listRows;
            //分页查询数据
            $voList = $model
                ->alias('I')
                ->field(array('I.id', 'I.name','A.status', 'I.iap_key', 'I.pay_code', 'I.created', 'I.status','application_id','app_id','A.name AS app_name'))
                ->join($join)
                ->where($map)
                ->order('A.status asc')
                ->limit($p->firstRow . ',' . $p->listRows)
                ->select ( );

            //模板赋值显示
            R('Com/getDevelopers');
            $this->assign ( 'list', $voList );
            if($count>$listRows){
                $this->assign('page',$p->show());
            }
            #var_dump($voList);exit;
            return $voList;
        }
        return;
    }

    public function selectApp()
    {
        R('Com/getApps');
        $this->display();
    }

    public function add()
    {
        R('Com/getApps');
        R('Com/getFees');
        parent::add();
    }

    public function view()
    {
        $map = $this->_filter();
        $iap = (object)M('Iaps')->where($map)->find();
        $app = (object)M('Applications')->where(array('id'=>$iap->application_id,'user_id'=>$iap->user_id))->find();
        $this->assign('iap',$iap);
        $this->assign('app',$app);
        $this->display();
    }

    public function edit(){
        R('Com/getFees');
        $this->view();
    }

}