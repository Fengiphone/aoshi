<?php
namespace Admin\Controller;
use Think\Controller;


class IndexController extends Controller {


    public function index(){
        // 怎么查询列表数据
        // 第一步：查询列表信息
        $article=M('article');

        $info=$article->order('id desc')->select();

        // 第二步：模版赋值
        $this->assign('info',$info);

        $this->display();
    }

    //添加一条记录
    public function add()
    {
    	$this->display();
    }

    public function save()
    {

    	$article=D('article');//怎么实例化模型   D:(Database)
    	$data['article_title']=I('article_title');//获取传输过来的参数 I:(input)
    	// $data['article_content']=I('article_content');

       
      
       $data=$article->create();//加了自动完成，create返回的值重新赋到保存数组里面

       if(! $data){//校验数据
            echo $article->getError();
        }else{
            $article->add($data);
            $this->success('添加成功！',U('Index/index'));//跳转的方法
        }
        


    }

    //删除信息
    public function delete()
    {
        $id=I('id');

        $rt_info=D('article')->where("id=$id")->delete();
        if ($rt_info) {
            $this->success('删除成功！',U('Index/index'));
        }else{
            $this->error('删除错误，原因：'.$article->getError(),U('Index/index'));
        }
    }

    //批量删除
    public function all_delete()
    {
        $ids=I('ids');

        $rt_info=D('article')->where("id in($ids) ")->delete();
        if ($rt_info) {
            $this->ajaxReturn(array('msg'=>'删除成功！','status'=>1),'json');
        }else{
            $this->ajaxReturn(array('msg'=>'删除失败','status'=>0),'json');
        }
    }

}