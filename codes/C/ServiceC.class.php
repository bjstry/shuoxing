<?php
class ServiceC extends C{
	public function Index(){
		$this->assign('title','硕星服务，硕星，服务器，硕星服务器，西安硕星信息技术有限公司，西安硕星信息技术有限公司欢迎您！');
		$this->assign('svstatus','uk-active');
		$this->display();
	}
}