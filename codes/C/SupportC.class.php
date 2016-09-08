<?php
class SupportC extends C{
	public function Index(){
		$this->assign('title','技术支持，硕星，西安硕星，服务器，硕星服务器，西安硕星信息技术有限公司，西安硕星信息技术有限公司欢迎您！');
		$this->assign('spstatus','uk-active');
		$this->display();
	}
}