<?php
namespace Home\Controller;

use Think\Controller;

class EmptyController extends Controller
{
    public function index()
    {
        $c = CONTROLLER_NAME;
        echo '当前省份' . $c;
    }
    public function _empty($name)
    {
        $c = CONTROLLER_NAME;
        if (!empty($c)) {
            echo '当前省份' . $c .'   '.'当前城市' . $name;
        } else {
            echo '当前城市' . $name;
        }
    }
}