<?php
class ProductC extends C{
	public function Index(){
		$row['product'] = array(
			'name'=>'硕星S系列产品参数',
			'cpu'=>'支持2个英特尔® 至强® 处理器E5-2600V3/V4系列',
			'chipset'=>'英特尔®C612服务器专用芯片组',
			'memory'=>'16个内存插槽，最高支持DDR4-2400,内存支持高级内存纠错、内存镜像、内存热备等高级功能',
			'satacontrol'=>'集成6Gb SATA磁盘控制器',
			'raid'=>'集成的SATA磁盘控制器支持RAID 0/1/10/5,可选扩展支持RAID 0/1/5/6/10/50/60的、具备缓存的高性能SAS RAID控制器并可扩展缓存保护电池、电容',
			'hddcount'=>'最大支持10块2.5寸SAS/SATA硬盘或10块3.5寸SATA硬盘',
			'ioex'=>'6个PCIE 3.0插槽Slot 1：PCIE x8+x1, 支持全高全长扩展卡，支持NCSISlot 2：PCIE x8，支持全高全长扩展卡Slot 3：PCIE x16，支持全高全长扩展卡Slot 4：PCIE x16（8 lanes)，支持全高全长扩展卡Slot 5：PCIE x16，支持全高全长扩展卡Slot 6：PCIE x8，支持全高全长扩展卡',
			'iocount'=>'前置：2个USB 3.0接口后置：2个USB 3.0接口，1个标准VGA接口，2个RJ45网络接口，1个独立管理网口内置：2个USB 3.0接口',
			'network'=>'集成高性能双千兆网卡，支持网络唤醒、网络冗余、负载均衡等网络高级特性',
			'power'=>'单/双电500W输出功率，1+1冗余；单电800W输出功率',
			'graphics'=>'主板集成16M显存显示控制器',
			'dvdrom'=>'支持DVD光驱',
			'manager'=>'集成系统管理芯片，支持IPMI2.0、KVM、虚拟媒体等管理功能支持硕星服务器管理、部署软件',
			'os'=>'Windows 7、8、10；Winserver 2008、2012；CentOS 6、7等多种不同操作系统，具体详情可咨询硕星公司',
			'temp'=>'10℃～35℃',
			'vol'=>'180V~264V（单电）50HZ，90V~264V（双电）50HZ',
			'box'=>'塔式：220mm(W) x 435mm(H) x 610mm(D) 机架：435mm(W) x 220mm(H) x 610mm(D)',
			'weight'=>'满配15.15kg左右',
		);
		$this->assign('title','硕星产品，硕星，西安硕星，服务器，硕星服务器，西安硕星信息技术有限公司，西安硕星信息技术有限公司欢迎您！');
		$this->assign('mycss',"<link rel='stylesheet' href='"._P_."/css/product.css'>");
		$this->assign('pdstatus','uk-active');
		$this->assign('row',$row);
		$this->display();
	}
	public function Lists(){
		$this->assign('title','硕星产品，硕星，西安硕星，服务器，硕星服务器，西安硕星信息技术有限公司，西安硕星信息技术有限公司欢迎您！');
		$this->assign('mycss',"<link rel='stylesheet' href='"._P_."/css/product.css'>");
		$this->assign('pdstatus','uk-active');
		$this->display();
	}
	public function Wseries(){
		$row['product'] = array(
			'name'=>'硕星W系列产品参数',
			'cpu'=>'支持2个英特尔® 至强® 处理器E5-2600V3/V4系列',
			'chipset'=>'英特尔®C612服务器专用芯片组',
			'memory'=>'16个内存插槽，最高支持DDR4-2400,内存支持高级内存纠错、内存镜像、内存热备等高级功能',
			'satacontrol'=>'集成6Gb SATA磁盘控制器',
			'raid'=>'集成的SATA磁盘控制器支持RAID 0/1/10/5,可选扩展支持RAID 0/1/5/6/10/50/60的、具备缓存的高性能SAS RAID控制器并可扩展缓存保护电池、电容',
			'hddcount'=>'最大支持10块2.5寸SAS/SATA硬盘或10块3.5寸SATA硬盘',
			'ioex'=>'6个PCIE 3.0插槽Slot 1：PCIE x8+x1, 支持全高全长扩展卡，支持NCSISlot 2：PCIE x8，支持全高全长扩展卡Slot 3：PCIE x16，支持全高全长扩展卡Slot 4：PCIE x16（8 lanes)，支持全高全长扩展卡Slot 5：PCIE x16，支持全高全长扩展卡Slot 6：PCIE x8，支持全高全长扩展卡',
			'iocount'=>'前置：2个USB 3.0接口后置：2个USB 3.0接口，1个标准VGA接口，2个RJ45网络接口，1个独立管理网口内置：2个USB 3.0接口',
			'network'=>'集成高性能双千兆网卡，支持网络唤醒、网络冗余、负载均衡等网络高级特性',
			'power'=>'单/双电500W输出功率，1+1冗余；单电800W输出功率',
			'graphics'=>'主板集成16M显存显示控制器',
			'dvdrom'=>'支持DVD光驱',
			'manager'=>'集成系统管理芯片，支持IPMI2.0、KVM、虚拟媒体等管理功能支持硕星服务器管理、部署软件',
			'os'=>'Windows 7、8、10；Winserver 2008、2012；CentOS 6、7等多种不同操作系统，具体详情可咨询硕星公司',
			'temp'=>'10℃～35℃',
			'vol'=>'180V~264V（单电）50HZ，90V~264V（双电）50HZ',
			'box'=>'塔式：220mm(W) x 435mm(H) x 610mm(D) 机架：435mm(W) x 220mm(H) x 610mm(D)',
			'weight'=>'满配15.15kg左右',
		);
		$this->assign('title','硕星产品，硕星，西安硕星，服务器，硕星服务器，西安硕星信息技术有限公司，西安硕星信息技术有限公司欢迎您！');
		$this->assign('mycss',"<link rel='stylesheet' href='"._P_."/css/product.css'>");
		$this->assign('pdstatus','uk-active');
		$this->assign('row',$row);
		$this->display();
	}
	public function Pseries(){
		$row['product'] = array(
			'name'=>'硕星P系列产品参数',
			'cpu'=>'支持2个英特尔® 至强® 处理器E5-2600V3/V4系列',
			'chipset'=>'英特尔®C612服务器专用芯片组',
			'memory'=>'16个内存插槽，最高支持DDR4-2400,内存支持高级内存纠错、内存镜像、内存热备等高级功能',
			'satacontrol'=>'集成6Gb SATA磁盘控制器',
			'raid'=>'集成的SATA磁盘控制器支持RAID 0/1/10/5,可选扩展支持RAID 0/1/5/6/10/50/60的、具备缓存的高性能SAS RAID控制器并可扩展缓存保护电池、电容',
			'hddcount'=>'最大支持10块2.5寸SAS/SATA硬盘或10块3.5寸SATA硬盘',
			'ioex'=>'6个PCIE 3.0插槽Slot 1：PCIE x8+x1, 支持全高全长扩展卡，支持NCSISlot 2：PCIE x8，支持全高全长扩展卡Slot 3：PCIE x16，支持全高全长扩展卡Slot 4：PCIE x16（8 lanes)，支持全高全长扩展卡Slot 5：PCIE x16，支持全高全长扩展卡Slot 6：PCIE x8，支持全高全长扩展卡',
			'iocount'=>'前置：2个USB 3.0接口后置：2个USB 3.0接口，1个标准VGA接口，2个RJ45网络接口，1个独立管理网口内置：2个USB 3.0接口',
			'network'=>'集成高性能双千兆网卡，支持网络唤醒、网络冗余、负载均衡等网络高级特性',
			'power'=>'单/双电500W输出功率，1+1冗余；单电800W输出功率',
			'graphics'=>'主板集成16M显存显示控制器',
			'dvdrom'=>'支持DVD光驱',
			'manager'=>'集成系统管理芯片，支持IPMI2.0、KVM、虚拟媒体等管理功能支持硕星服务器管理、部署软件',
			'os'=>'Windows 7、8、10；Winserver 2008、2012；CentOS 6、7等多种不同操作系统，具体详情可咨询硕星公司',
			'temp'=>'10℃～35℃',
			'vol'=>'180V~264V（单电）50HZ，90V~264V（双电）50HZ',
			'box'=>'塔式：220mm(W) x 435mm(H) x 610mm(D) 机架：435mm(W) x 220mm(H) x 610mm(D)',
			'weight'=>'满配15.15kg左右',
		);
		$this->assign('title','硕星产品，硕星，西安硕星，服务器，硕星服务器，西安硕星信息技术有限公司，西安硕星信息技术有限公司欢迎您！');
		$this->assign('mycss',"<link rel='stylesheet' href='"._P_."/css/product.css'>");
		$this->assign('pdstatus','uk-active');
		$this->assign('row',$row);
		$this->display();
	}
}
