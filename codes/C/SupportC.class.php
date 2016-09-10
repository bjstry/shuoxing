<?php
class SupportC extends C{
	public function Index(){
		$row['keywords'] = "硕星技术，硕星，硕星信息，西安硕星信息技术有限公司";
		$this->assign('title','技术支持，硕星，西安硕星，服务器，硕星服务器，西安硕星信息技术有限公司，西安硕星信息技术有限公司欢迎您！');
		$this->assign('row',$row);
		$this->assign('spstatus','uk-active');
		$this->display();
	}
}