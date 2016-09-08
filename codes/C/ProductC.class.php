<?php
class ProductC extends C{
	public function Index(){
		$this->assign('title','硕星产品，硕星，西安硕星，服务器，硕星服务器，西安硕星信息技术有限公司，西安硕星信息技术有限公司欢迎您！');
		$this->assign('mycss',"<link rel='stylesheet' href='"._P_."/css/product.css'>");
		$this->assign('pdstatus','uk-active');
		$this->display();
	}
	public function Lists(){
		$this->display();
	}
}