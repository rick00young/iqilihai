<?php
// 本类由系统自动生成，仅供测试用途
class NoticeAction extends Action {
    public function index(){
        header("Content-Type:text/html; charset=utf-8");
       /* echo '<div style="font-weight:normal;color:blue;float:left;width:345px;text-align:center;border:1px solid silver;background:#E8EFFF;padding:8px;font-size:14px;font-family:Tahoma">^_^ Hello,欢迎使用<span style="font-weight:bold;color:red">ThinkPHP</span></div>';*/
	   //echo "hello";
	   //$this->assign('title','欢迎来到天津七里海旅游管理平台');
        $notice = D('notice');
        //$all = $notice->select();
        $one = $notice->where("type = 1")->order('create_time')->limit(10)->select();
        $two = $notice->where("type = 2")->order('create_time')->limit(10)->select();
        //dump($all);
        $this->assign('one',$one);
        $this->assign('two',$two);
	    $this->display('notice');

    }



}
