<?php
class SolutionC extends C{
	public function Index(){
		$row['keywords'] = "硕星解决方案，硕星，硕星信息，西安硕星信息技术有限公司";
		$row['title'] = "HPC领域的解决专家";
		$row['t_info'] = '硕星团队，了解您的需求，为您量身打造解决方案！';
		$this->assign('title','解决方案，硕星，西安硕星，服务器，硕星服务器，西安硕星信息技术有限公司，西安硕星信息技术有限公司欢迎您！');
		$this->assign('slstatus','uk-active');
		$this->assign('row',$row);
		$this->display();
	}
}