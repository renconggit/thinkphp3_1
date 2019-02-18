<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    //
    public function _empty($name)
    {
        echo '当前城市' . $name;
    }
    public function index()
    {
        $model = C('aaa');
        dump(getcwd());
        dump($_SERVER['SCRIPT_NAME']);
        //var_dump(explode('/',$_SERVER['PHP_SELF'])[1]);
        $this->show('321321' . $model, 'utf-8');
    }
    public function test($a = '')
    {
        $News = M('News');
        $DATA = $News->order('datetime')->limit(2)->page(2)->select();
        echo $News->getLastSql();
        //var_dump($News);
        $this->ajaxReturn($DATA);
        //$data = 'ok';
        $data['st'] = 1;
        //$this->ajaxReturn($data);
        $this->success('测试成功', '/' . Ver . '/Home/index');
    }
    public function select()
    {
        $News = M('News');
        $map['name'] = array('gt', 1);
        $where['con'] = '1';
        $News->where('id>2')->where("name='11'")->where($map)->where($where)->select();
        echo $News->getLastSql();
        //var_dump($News);
        //$this->ajaxReturn($DATA);
        //$data = 'ok';
        //$data['st'] = 1;
        //$this->ajaxReturn($data);
        //$this->success('测试成功', '/' . Ver . '/Home/index');
    }
    public function table()
    {
        $Model = M();
        //$data=$Model->table('__NEWS__')->where("id>=1")->select();
        $data=$Model->table('test.yunzhi_teacher')->where("id>=1")->select();
        $this->ajaxReturn($data);
        //var_dump($News);
        //$this->ajaxReturn($DATA);
        //$data = 'ok';
        //$data['st'] = 1;
        //$this->ajaxReturn($data);
        //$this->success('测试成功', '/' . Ver . '/Home/index');
    }
    public function add()
    {
        $Model = M('User');
        $Model->name='流年';
        //$Model->pwd='123456';
        $Model->add();
        $this->success('添加成功', '/' . Ver . '/Home/index');
    }
}