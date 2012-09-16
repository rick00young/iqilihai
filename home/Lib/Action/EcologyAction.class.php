<?php
// 本类由系统自动生成，仅供测试用途
class EcologyAction extends Action {
    public function index(){
        header("Content-Type:text/html; charset=utf-8");
       /* echo '<div style="font-weight:normal;color:blue;float:left;width:345px;text-align:center;border:1px solid silver;background:#E8EFFF;padding:8px;font-size:14px;font-family:Tahoma">^_^ Hello,欢迎使用<span style="font-weight:bold;color:red">ThinkPHP</span></div>';*/
       $this->display('wetLand');
    }

    public function yufanzhou(){
        $this->display('yufangzhou');
    }

    public function oldBeach(){
        $this->display('oldBeach');
    }

    public function wetLand(){
        $this->display('wetLand');
    }

    public function dear(){
        $this->display('dear');
    }

    public function movieBase(){
        $this->display('movieBase');
    }
}