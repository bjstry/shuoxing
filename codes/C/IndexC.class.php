<?php
class IndexC extends C{
	public function Index(){
		//$row['keywords'] = "硕星,服务器,硕星服务器,西安硕星,星蕴服务器,西安硕星信息技术有限公司";
		//$row['description'] = "硕星,西安硕星信息技术有限公司致力于为科研领域提供专业的计算模拟解决方案，公司始终本着 “以信为本， 以质取胜” 的宗旨，着眼于市场需求， 守信经营。客户在这里可以得到售前技术咨询，售中合理化方案和售后标 准化服务等一整套完善的技术支持， 从而最大限度的满足用户的需求。";
		$row['keywords'] = "硕星，硕星信息，西安硕星信息技术有限公司";
		$row['title'] = "专业化的服务";
		$row['t_info'] = '专业化的服务是保障客户成功的基础！';
		$this->assign('title','硕星，硕星信息，西安硕星信息有限公司，西安硕星信息技术有限公司欢迎您，星蕴，星蕴服务器，星蕴设备');
		$this->assign('instatus',"uk-active");
		$this->assign('row',$row);
		$this->assign('mycss',"<link rel='stylesheet' href='"._P_."/css/components/slideshow.min.css'><link rel='stylesheet' href='"._P_."/css/index.css'>");
		$this->assign('myjs',"<script src='"._P_."/js/components/slideshow.min.js'></script>");
		$this->display();
	}
}