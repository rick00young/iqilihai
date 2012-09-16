<?php
// 本类由系统自动生成，仅供测试用途
class UserAction extends Action {
    public function index(){
        header("Content-Type:text/html; charset=utf-8");
       /* echo '<div style="font-weight:normal;color:blue;float:left;width:345px;text-align:center;border:1px solid silver;background:#E8EFFF;padding:8px;font-size:14px;font-family:Tahoma">^_^ Hello,欢迎使用<span style="font-weight:bold;color:red">ThinkPHP</span></div>';*/
	   //echo "hello";
	   $this->assign('title','欢迎来到天津七里海旅游管理平台');
	   $this->display('');
    }
    
    public function login(){
        //echo 'login';
        //echo $_SESSION['verify'];
        //dump($_POST);
        if(empty($_POST['username'])){
            $this->error('用户不能空！');
        }elseif(empty($_POST['password'])){
            $this->error('密码不能为空！');
        }elseif(empty($_POST['verify'])){
            $this->error('验证码有误或过期！ ');
        }

        $condition = array();
        $condition['username'] = $_POST['username'];
        $condition['password']  = md5($_POST['password']);
        $condition['_logic']        = 'AND';
        if( $_SESSION['verify'] != md5($_POST['verify']) ){
            $this->error('验证码有误！');
        }
        $admin = M('admin');
        //$list = $admin->select();
        //dump($list);
        $result = $admin->where($condition)->find();
        if($result){
             // dump($result);
             //$this->success('登陆成功！');
             $_SESSION[C('USER_AUTH_KEY')] = md5($result['username'] . $result['id']);
             $_SESSION['admin_name'] = $result['username'];
             $update['last_login_time'] = time();
             $admin->where($condition)->save($update);
            // dump($_SESSION[C('USER_AUTH_KEY')]);
             $this->redirect('Home/index');
        }else{
             $this->error('用户名或密码错误！');
        }
    }

}
