<?php
class ServiceC extends C{
	public function Index(){
		$row['keywords'] = "硕星服务，硕星，硕星信息，西安硕星信息技术有限公司";
		$this->assign('title','硕星服务，硕星，服务器，硕星服务器，西安硕星信息技术有限公司，西安硕星信息技术有限公司欢迎您！');
		$this->assign('row',$row);
		$this->assign('svstatus','uk-active');
		$this->display();
	}
}