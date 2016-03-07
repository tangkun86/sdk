<?php
/**
 * Created by PhpStorm.
 * User: tk
 * Date: 2015/10/8
 * Time: 15:07
 */

namespace Home\Controller;


use Think\Controller;

class CController extends Controller
{

    public function _empty(){
        header('Content-type:text/html;charset=utf8');
        die('未知的控制器方法！');
    }

    protected function _initialize() {
        // 用户权限检查
        /*$auth = new \Think\Auth;
        if(!isset($_SESSION[C('USER_AUTH_KEY')])){
            $this->redirect('Admin/Public/login');
        }else{
            if(!$_SESSION[C('ADMIN_AUTH_KEY')]){
                $authOption = MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
                if(!$auth->check($authOption,$_SESSION[C('USER_AUTH_KEY')])){
                    $this->error('没有该操作的权限');
                }
            }
        }*/
        if(!isset($_SESSION['admin'])){
            if(CONTROLLER_NAME=='Users' && ACTION_NAME=='loginAdmin'){
                return true;
            }else{
                $this->redirect('Users/loginAdmin');
            }
        }else{
            $_SESSION['user_id'] = $_SESSION['admin']['id'];
            $_SESSION['username'] = $_SESSION['admin']['username'];
            $this->assign('user',$_SESSION['admin']);
        }
    }

    public function index() {
        //列表过滤器，生成查询Map对象
        #$map = $this->_search ();
        if (method_exists ( $this, '_filter' )) {
            $map = $this->_filter ( );
        }
        $name  = CONTROLLER_NAME;
        $model = D ($name);
        if (! empty ( $model )) {
            $this->_list ( $model, $map );
        }
        $this->display ('index');
    }

    public function manage() { $this->index(); }
    /**
    +----------------------------------------------------------
     * 根据表单生成查询条件
     * 进行列表过滤
    +----------------------------------------------------------
     * @access protected
    +----------------------------------------------------------
     * @param string $name 数据对象名称
    +----------------------------------------------------------
     * @return HashMap
    +----------------------------------------------------------
     * @throws ThinkExecption
    +----------------------------------------------------------
     */
    protected function _search() {
        //生成查询条件
        $name = CONTROLLER_NAME;
        $model = D ( $name );
        $map = array ();
        if(!empty($_REQUEST)){
            foreach ( $model->getDbFields () as $key => $val ) {
                if (isset ( $_REQUEST [$val] ) && $_REQUEST [$val] != '') {
                    $map [$val] = $_REQUEST [$val];
                }
            }
        }
        return $map;
    }

