<?php
class SupportC extends C{
	public function Index(){
		$row['newsstatus'] = "uk-active";
		$row['article'][] = array(
			"title"=>"CentOS系统基本介绍",
			"meta"=>"CentOS，操作系统，Linux",
			"lead"=>"CentOS（Community Enterprise Operating System，中文意思是：社区企业操作系统）
			是Linux发行版之一，它是来自于Red Hat Enterprise Linux依照开放源代码规定释出的源代码所
			编译而成。由于出自同样的源代码，因此有些要求高度稳定性的服务器以CentOS替代商业版的Red
			Hat Enterprise Linux使用。两者的不同，在于CentOS并不包含封闭源代码软件。",
			"content"=>"特点<br>
1．可以把CentOS理解为Red Hat AS系列！它完全就是对Red Hat AS进行改进后发布的！各种操作、使用和RED HAT没有区别！<br>
2．CentOS完全免费，不存在RED HAT AS4需要序列号的问题。<br>
3．CentOS独有的yum命令支持在线升级，可以即时更新系统，不像RED HAT那样需要花钱购买支持服务！<br>
4．CentOS修正了许多RHEL的BUG！<br>
5．CentOS版本说明：CentOS3.1 等同于 RED HAT AS3 Update1 CentOS3.4 等同于 RED HAT AS3 Update4 CentOS4.0 等同于 RED HAT AS4
与 RHEL的关系<br><br>
RHEL 在发行的时候，有两种方式。一种是二进制的发行方式，另外一种是源代码的发行方式。无论是哪一种发行方式，你都可
以免费获得（例如从网上下载），并再次发布。但如果你使用了他们的在线升级（包括补丁）或咨询服务，就必须要付费。RHEL
一直都提供源代码的发行方式，CentOS 就是将 RHEL 发行的源代码重新编译一次，形成一个可使用的二进制版本。由于 LINUX 
的源代码是 GNU，所以从获得 RHEL 的源代码到编译成新的二进制，都是合法。只是 red hat 是商标，所以必须在新的发行版
里将red hat 的商标去掉。red hat对这种发行版的态度是：'我们其实并不反对这种发行版，真正向我们付费的用户，他们重
视的并不是系统本身，而是我们所提供的商业服务。' 所以，CentOS 可以得到 RHEL 的所有功能，甚至是更好的软件。但 Ce
ntOS 并不向用户提供商业支持，当然也不负上任何商业责任。如果你要将你的 RHEL 转到 CentOS 上，因为你不希望为 RHEL 
升级而付费。当然，你必须有丰富 linux 使用经验，因此 RHEL 的商业技术支持对你来说并不重要。但如果你是单纯的业务
型企业，那么还是建议你选购 RHEL 软件并购买相应服务。这样可以节省你的 IT 管理费用，并可得到专业服务。一句话，选
用 CentOS 还是 RHEL，取决于你所在公司是否拥有相应的技术力量。",
			"other"=>"科普系列之一",
		);
		$row['keywords'] = "硕星技术，硕星，硕星信息，西安硕星信息技术有限公司";
		$this->assign('title','技术支持，硕星，硕星信息，服务器，硕星服务器，西安硕星信息技术有限公司，西安硕星信息技术有限公司欢迎您！');
		$this->assign('row',$row);
		$this->assign('spstatus','uk-active');
		$this->display();
	}
	public function Download(){
		$row['downstatus'] = "uk-active";
		$this->assign('row',$row);
		$this->display();
	}
	public function Documentation(){
		$row['docustatus'] = "uk-active";
		$this->assign('row',$row);
		$this->display();
	}
	public function Discuss(){
		$row['discstatus'] = 'uk-active';
		$this->assign('row',$row);
		$this->display();
	}
}