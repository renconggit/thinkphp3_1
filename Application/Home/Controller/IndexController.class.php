<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {

        $model = C('aaa');
        dump(getcwd());
        dump($_SERVER['SCRIPT_NAME']);
        //var_dump(explode('/',$_SERVER['PHP_SELF'])[1]);
        $this->show('321321'.$model,'utf-8');
    }
    public function test($a='')
    {
        
        //$data = 'ok';
        $data['st']=1;
        //$this->ajaxReturn($data);
        $this->success('测试成功','/'.Ver.'/Home/index');
    }
}