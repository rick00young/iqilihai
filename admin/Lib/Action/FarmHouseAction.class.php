<?php
// 本类由系统自动生成，仅供测试用途
class FarmHouseAction extends Action {
    public function index(){
        header("Content-Type:text/html; charset=utf-8");
       /* echo '<div style="font-weight:normal;color:blue;float:left;width:345px;text-align:center;border:1px solid silver;background:#E8EFFF;padding:8px;font-size:14px;font-family:Tahoma">^_^ Hello,欢迎使用<span style="font-weight:bold;color:red">ThinkPHP</span></div>';*/
	   //echo "hello";
	   $this->assign('title','欢迎来到天津七里海旅游管理平台');
	   $this->display('');
    }

    public function  _initialize(){
        if( strlen($_SESSION[C('USER_AUTH_KEY')]) < 16 ){
            $this->redirect('Index/index');
        }
    }
    public function farmAdd(){
        header("Content-Type:text/html; charset=utf-8");
       /* echo '<div style="font-weight:normal;color:blue;float:left;width:345px;text-align:center;border:1px solid silver;background:#E8EFFF;padding:8px;font-size:14px;font-family:Tahoma">^_^ Hello,欢迎使用<span style="font-weight:bold;color:red">ThinkPHP</span></div>';*/
	   //echo "hello";
	   //$this->assign('title','欢迎来到天津七里海旅游管理平台');

       $actionTitle = C('farmAddTitle');
       //echo $actionTitle;
       $this->assign('actionTitle',$actionTitle);

	   $this->display('farmAdd');
    }
     //induction数据上传
    public function farmSubmit(){
        $data['title']          = $_POST['title'];
        $data['content']    = $_POST['content'];
        $picd[] = $_POST['picd1'];
        $picd[] = $_POST['picd2'];
        $picd[] = $_POST['picd3'];
        //$data['map_link']  = $_POST['map_link'];
        $data['hot']           = 0;
        $data['create_time'] = $data['edit_time'] = time();
        $data['edit_user']      = $_SESSION['admin_name'];
        $data['status']           = 0;
        if( isset($_FILES) ){
            $up_info = $this->_upload();
            //dump($up_info);
            $images = array();
            for( $i = 0; $i < count($up_info) ;$i++){
                $images []= $up_info[$i]['savename'] .'-'. $picd[$i];
            }
            $data['pic'] = serialize($images);
        }
        //dump($data);
        if( $data['title'] && $data['content'] && $data['pic']){
            $farm = M('farmhouse');
            if( $farm->data($data)->add()){
                $this->success("添加成功！");
            }else{
                $this->error("添加失败！");
            }
        }
        
    }

     protected function _upload() {
            import("ORG.Net.UploadFile");
            $upload = new UploadFile();
            //设置上传文件大小
            $upload->maxSize = 3292200;
            //设置上传文件类型
            $upload->allowExts = explode(',', 'jpg,gif,png,jpeg');
            //设置附件上传目录
            $upload->savePath = './Public/uploads/FarmHouse/';
            $upload->saveRule = uniqid;
            $upload->thumb = true;
            $upload->thumbMaxWidth = "300";
            $upload->thumbMaxHeight = "300";
            //删除原图
            //$upload->thumbRemoveOrigin = true;
            if (!$upload->upload()) {
                //捕获上传异常
                $this->error($upload->getErrorMsg());
            } else {
                //取得成功上传的文件信息
                $info = $upload->getUploadFileInfo();
                //dump($info);
                return $info;
                
            }
        }

    public function farmList(){
        //header("Content-Type:text/html; charset=utf-8");
        $farm = D('farmhouse');
        //$list = $farm->select();
        //dump($list);

       $actionTitle = C('farmListTitle');
       //echo $actionTitle;
      $this->assign('actionTitle',$actionTitle);

        //$this->assign('list',$list);

        import("ORG.Util.Page");
        $count = $farm->count();
       // dump($count);
       $page = new Page($count,20);
       $list = $farm->limit($page->firstRow. ',' .$page->listRows)->order('id')->select();
       //$list = $page->show();
       // dump($list); 
       $this->assign('list',$list);
       $pageinfo = $page->show();
       //dump($pageinfo);
       $this->assign('pageinfo',$pageinfo);
       $this->display('farmList');
    }

    public function farmModify(){
        $farm = D('farmhouse');
        $id = $_GET['id'] + 0;
        if( isset($id) ){
            $result = $farm->where("id = $id")->find();
            //dump($result);
            $pic = unserialize($result['pic']);
           // dump($pic);

             $actionTitle = C('farmDetailTitle');
            // echo $actionTitle;
             $this->assign('actionTitle',$actionTitle);

            $this->assign('pic',$pic);
            $this->assign('result',$result);
            $this->display('farmDetail');
        }else{
            $this->error('数据提取错误！');
        }
    }
    public function farmOperate(){
        $status = $_GET['status'] + 0;
        $id = $_GET['id'] + 0;
        $intro = D('farmhouse');
        if($status != 1){
            $data['status'] = 1;
            if($intro->where("id = $id")->save($data)){
                $this->success('操作成功，信息已发布！');
            }else{
                $this->error('操作失败，请您检查数据是否完整稍后再操作！');
            }
        }else{
            $data['status'] = 0;
            if($intro->where("id = $id")->save($data)){
                $this->success('操作成功，信息已禁止发布！');
            }else{
                $this->error('操作失败，请您检查数据是否完整稍后再操作！');
            }
        }
    }
    public function farmUpdate(){
        //dump($_POST);
        $data['id'] = $_POST['id'];
        $data['title'] = $_POST['title'];
        $data['content'] = $_POST['content'];
        $data['edit_time'] = time();
        $data['edit_user'] =  $_SESSION['admin_name'];
       // $data['map_link'] = $_POST['map_link'];
        //dump($data);
        $pic[] = $_POST['pic1'] . '-' . $_POST['title1'];
        $pic[] = $_POST['pic2'] . '-' . $_POST['title2'];
        $pic[] = $_POST['pic3'] . '-' . $_POST['title3'];
       // dump($pic);
        $data['pic'] = serialize($pic);
       if( $data['id']  && $data['title'] && $data['content'] && $data['pic']){
            $farm = M('farmhouse');
            $feedback = $farm->save($data);
            if($feedback){
                $this->success("数据修改成功！");
            }else{
                $this->error("数据修改失败！");
            }
        }else{
            $this->error('数据不完整！');   
         }
    }
    public function farmDelete(){
        $id = $_GET['id'] + 0;
        if( isset( $id ) ){
            $farm = D('farmhouse');
            if( $farm->where("id = $id")->delete() ){
                $this->success("数据删除成功！");
            }else{
                $this->error("数据删除失败！");
            }
        }else{
            $this->error("数据获取有误！");
        }
    }

}