    protected function _filter($alias='')
    {
        if($alias) $alias.='.';
        $map = array($alias.'status' =>array('gt',0));
        if(isset($_REQUEST['user_id']) || isset($_REQUEST['userId'])){
            $uid = isset($_REQUEST['user_id']) ? $_REQUEST['user_id'] : $_REQUEST['userId'];
            $uid += 0;
            if($uid > 0){
                $map += array(
                    $alias.'user_id'=>array('eq',$uid),
                );
            }
        }

        if(isset($_REQUEST['app_id']) || isset($_REQUEST['appId'])){
            $aid = isset($_REQUEST['app_id']) ? $_REQUEST['app_id'] : $_REQUEST['appId'];;
            $aid += 0;
            if($aid > 0){
                $map += array(
                    $alias.'application_id'=>array('eq',$aid),
                );
            }
        }

        if(isset($_REQUEST['start'])){
            $_REQUEST['start'] = strtotime($_REQUEST['start']);
            $map += array(
                $alias.'created'=>array('EGT',$_REQUEST['start']),
            );
        }

        if(isset($_REQUEST['end'])){
            $_REQUEST['end'] = strtotime($_REQUEST['end']);
            $map += array(
                $alias.'created'=>array('ELT',$_REQUEST['end']),
            );
        }
        return $map;
    }
    /**
    +----------------------------------------------------------
     * 根据表单生成查询条件
     * 进行列表过滤
    +----------------------------------------------------------
     * @access protected
    +----------------------------------------------------------
     * @param Model $model 数据对象
     * @param HashMap $map 过滤条件
     * @param string $sortBy 排序
     * @param boolean $asc 是否正序
    +----------------------------------------------------------
     * @return void
    +----------------------------------------------------------
     * @throws ThinkExecption
    +----------------------------------------------------------
     */
    protected function _list($model, $map, $sortBy = '', $asc = false)
    {

        //排序字段 默认为主键名
        if (!empty ( $_REQUEST ['_order'] )) {
            $order = $_REQUEST ['_order'];
        } else {
            $order = ! empty ( $sortBy ) ? $sortBy : $model->getPk ();
        }
        //排序方式默认按照倒序排列
        //接受 sost参数 0 表示倒序 非0都 表示正序
        if (isset ( $_REQUEST ['_sort'] )) {
            $sort = $_REQUEST ['_sort'] == 'asc' ? 'asc' : 'desc';
        } else {
            $sort = $asc ? 'desc' : 'asc';
        }
        //取得满足条件的记录数
        $count = $model->where ( $map )->count ( 'id' );
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
                ->where($map)
                ->order( "`" . $order . "` " . $sort)
                ->limit($p->firstRow . ',' . $p->listRows)
                ->select ( );

            //模板赋值显示
            $this->assign ( 'list', $voList );
//            var_dump($p->show());exit;
            $this->assign('page',$p->show());
            return $voList;
        }
        return;
    }

    /**
    +----------------------------------------------------------
     * 执行操作
     *
    +----------------------------------------------------------
     * @access public
    +----------------------------------------------------------
     * @return string
    +----------------------------------------------------------
     * @throws FcsException
    +----------------------------------------------------------
     */
    public function opration()
    {
        $name = CONTROLLER_NAME;
        $model = D ($name);
        $pk = $model->getPk ();
        $id = $_REQUEST[$pk];
        $condition = array ($pk => array ('eq', $id ) );
        $field = (!empty($_REQUEST['field'])) ? $_REQUEST['field'] :'status';
        $value = (!empty($_REQUEST['value'])) ? $_REQUEST['value'] :1;
        if (false!==$model->where($condition)->setField($field,$value)){
            $this->redirect($name.'/index');
        }else{
            $model->error =  L('_OPERATION_WRONG_');
            $this->error($model->error);
        }
    }

    public function edit()
    {
        $name = CONTROLLER_NAME;
        $model = M ( $name );
        $id = $_REQUEST [$model->getPk ()];
        $vo = $model->getById ( $id );
        $this->assign ( 'vo', $vo );
        $this->display ();
    }

    public function update()
    {
        $name = CONTROLLER_NAME;
        $model = D ( $name );
        if (false === $model->create ()) {
            $this->error( $model->getError () );
        }
        // 更新数据
        $list=$model->save ();
        if (false !== $list) {
            //成功提示
            $this->redirect($name.'/index');
        } else {
            //错误提示
            $this->error('编辑失败!');
        }
    }

    public function add() { $this->display(); }

    public function insert()
    {
        $name = CONTROLLER_NAME;
        $model = D ($name);
        if (false === $model->create ()) {
            $this->error( $model->getError () );
        }
        //保存当前数据对象
        $list=$model->add ();
        if ($list!==false) { //保存成功
            $this->redirect($name.'/index');
        } else {
            //失败提示
            $this->error('新增失败!');
        }
    }

    /**
    +----------------------------------------------------------
     * 默认删除操作
    +----------------------------------------------------------
     * @access public
    +----------------------------------------------------------
     * @return string
    +----------------------------------------------------------
     * @throws ThinkExecption
    +----------------------------------------------------------
     */
    public function delete() {
        //删除指定记录
        $name = CONTROLLER_NAME;
        $model = M ($name);
        if (! empty ( $model )) {
            $pk = $model->getPk ();
            $id = $_REQUEST [$pk];
            if (isset ( $id )) {
                $condition = array ($pk => array ('in', explode ( ',', $id ) ) );
                $list = $model->where ( $condition )->setField ( 'status', - 1 );
                if ($list!==false) {
                    $this->redirect($name.'/index');
                } else {
                    $this->error('删除失败！');
                }
            } else {
                $this->error( '非法操作' );
            }
        }
    }

    /* 批量删除 */
    public function del_true() {
        //删除指定记录
        $name = CONTROLLER_NAME;
        $model = D ($name);
        if (! empty ( $model )) {
            $pk = $model->getPk ();
            $id = $_REQUEST [$pk];
            if (isset ( $id )) {
                $condition = array ('id' => array ('in', explode ( ',', $id ) ) );
                // dump($condition);exit;
                if (false !== $model->where ( $condition )->delete ()) {
                    $this->redirect($name.'/index');
                } else {
                    $this->error('删除失败！');
                }
            } else {
                $this->error( '非法操作' );
            }
        }
        $this->forward ();
    }

    public function del() { $this->delete(); }

}