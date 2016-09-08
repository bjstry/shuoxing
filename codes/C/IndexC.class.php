<?php
class IndexC extends C{
	public function Index(){
		$row['title'] = "专业化的服务";
		$row['t_info'] = '专业化的服务是保障客户成功的基础！';
		$this->assign('title','硕星，西安硕星，服务器，硕星服务器，西安硕星信息技术有限公司，西安硕星信息技术有限公司欢迎您！');
		$this->assign('instatus',"uk-active");
		$this->assign('row',$row);
		$this->assign('mycss',"<link rel='stylesheet' href='"._P_."/css/components/slideshow.min.css'><link rel='stylesheet' href='"._P_."/css/index.css'>");
		$this->assign('myjs',"<script src='"._P_."/js/components/slideshow.min.js'></script>");
		$this->display();
	}
	public function Product(){
		$row['title'] = "优质可靠的产品";
		$row['t_info'] = '稳定的产品能够保证客户有效利用，创造更大价值！';
		$this->assign('title','硕星产品，硕星，西安硕星，服务器，硕星服务器，西安硕星信息技术有限公司，西安硕星信息技术有限公司欢迎您！');
		$this->assign('pdstatus','uk-active');
		$this->assign('row',$row);
		$this->display();
	}
}