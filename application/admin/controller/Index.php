<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        return '<span>3234</span>';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function dbTest(){
        $data = Db::table('user') -> select();
        //echo json_encode($data);
       return json($data);
    }
}
